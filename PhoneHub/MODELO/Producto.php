<?php

class Producto{
    private $db;
    private $productos;

    public function __construct(){
        $this->db = Conexion::conexion();
        $this->productos = array();
    }

    public function pedirDatos(){
        $sql = "SELECT * FROM producto";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()){
            $this->productos[] = $row;
        }

        $stmt->close();

        return $this->productos;
    }

    public function pedirNovedades(){
        $sql = "SELECT * FROM producto ORDER BY idProducto DESC LIMIT 6";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();

        while($row = $result->fetch_assoc()){
            $this->productos[] = $row;
        }

        $stmt->close();

        return $this->productos;
    }
}
?>
