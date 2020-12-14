<?php

use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Rutas Web Banco de imágenes
|--------------------------------------------------------------------------
|   
| Sólo hay un usuario y es el administrador. No hay registro de más usuarios
| El administrador accede al portal desde la ruta "/iniAdmin"
| Dentro del seeder se encuentra el administrador para autenticarse:
| email: administrador@gmail.com
| password: password
|
*/

Route::get('/', 'ImagenController@index');

Route::get('/imagen', 'ImagenController@imagen');
Route::post('/guardaImagen', 'ImagenController@guardaImagen');
Route::post('/buscaImagen', 'ImagenController@buscaImagen');
Route::get('/verImg/{id}', 'ImagenController@ver');
Route::get('/guardarImg/{id}', 'ImagenController@guardar');

Route::post('/agregaSecciones', 'CategoriasController@store');
Route::get('/categorias', 'CategoriasController@index');
Route::get('/verCategoria/{id}', 'CategoriasController@ver');

Route::get('/iniAdmin', 'AdminController@inicio');
Auth::routes();
Auth::routes(['register' => false]);