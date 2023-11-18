<?php

session_start();

require_once('Conexion.php'); // Ajusta la ruta según tu estructura de archivos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se enviaron datos de registro
    if (
        isset($_POST['nombre']) &&
        isset($_POST['apellido']) &&
        isset($_POST['email2']) &&
        isset($_POST['password1']) &&
        isset($_POST['password2'])
    ) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email2'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        // Verificar si las contraseñas coinciden
        if ($password1 !== $password2) {
            $_SESSION['errorRegistro'] = "Las contraseñas no coinciden";
            header('Location: ../index.php');
            exit();
        }

        // Verificar si ya existe un usuario con ese correo
        $conexion = Conexion::conexion(); // Utiliza la función de tu clase para obtener la conexión
        $consultaExistencia = "SELECT * FROM usuario WHERE correo = ?";
        $stmtExistencia = $conexion->prepare($consultaExistencia);
        $stmtExistencia->bind_param('s', $email);
        $stmtExistencia->execute();
        $resultadoExistencia = $stmtExistencia->get_result();

        if ($resultadoExistencia->num_rows > 0) {
            // Ya existe un usuario con ese correo
            $_SESSION['errorRegistro'] = "Ya existe un usuario con ese correo";
            header('Location: ../index.php');
            exit();
        }

        // Si llegamos aquí, el correo no existe, podemos registrar al nuevo usuario
        $hashPassword = password_hash($password1, PASSWORD_DEFAULT); // Hash de la contraseña

        $consultaRegistro = "INSERT INTO usuario (nombre, correo, contraseña) VALUES (?, ?, ?)";
        $stmtRegistro = $conexion->prepare($consultaRegistro);
        $stmtRegistro->bind_param('sss', $nombre , $email, $hashPassword);

        if ($stmtRegistro->execute()) {
            // Registro exitoso
            $_SESSION['mensaje'] = "Registro exitoso. Ahora puedes iniciar sesión.";
            header('Location: ../index.php');
            exit();
        } else {
            // Error en el registro
            $_SESSION['errorRegistro'] = "Error en el registro. Inténtalo de nuevo.";
            header('Location: ../index.php');
            exit();
        }
    } else {
        $_SESSION['errorRegistro'] = "Datos de registro incompletos";
        header('Location: ../index.php');
        exit();
    }
}
?>
