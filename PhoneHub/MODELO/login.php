<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = "admin";
    $password = "qwerty";

    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['admin'] = $username;
        setcookie('admin', $username, time() + (50), "/");
        header('Location: ../index.php'); // Redirige a la página principal
        exit();
    } else {
        $_SESSION['error'] = "Credenciales inválidas";
    }
}
?>

