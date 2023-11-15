<?php

class Producto{

    private $db;
    private $productos;

    public function __construct(){
        $this->db = Conexion::conexion();
        $this-> productos = array();
    }

    public function pedirDatos(){
        $sql = "SELECT * FROM producto";
         $resultado = $this->db->query($sql);
        while($row = $resultado->fetch_assoc()){
            $this->productos [] = $row;
        }
        return $this->productos;
    }
}