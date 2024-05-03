<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class TableroController extends Controller
{
    public function crear()
    {
        return view('crearTablero');
    }

    public function tablero($codigotablero)
    {
        $client = new Client();
        $response = $client->get('localhost:8091/pinterest/tablero/pines/'.$codigotablero);
        $tablero = json_decode($response->getBody()->getContents());
        return view('PinesPorTablero', compact('tablero' , 'codigotablero'));
    }
}
