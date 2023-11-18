<?php

require_once "MODELO/Producto.php";

class ProductoController{

    public function buscarDatos(){
        $producto = new Producto();
        return $producto->pedirDatos();
    }

}