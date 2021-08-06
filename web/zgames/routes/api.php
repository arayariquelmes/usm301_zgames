<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Quiero usar el controllador asi que lo importo, se importa con namespace\NombreClase
use App\Http\Controllers\ConsolasController;
use App\Http\Controllers\JuegosController;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//La ruta puede ser post o get (post para enviar cosas a la bd, get para obtener)
Route::get("marcas/get", [ConsolasController::class, "getMarcas"]);
//Route::get("endpoint", [controlador::class,"metodo"])
//Rutas del controlador de consolas
Route::get("consolas/get", [ConsolasController::class, "getConsolas"]);
Route::get("consolas/filtrar", [ConsolasController::class, "filtrarConsolas"]);

Route::post("consolas/post", [ConsolasController::class,"crearConsola"]);
Route::post("consolas/actualizar", [ConsolasController::class,"actualizarConsola"]);
Route::post("consolas/delete", [ConsolasController::class,"eliminarConsola"]);
Route::get("consolas/findById", [ConsolasController::class,"obtenerPorId"]);
//Rutas del controlador de Juegos
Route::get("juegos/get", [JuegosController::class, "getJuegos"]);
Route::get("juegos/getByConsola", [JuegosController::class, "getJuegosByConsola"]);
Route::post("juegos/post", [JuegosController::class, "save"]);
Route::post("juegos/delete", [JuegosController::class, "remove"]);