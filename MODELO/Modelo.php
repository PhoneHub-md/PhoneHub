<?php
require_once("Conexion.php");
require_once("MODELO/Usuario.php");
require_once("MODELO/Producto.php");

class Modelo{
    private $db;
    public function __construct(){
        $this->db = Conexion::conexion();
    }
    public function login($correo){
        $consulta = "SELECT * FROM usuario WHERE correo = ?";
        $stmt = $this->db->prepare($consulta);
        $stmt->bind_param('s', $correo);
        $stmt->execute();

        $resultado = $stmt->get_result();
        $usuario = $resultado->fetch_assoc();
        if($usuario){
            $user = new Usuario($usuario);
            return $user;
        }else{
            return null;
        }
    }

    public function logout($cartData, $favsData, $idUsuario){
        $consulta = "UPDATE usuario SET cartData = ?, favsData = ? WHERE idUsuario = ?";
        $stmt = $this->db->prepare($consulta);
        $stmt->bind_param("ssi", $cartData, $favsData, $idUsuario);
        $stmt->execute();

        $stmt->close();
    }

    public function registroExistente($correo){
        $consultaExistencia = "SELECT * FROM usuario WHERE correo = ?";
        $stmtExistencia = $this->db->prepare($consultaExistencia);
        $stmtExistencia->bind_param('s', $email);
        $stmtExistencia->execute();
        $resultadoExistencia = $stmtExistencia->get_result();
        if ($resultadoExistencia->num_rows > 0) {
            return false;
        }else{
            return true;
        }
    }

    public function registrarUsuario($nombreCompleto, $email, $hashPassword){
        $consultaRegistro = "INSERT INTO usuario (nombre, correo, contraseña) VALUES (?, ?, ?)";
        $stmtRegistro = $this->db->prepare($consultaRegistro);
        $stmtRegistro->bind_param('sss', $nombreCompleto , $email, $hashPassword);
        if ($stmtRegistro->execute()) {
            $_SESSION['mensaje'] = "Registro exitoso. Ahora puedes iniciar sesión.";
            return true;
        } else {
            $_SESSION['errorRegistro'] = "Error en el registro. Inténtalo de nuevo.";
            return false;
        }
    }

    public function buscarProductos($marca = null, $precio = null, $orden = null, $buscar = null) {
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

        if ($buscar !== null) {
            $buscarParam = '%' . strtolower($buscar) . '%';
            $stmt->bind_param('s', $buscarParam);
        }

        if ($marca !== null) {
            $marcaParam = $marca . '%';
            $stmt->bind_param('s', $marcaParam);
        }
    
        $stmt->execute();
    
        $result = $stmt->get_result();
        $productos = array();

        while ($row = $result->fetch_assoc()) {
            
            $producto = new Producto($row['idProducto'], $row['titulo'], $row['descripcion'], $row['precio'], $row['imagenProducto']);
            $productos[] = $producto;
        }
    
        $stmt->close();
    
        return $productos;
    }

    public function buscarNovedades(){
        $sql = "SELECT * FROM producto ORDER BY idProducto DESC LIMIT 6";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();
        $productos = array();

        while ($row = $result->fetch_assoc()) {

            $producto = new Producto($row['idProducto'], $row['titulo'], $row['descripcion'], $row['precio'], $row['imagenProducto']);
            $productos[] = $producto;
        }
    
        $stmt->close();
    
        return $productos;
    }

    public function agregarProducto($producto){
        $tituloProducto = $producto->getTitulo();
        $descripcionProducto = $producto->getDescripcion();
        $precioProducto = $producto->getPrecio();
        $imagenProducto = $producto->getImagenProducto();

        $consulta = "INSERT INTO producto (titulo, descripcion, precio, imagenProducto) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($consulta);
        $stmt->bind_param("ssib", $tituloProducto, $descripcionProducto, $precioProducto, $imagenProducto);
        $stmt->send_long_data(3, $imagenProducto);
        $stmt->execute();
        $stmt->close();

        return $producto;
    }

    public function borrarProducto($idProducto){
        $consulta = "DELETE FROM producto WHERE idProducto = ?";
        $stmt = $this->db->prepare($consulta);
        $stmt->bind_param('i', $idProducto);
        $stmt->execute();
        $stmt->close();
    }

    public function pagar($idUsuario){
        $consulta = "UPDATE usuario SET cartData = NULL WHERE idUsuario = ?";
        $stmt = $this->db->prepare($consulta);
        $stmt->bind_param("i", $idUsuario);
        $stmt->execute();
        $stmt->close();
    }
}