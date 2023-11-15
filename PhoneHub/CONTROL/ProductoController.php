<?php

class ProductoController{

    public function buscarDatos(){
        require_once "../MODELO/Producto.php";
        $producto = new Producto();
        return $producto->pedirDatos();
    }
}