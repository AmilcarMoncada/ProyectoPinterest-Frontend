<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class UsuarioController extends Controller
{
    public function login()
    {
        return view('index');
    }

    public function registrarse()
    {
        return view('registrar');
    }


    public function registroConfirmado(Request $request){
        try{

            $genero = ($request->input('genero')=='Masculino') ? 'Masculino' : 'Femenino';
            $body = [
                "usuarios" => [
                "nombres" => $request->input('nombre'),
                "apellidos" => $request->input('apellido'),
                "genero" => $genero,
                "correo" => $request->input('correo'),
                "password" => $request->input('password')
                ]
            ];

                $jsonBody = json_encode($body);
                $client = new Client();
                $response = $client->post('http://localhost:8091/pinterest/usuario/crear', [
                    'headers' => ['Content-Type' => 'application/json'],
                    'body' => $jsonBody,
                ]);

                $responseData = json_decode($response->getBody(), true);
                $responseBody = $responseData['responseBody'];
                $codigousuario = $responseBody['codigousuario'];
                return  view('vistaperfilUsuario', $codigousuario);
        }catch(RequestException $e){

            return 'Error al crear el Usuario'.$e->getMessage();

        }

    }

    public function loginConfirmado(Request $request){
        $nombres = $request->input('nombres');
        $password = $request->input('password');

        try {
        $client = new Client();

            $response = $client->get('localhost:8091/pinterest/usuario/autenticar/'.$nombres.'?password='.$password);
            
            $body = json_decode($response->getBody()->getContents());
            $perfil = $body;
        $responsePines = $client->get('localhost:8091/pinterest/pines/todos');
        $pines = json_decode($responsePines->getBody()->getContents());
            if (!empty($perfil->codigoPerfil)) {
                return view('usuariovista', compact('perfil', 'pines'));
            } else {
                return response()->json(['mensaje' => 'Correo o contraseña incorrectos'], 401);
            }
        } catch (RequestException $e) {
            return response()->json(['mensaje' => 'Error al enviar la solicitud a la API externa'], 500);
        }
        // Decodificamos el body para poder usarlo como valores
            /*$responseBody = $jsonResponse['responseBody'];
            dd($responseBody);
            $cliente = $responseBody['cliente'];
            $clienteId = $cliente['clienteId'];
            $responseData = json_decode($responseCliente->getBody());
            $perfilcliente = $responseData->responseBody;*/
        /*, compact('productos', 'categorias')*/
     
    }
    
    public function perfil($codigoPerfil)
    {
        $Usuario = rtrim($codigoPerfil, "'");
        $codigoUsuario = intval($Usuario);
        $client = new Client();
        $response = $client->get('localhost:8091/pinterest/usuario/mostrar?codigousuario='.$codigoUsuario);
        $response2 = $client->get('localhost:8091/pinterest/pines/usuario/'.$codigoUsuario);
        $response3 = $client->get('localhost:8091/pinterest/tablero/usuario/'.$codigoUsuario);

        $pines = json_decode($response2->getBody()->getContents());
        $tableros = json_decode($response3->getBody()->getContents());
        $perfil = json_decode($response->getBody()->getContents());
        return view('vistaperfilUsuario', compact ('perfil', 'pines','tableros'));
    }

    public function editar($codigoPerfil)
    {
        $client = new Client();
        $response = $client->get('localhost:8091/pinterest/usuario/mostrar?codigousuario='.$codigoPerfil);
        $perfil = json_decode($response->getBody()->getContents());
        return view('actualizarPerfil', compact('perfil'));
    }
}
