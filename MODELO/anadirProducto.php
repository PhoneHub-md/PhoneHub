<?php

require_once('Conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tituloProducto']) && isset($_POST['descripcionProducto']) && isset($_FILES['imagenProducto']['tmp_name']) && isset($_POST['precioProducto'])) {

    $tituloProducto = trim($_POST['tituloProducto']);
    $descripcionProducto = trim($_POST['descripcionProducto']);
    $precioProducto = trim($_POST['precioProducto']);
    $imagenTmp = $_FILES['imagenProducto']['tmp_name'];

    // Verificamos si se seleccionó una imagen
    if (!empty($imagenTmp)) {
        $imagenProducto = file_get_contents($imagenTmp); // Leemos el contenido del archivo de imagen
    } else {
        // Manejar la situación donde no se selecciona una imagen
        // Puedes mostrar un mensaje de error o asignar un valor por defecto.
        $imagenProducto = null;
    }

    $conexion = Conexion::conexion();

    // Usamos un INSERT en lugar de UPDATE para agregar nuevos registros
    
    $consulta = "INSERT INTO producto (titulo, descripcion, precio, imagenProducto) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param("ssib",  $tituloProducto, $descripcionProducto, $precioProducto, $imagenProducto);
    $stmt->send_long_data(3, $imagenProducto);
    $stmt->execute();

    $stmt->close();
}

header('Location: ../index.php?home');
?>