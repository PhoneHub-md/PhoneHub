<?php
class LoginController{
    public static function verificarSesion() {

        if (isset($_SESSION['admin']) ) {
            // Si hay sesión, devolver el nombre del usuario
            return $_SESSION['admin'];
        }

        // Si no hay sesión, devolver null
        return null;
    }
}
?>