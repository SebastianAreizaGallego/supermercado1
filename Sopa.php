<?php

class Sopa
{
    //ingredientes o datos o atributos (variables)
    public $cantiadAgua;
    public $cantidadAceite;
    public $cantidadCubosSabor;

    //constructor (funcion especial)
    public function __construct(){

    } 

    // acciones que puede hacer mi clase METODOS(funciones)
    public function  prepararSopa(){
        echo("revuelva los ingredientes y deje cocinar por 20 min")
    }
    public function disfrutarSopa(){
        echo("deje enfriar y disfrute")
    }
}



?>