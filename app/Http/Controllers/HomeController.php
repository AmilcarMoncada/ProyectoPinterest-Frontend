<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $client = new Client([
            'base_uri' => 'http://localhost:8091',
            'timeout' => 2.0,
            'verify' => false,
        ]);

        $responsePines = $client->request('GET', '/pinterest/pines/todos');

        // Decodificar los datos obtenidos de las respuestas
        $pines = json_decode($responsePines->getBody()->getContents());

        // Pasar los pines a la vista
        return view('Landing-page', compact('pines'));
    }

    public function inicio()
    {
        return view('usuariovista');
    }
}
