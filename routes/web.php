<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
    
});
// routes/web.php

// routes/web.php



// Ruta para la página de inicio (asumiendo que se llama inicio)
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

// ESTA ES LA RUTA NUEVA QUE DEBES PEGAR
Route::get('/nuestras-sedes-cauca', function () {
    return view('puntos_ubi'); 
})->name('sedes.ubicacion');

Route::get('/pqrs', function () {
    // Laravel buscará el archivo pqrs.blade.php o pqrs.php
    return view('pqrs'); 
})->name('pqrs.index');
Route::get('/nosotros', function () {
    // Laravel buscará el archivo pqrs.blade.php o pqrs.php
    return view('nosotros'); 
})->name('nosotros');


// RUTAS VISTAS REFACTORIZADAS
Route::get("/inicio-ref", fn () => view("pages.inicio"));
Route::get("/sedes-ref", fn () => view("pages.sedes"));
Route::get("/pqrs-ref", fn () => view("pages.pqrs"));