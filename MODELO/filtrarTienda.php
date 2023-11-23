<?php

if(isset($_GET['precio']) && $_GET['marca'] && $_GET['orden']){
    header("Location: ../index.php?tienda&precio=" . $_GET['precio'] . "&marca=" . $_GET['marca'] . "&orden=" . $_GET['orden']);
    exit;
}

if(isset($_GET['buscar'])){
    header("Location: ../index.php?tienda&buscar=" . $_GET['buscar']);
    exit;
}


?>
