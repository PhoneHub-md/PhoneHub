<?php

session_start();

require_once('Conexion.php'); // Ajusta la ruta según tu estructura de archivos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar si se enviaron datos de inicio de sesión
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conexion = Conexion::conexion(); // Utiliza la función de tu clase para obtener la conexión

        // Verificar si las credenciales son para el administrador
        if ($email === 'admin' && $password === 'qwerty') {
            // Credenciales válidas para el administrador
            $_SESSION['admin'] = $email;
            header('Location: ../index.php');
            exit();
        } else {
            $consulta = "SELECT nombre, contraseña FROM usuario WHERE correo = ?";
            $stmt = $conexion->prepare($consulta);
            $stmt->bind_param('s', $email);
            $stmt->execute();

            $resultado = $stmt->get_result();
            $usuario = $resultado->fetch_assoc();

            if ($usuario) {// Verificar la contraseña hash
                if (password_verify($password, $usuario['contraseña'])) {
                    // Credenciales válidas
                    $_SESSION['user'] = $usuario['nombre'];
                    header('Location: ../index.php');
                    exit();
                } else {
                    // Credenciales inválidas
                    $_SESSION['errorLogin'] = "Contraseña incorrecta";
                    header('Location: ../index.php');
                    exit();
                }
            } else {
                // Credenciales inválidas
                $_SESSION['errorLogin'] = "Correo no registrado";
                header('Location: ../index.php');
                exit();
            }
        }
    } else {
        $_SESSION['errorLogin'] = "Datos de inicio de sesión incompletos";
        header('Location: ../index.php');
        exit();
    }
}
?>