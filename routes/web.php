<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PinController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TableroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home-landing');

Route::get('/login', [UsuarioController::class, 'login'])->name('usuario-login');

Route::get('/login/usuario', [UsuarioController::class, 'loginConfirmado'])->name('usuario-loggeado');

Route::get('/registrarse', [UsuarioController::class, 'registrarse'])->name('usuario-registrarse');

Route::post('/registro/usuario', [UsuarioController::class, 'registroConfirmado'])->name('usuario-registrado');

Route::get('/perfil/{codigoPerfil}', [UsuarioController::class, 'perfil'])->name('usuario-perfil');

Route::get('/perfil/editar/{codigoPerfil}', [UsuarioController::class, 'editar'])->name('perfil-editar');

Route::get('/inicio', [HomeController::class, 'inicio'])->name('home-principal');

Route::get('/crearpin', [PinController::class, 'crear'])->name('pin-crear');

Route::get('/creartablero', [TableroController::class, 'crear'])->name('tablero-crear');

Route::get('/crearpin', [PinController::class, 'crear'])->name('pin-crear');

Route::get('/vertablero/{codigotablero}', [TableroController::class, 'tablero'])->name('tablero-ver');