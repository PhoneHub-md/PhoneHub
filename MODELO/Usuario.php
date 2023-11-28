<?php
class Usuario {
    private $idUsuario;
    private $nombre;
    private $correo;
    private $contrasena;
    private $cartData;
    private $favsData;

    public function __construct($usuario) {
        $this->idUsuario = $usuario['idUsuario'];
        $this->nombre = $usuario['nombre'];
        $this->correo = $usuario['correo'];
        $this->contrasena = $usuario['contraseña'];
        $this->cartData = $usuario['cartData'];
        $this->favsData = $usuario['favsData'];
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario): void {
        $this->idUsuario = $idUsuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setContrasena($contrasena): void {
        $this->contrasena = $contrasena;
    }

    public function getCartData() {
        return $this->cartData;
    }

    public function setCartData($cartData): void {
        $this->cartData = $cartData;
    }

    public function getFavsData() {
        return $this->favsData;
    }

    public function setFavsData($favsData): void {
        $this->favsData = $favsData;
    }
}
?>
