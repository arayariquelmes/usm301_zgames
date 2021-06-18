<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consola;
//Aqui va a ir toda la logica vinculada a las consolas
class ConsolasController extends Controller
{
    public function getMarcas(){
        $marcas = array();// $marcas = ["Sony","Microsoft","Nintendo","Sega"];
        $marcas[] = "Sony";
        $marcas[] = "Microsoft";
        $marcas[] = "Nintendo";
        $marcas[] = "Sega";

        return $marcas;
    }
    /**
     * Esta funcion va a ir a buscar todas las consolas que existen en la bd
     * y las va a retornar
     */
    public function getConsolas(){
        //Equivalente a un select * from consolas
        $consolas = Consola::all();
        return $consolas;
    }
    /**
     * Esta funcion va a registrar una consola de ejemplo en la bd
     * TODO: Mejorar esto para que no sea un ejemplo
     */
    public function crearConsola(){
        //Equivalente a un insert into bla bla
        $consola = new Consola();
        $consola->nombre = "Nintendo Switch";
        $consola->marca = "Nintendo";
        $consola->anio = 2015;

        $consola->save();
        return $consola;
    }

}
// view productos.blade.php
// renderizar los productos 

//ProductosController:
  //  - ir a buscar los productos a la bd
  //  - los filtra por los disponibles
  // - formatea el precio
  // retorna lista de productos procesados

