<?php
class Conexion{

    public static function conexion(){
        $conexion = new mysqli("localhost","root","","phonehub");
        return $conexion;
    }


}