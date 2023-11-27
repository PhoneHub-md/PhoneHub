<?php
session_start();

require_once('Conexion.php');



    
   
        
        if(isset($_SESSION['user'])){
            
            $conexion = Conexion::conexion();
            $idUsuario = $_SESSION['idUser'];

            $consulta = "UPDATE usuario SET cartData = NULL WHERE idUsuario = ?";
            $stmt = $conexion->prepare($consulta);
            $stmt->bind_param("i", $idUsuario);
            $stmt->execute();

            $stmt->close();
        }
        
        
            unset($_SESSION['carrito']);
            
        
    


header('Location: ../index.php?home');
exit();
?>
