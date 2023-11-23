<?php

require_once "MODELO/Producto.php";

class ProductoController{

    public function buscarDatos($marca, $precio, $orden){
        $producto = new Producto();
        return $producto->pedirDatos($marca, $precio, $orden);
    }

    public function buscarNovedades(){

        $producto = new Producto();
        return $producto->pedirNovedades();

    }
}