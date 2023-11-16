<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = "admin";
    $password = "qwerty";

    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        $_SESSION['user'] = $username;
        setcookie('user', $username, time() + (500), "/"); // Cookie válida por 30 días
        header('Location: index.php?home'); // Redirige a la página principal
        exit();
    } else {
        // Credenciales inválidas
        echo "Credenciales inválidas";
    }
}
?>

<!-- Formulario de Login -->
<form method="post" action="">
    <label for="username">Usuario:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>
    
    <button type="submit">Iniciar sesión</button>
</form>
