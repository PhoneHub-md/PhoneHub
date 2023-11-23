<?php

class Producto{
    private $db;
    private $productos;

    public function __construct(){
        $this->db = Conexion::conexion();
        $this->productos = array();
    }

    public function pedirDatos($marca = null, $precio = null, $orden = null, $buscar = null) {
        $sql = "SELECT * FROM producto WHERE 1";
    
        if ($buscar !== null) {
            $sql .= " AND LOWER(titulo) LIKE LOWER(?)";
        }

        if ($marca !== null) {
            $sql .= " AND titulo LIKE ?";
        }
    
        if ($precio !== null) {
            switch ($precio) {
                case 1:
                    $sql .= " AND precio BETWEEN 100 AND 250";
                    break;
                case 2:
                    $sql .= " AND precio BETWEEN 250 AND 400";
                    break;
                case 3:
                    $sql .= " AND precio BETWEEN 400 AND 650";
                    break;
                case 4:
                    $sql .= " AND precio BETWEEN 650 AND 800";
                    break;
                case 5:
                    $sql .= " AND precio > 800";
                    break;
            }
        }
    
        if ($orden !== null) {
            switch ($orden) {
                case 1:
                    $sql .= " ORDER BY precio ASC";
                    break;
                case 2:
                    $sql .= " ORDER BY precio DESC";
                    break;
            }
        }
    
        $stmt = $this->db->prepare($sql);
    
        if ($marca !== null) {
            $marcaParam = $marca . '%';
            $stmt->bind_param('s', $marcaParam);
        }

        if ($buscar !== null) {
            $buscarParam = '%' . strtolower($buscar) . '%';
            $stmt->bind_param('s', $buscarParam);
        }
    
        $stmt->execute();
    
        $result = $stmt->get_result();
    
        $this->productos = [];
    
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
