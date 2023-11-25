<?php

session_start();

require_once('Conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $conexion = Conexion::conexion();

        if ($email === 'admin' && $password === 'qwerty') {
            $_SESSION['admin'] = $email;
            header('Location: ../index.php');
            exit();
        } else {
            $consulta = "SELECT * FROM usuario WHERE correo = ?";
            $stmt = $conexion->prepare($consulta);
            $stmt->bind_param('s', $email);
            $stmt->execute();

            $resultado = $stmt->get_result();
            $usuario = $resultado->fetch_assoc();

            if ($usuario) {
                if (password_verify($password, $usuario['contraseña'])) {
                    $_SESSION['idUser'] = $usuario['idUsuario'];
                    $_SESSION['user'] = $usuario['nombre'];

                    if (!empty($usuario['cartData'])) {
                        $_SESSION['carrito'] = unserialize($usuario['cartData']);
                    } else {
                        $_SESSION['carrito'] = array();
                    }
                    if (!empty($usuario['favsData'])) {
                        $_SESSION['favoritos'] = unserialize($usuario['favsData']);
                    } else {
                        $_SESSION['favoritos'] = array();
                    }
                    header('Location: ../index.php');
                    exit();
                } else {
                    $_SESSION['errorLogin'] = "Contraseña incorrecta";
                    header('Location: ../index.php');
                    exit();
                }
            } else {
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