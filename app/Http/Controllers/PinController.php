<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinController extends Controller
{
    public function crear()
    {
        return view('crearPin');
    }
    
}
