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
     * Una Request es un objeto php que permite acceder a las cosas que me mandaron
     * desde la interfaz (desde el formulario)
     * CUANDO EL METODO RECIBE COSAS EL REQUEST VA EN LOS PARENTESIS
     */
    public function crearConsola(Request $request){
        //Equivalente a un insert into bla bla
        $input = $request->all(); //Genera un arreglo con todo lo que mando la intefaz
        //Cuando hablo de interfaz hablo de javascript
        $consola = new Consola();
        $consola->nombre = $input["nombre"];
        $consola->marca = $input["marca"];
        $consola->anio = $input["anio"];

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

