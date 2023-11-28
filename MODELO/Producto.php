<?php
class Producto {
    private $idProducto;
    private $titulo;
    private $descripcion;
    private $precio;
    private $imagenProducto;

    public function __construct($idProducto, $titulo, $descripcion, $precio, $imagenProducto) {
        $this->idProducto = $idProducto;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->imagenProducto = $imagenProducto;
    }

    public function getIdProducto() {
        return $this->idProducto;
    }

    public function setIdProducto($idProducto): void {
        $this->idProducto = $idProducto;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio): void {
        $this->precio = $precio;
    }

    public function getImagenProducto() {
        return $this->imagenProducto;
    }

    public function setImagenProducto($imagenProducto): void {
        $this->imagenProducto = $imagenProducto;
    }
}
?>
