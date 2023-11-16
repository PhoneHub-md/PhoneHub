<?php
class LoginController{
    public static function verificarSesion() {

        if (isset($_SESSION['user']) || isset($_COOKIE['user'])) {
            // Si hay sesión, devolver el nombre del usuario
            return $_SESSION['user'] ?? $_COOKIE['user'];
        }

        // Si no hay sesión, devolver null
        return null;
    }
}
?>