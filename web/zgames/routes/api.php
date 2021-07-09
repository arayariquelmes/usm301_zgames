<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//Quiero usar el controllador asi que lo importo, se importa con namespace\NombreClase
use App\Http\Controllers\ConsolasController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//La ruta puede ser post o get (post para enviar cosas a la bd, get para obtener)
Route::get("marcas/get", [ConsolasController::class, "getMarcas"]);
//Route::get("endpoint", [controlador::class,"metodo"])

Route::get("consolas/get", [ConsolasController::class, "getConsolas"]);
Route::get("consolas/filtrar", [ConsolasController::class, "filtrarConsolas"]);

Route::post("consolas/post", [ConsolasController::class,"crearConsola"]);
Route::post("consolas/delete", [ConsolasController::class,"eliminarConsola"]);