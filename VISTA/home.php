<?php
    require_once "CONTROL/Controlador.php";
    $novedades = buscarNovedades();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneHub</title>
    <link rel="stylesheet" type="text/css" href="VISTA/css/style.css">
    <link href="VISTA/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php include 'navbar.php'; ?>                                           
    <section>
        <div class="container-fluid  fondo d-flex flex-column justify-content-center align-content-center ">   <!--FOTO CONTAINER-->
            <div class="row">
                <div class="col">
                    <p style="text-shadow: black 0.1em 0.1em 0.2em" class="text-white elemento text-center display-4 text-uppercase  fw-bold">LA MEJOR ELECCIÓN PARA TU PRÓXIMO </br> DISPOSITIVO.</p>
                </div>
            </div>
            <div class="row p-5">
                <div class="col text-center">
                    <a href="index.php?tienda"><button class="btn elemento btn-outline-light mt-5 shadow" >Descubrir</button></a>
                </div>
            </div>
            <div class=" col-2 col-md-1 fixed-right-bottom">
                <a href="https://wa.me/34722677154" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 48 48">
                        <path fill="#fff" d="M4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5c5.1,0,9.8,2,13.4,5.6	C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19c0,0,0,0,0,0h0c-3.2,0-6.3-0.8-9.1-2.3L4.9,43.3z"></path><path fill="#fff" d="M4.9,43.8c-0.1,0-0.3-0.1-0.4-0.1c-0.1-0.1-0.2-0.3-0.1-0.5L7,33.5c-1.6-2.9-2.5-6.2-2.5-9.6	C4.5,13.2,13.3,4.5,24,4.5c5.2,0,10.1,2,13.8,5.7c3.7,3.7,5.7,8.6,5.7,13.8c0,10.7-8.7,19.5-19.5,19.5c-3.2,0-6.3-0.8-9.1-2.3	L5,43.8C5,43.8,4.9,43.8,4.9,43.8z"></path><path fill="#cfd8dc" d="M24,5c5.1,0,9.8,2,13.4,5.6C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19h0c-3.2,0-6.3-0.8-9.1-2.3	L4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5 M24,43L24,43L24,43 M24,43L24,43L24,43 M24,4L24,4C13,4,4,13,4,24	c0,3.4,0.8,6.7,2.5,9.6L3.9,43c-0.1,0.3,0,0.7,0.3,1c0.2,0.2,0.4,0.3,0.7,0.3c0.1,0,0.2,0,0.3,0l9.7-2.5c2.8,1.5,6,2.2,9.2,2.2	c11,0,20-9,20-20c0-5.3-2.1-10.4-5.8-14.1C34.4,6.1,29.4,4,24,4L24,4z"></path><path fill="#40c351" d="M35.2,12.8c-3-3-6.9-4.6-11.2-4.6C15.3,8.2,8.2,15.3,8.2,24c0,3,0.8,5.9,2.4,8.4L11,33l-1.6,5.8	l6-1.6l0.6,0.3c2.4,1.4,5.2,2.2,8,2.2h0c8.7,0,15.8-7.1,15.8-15.8C39.8,19.8,38.2,15.8,35.2,12.8z"></path><path fill="#fff" fill-rule="evenodd" d="M19.3,16c-0.4-0.8-0.7-0.8-1.1-0.8c-0.3,0-0.6,0-0.9,0	s-0.8,0.1-1.3,0.6c-0.4,0.5-1.7,1.6-1.7,4s1.7,4.6,1.9,4.9s3.3,5.3,8.1,7.2c4,1.6,4.8,1.3,5.7,1.2c0.9-0.1,2.8-1.1,3.2-2.3	c0.4-1.1,0.4-2.1,0.3-2.3c-0.1-0.2-0.4-0.3-0.9-0.6s-2.8-1.4-3.2-1.5c-0.4-0.2-0.8-0.2-1.1,0.2c-0.3,0.5-1.2,1.5-1.5,1.9	c-0.3,0.3-0.6,0.4-1,0.1c-0.5-0.2-2-0.7-3.8-2.4c-1.4-1.3-2.4-2.8-2.6-3.3c-0.3-0.5,0-0.7,0.2-1c0.2-0.2,0.5-0.6,0.7-0.8	c0.2-0.3,0.3-0.5,0.5-0.8c0.2-0.3,0.1-0.6,0-0.8C20.6,19.3,19.7,17,19.3,16z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>              <!--FIN FOTO CONTAINER-->
        
        <div class="container-fluid bg-body-secondary">       <!--CONTAINER CARROUSSEL-->
            <div class="row  justify-content-center ">
                <div class="text-center col-9 col-md  mt-5 mb-2 p-3">
                    <span class="fs-1 elemento">Últimas novedades</span>
                </div>
            </div>
            <div class="row p-5 d-none d-lg-block elemento">         <!--CARROUSSEL NO RESPONSIVE-->
                <div class="col p-4">
                    <div id="carouselExamplee" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            <div class="carousel-item active" data-bs-interval="5000">   <!--PRIMEROS 3 PRODUCTOS-->
                                <div class="row  justify-content-around">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador < 3):
                                    ?>
                                        
                                        <div class="col-3 bg-body rounded">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column text-center ">
                                                    <span class="p-1 mt-2 fw-semibold"><?php echo $producto->getTitulo(); ?></span>
                                                    <span class="p-1"><?php echo $producto->getPrecio(); ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto->getTitulo(); ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                        <?php
                                                        if(isset($_SESSION['admin'])){
                                                            echo '<button type="submit" class="btn btn-danger m-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                    </button>';
                                                        }else{
                                                            ?>
                                                            <button type="button" class="btn btn-dark anadirAlCarrito m-1 ">
                                                                <span class="btn-text">Añadir al carrito</span>
                                                                <div class="spinner-border" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            if(isset($_SESSION['user'])){
                                                            ?>
                                                            <button type="button" class="btn btn-outline-danger border border-0  anadirAFavoritos m-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart btn-text" viewBox="0 0 16 16">
                                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                </svg>
                                                                <div class="spinner-border spinner-border-sm" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    <?php 
                                        endif;
                                        $contador++;
                                    endforeach; 
                                    ?>
                                </div>
                            </div>                  <!--FIN PRIMEROS 3 PRODUCTOS-->

                            <div class="carousel-item " data-bs-interval="5000">   <!--SEGUNDOS 3 PRODUCTOS-->
                                <div class="row justify-content-around">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador >= 3):
                                    ?>
                                        <div class="col-3 bg-body rounded ">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column text-center">
                                                    <span class="p-1 mt-2 fw-semibold"><?php echo $producto->getTitulo(); ?></span>
                                                    <span class="p-1"><?php echo $producto->getPrecio(); ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto->getTitulo(); ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                                        <?php
                                                        if(isset($_SESSION['admin'])){
                                                            echo '<button type="submit" class="btn btn-danger m-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                    </button>';
                                                        }else{
                                                            ?>
                                                            <button type="button" class="btn btn-dark anadirAlCarrito m-1 ">
                                                                <span class="btn-text">Añadir al carrito</span>
                                                                <div class="spinner-border" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            if(isset($_SESSION['user'])){
                                                            ?>
                                                            <button type="button" class="btn btn-outline-danger border border-0  anadirAFavoritos m-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart btn-text" viewBox="0 0 16 16">
                                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                </svg>
                                                                <div class="spinner-border spinner-border-sm" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    <?php 
                                        endif;
                                        $contador++;
                                    endforeach; 
                                    ?>
                                </div>
                            </div>
                                                  <!--FIN SEGUNDOS 3 PRODUCTOS-->
                          
                        </div>
                        <button style="height: 2em; margin-top:8em" class="carousel-control-prev" type="button" data-bs-target="#carouselExamplee" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button style="height: 2em; margin-top:8em" class="carousel-control-next" type="button" data-bs-target="#carouselExamplee" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>                              <!--FIN CARROUSSEL NO RESPONISVE-->

            <div class="row p-5 d-none d-md-block d-lg-none elemento">     <!--CARROUSSEL RESPONSIVE 1-->
                <div class="col p-4">
                    <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="5000">    <!--PRIMEROS 2 PRODUCTOS-->
                                <div class="row justify-content-around">
                                    <?php
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador < 2):
                                    ?>
                                        <div class="col-4 bg-body rounded">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column text-center">
                                                    <span class="p-1 mt-2 fw-semibold"><?php echo $producto->getTitulo(); ?></span>
                                                    <span class="p-1 "><?php echo $producto->getPrecio(); ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto->getTitulo(); ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                        <?php
                                                        if(isset($_SESSION['admin'])){
                                                            echo '<button type="submit" class="btn btn-danger m-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                    </button>';
                                                        }else{
                                                            ?>
                                                            <button type="button" class="btn btn-dark anadirAlCarrito m-1 ">
                                                                <span class="btn-text">Añadir al carrito</span>
                                                                <div class="spinner-border" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            if(isset($_SESSION['user'])){
                                                            ?>
                                                            <button type="button" class="btn btn-outline-danger border border-0  anadirAFavoritos m-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart btn-text" viewBox="0 0 16 16">
                                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                </svg>
                                                                <div class="spinner-border spinner-border-sm" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    <?php 
                                        endif;
                                        $contador++;
                                    endforeach; 
                                    ?>   
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">      <!--SEGUNDOS 2 PRODUCTOS-->
                                <div class="row justify-content-around">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador >= 2 && $contador <4):
                                    ?>
                                        <div class="col-4 bg-body rounded">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column text-center">
                                                    <span class="p-1 mt-2 fw-semibold"><?php echo $producto->getTitulo(); ?></span>
                                                    <span class="p-1 "><?php echo $producto->getPrecio(); ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto->getTitulo(); ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                        <?php
                                                        if(isset($_SESSION['admin'])){
                                                            echo '<button type="submit" class="btn btn-danger m-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                    </button>';
                                                        }else{
                                                            ?>
                                                            <button type="button" class="btn btn-dark anadirAlCarrito m-1 ">
                                                                <span class="btn-text">Añadir al carrito</span>
                                                                <div class="spinner-border" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            if(isset($_SESSION['user'])){
                                                            ?>
                                                            <button type="button" class="btn btn-outline-danger border border-0  anadirAFavoritos m-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart btn-text" viewBox="0 0 16 16">
                                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                </svg>
                                                                <div class="spinner-border spinner-border-sm" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    <?php 
                                        endif;
                                        $contador++;
                                    endforeach; 
                                    ?>
                                </div>
                            </div>

                            <div class="carousel-item" data-bs-interval="5000">      <!--TERCEROS 2 PRODUCTOS-->
                                <div class="row justify-content-around">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador >= 4):
                                    ?>
                                        <div class="col-4 bg-body rounded">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column text-center">
                                                    <span class="p-1 mt-2 fw-semibold"><?php echo $producto->getTitulo(); ?></span>
                                                    <span class="p-1 "><?php echo $producto->getPrecio(); ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto->getTitulo(); ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                        <?php
                                                        if(isset($_SESSION['admin'])){
                                                            echo '<button type="submit" class="btn btn-danger m-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                    </button>';
                                                        }else{
                                                            ?>
                                                            <button type="button" class="btn btn-dark anadirAlCarrito m-1 ">
                                                                <span class="btn-text">Añadir al carrito</span>
                                                                <div class="spinner-border" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            if(isset($_SESSION['user'])){
                                                            ?>
                                                            <button type="button" class="btn btn-outline-danger border border-0  anadirAFavoritos m-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart btn-text" viewBox="0 0 16 16">
                                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                </svg>
                                                                <div class="spinner-border spinner-border-sm" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    <?php 
                                        endif;
                                        $contador++;
                                    endforeach; 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <button style="height: 2em; margin-top:8em" class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button style="height: 2em; margin-top:8em" class="carousel-control-next " type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>                                  <!--FIN CARROUSEL RESPONSIVE 1-->

            <div class="row p-5 d-md-none elemento">     <!--CARROUSSEL RESPONSIVE 2-->
                <div class="col p-4">
                    <div id="carouselResponsive2" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="5000">    <!--PRIMER PRODUCTO-->
                                <div class="row justify-content-around">
                                    <?php
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador < 1):
                                    ?>
                                        <div class="col-6 bg-body rounded">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column text-center">
                                                    <span class="p-1 mt-2 fw-semibold"><?php echo $producto->getTitulo(); ?></span>
                                                    <span class="p-1 "><?php echo $producto->getPrecio(); ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto->getTitulo(); ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                        <?php
                                                        if(isset($_SESSION['admin'])){
                                                            echo '<button type="submit" class="btn btn-danger m-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                    </button>';
                                                        }else{
                                                            ?>
                                                            <button type="button" class="btn btn-dark anadirAlCarrito m-1 ">
                                                                <span class="btn-text">Añadir al carrito</span>
                                                                <div class="spinner-border" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            if(isset($_SESSION['user'])){
                                                            ?>
                                                            <button type="button" class="btn btn-outline-danger border border-0  anadirAFavoritos m-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart btn-text" viewBox="0 0 16 16">
                                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                </svg>
                                                                <div class="spinner-border spinner-border-sm" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    <?php 
                                        endif;
                                        $contador++;
                                    endforeach; 
                                    ?>   
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">      <!--SEGUNDO PRODUCTO-->
                                <div class="row justify-content-around">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador >=1 && $contador <2):
                                    ?>
                                        <div class="col-6 bg-body rounded">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column text-center">
                                                    <span class="p-1 mt-2 fw-semibold"><?php echo $producto->getTitulo(); ?></span>
                                                    <span class="p-1 "><?php echo $producto->getPrecio(); ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto->getTitulo(); ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                        <?php
                                                        if(isset($_SESSION['admin'])){
                                                            echo '<button type="submit" class="btn btn-danger m-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                    </button>';
                                                        }else{
                                                            ?>
                                                            <button type="button" class="btn btn-dark anadirAlCarrito m-1 ">
                                                                <span class="btn-text">Añadir al carrito</span>
                                                                <div class="spinner-border" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            if(isset($_SESSION['user'])){
                                                            ?>
                                                            <button type="button" class="btn btn-outline-danger border border-0  anadirAFavoritos m-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart btn-text" viewBox="0 0 16 16">
                                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                </svg>
                                                                <div class="spinner-border spinner-border-sm" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    <?php 
                                        endif;
                                        $contador++;
                                    endforeach; 
                                    ?>
                                </div>
                            </div>

                            <div class="carousel-item" data-bs-interval="5000">      <!--TERCER PRODUCTO-->
                                <div class="row justify-content-around">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador >=2 && $contador <3):
                                    ?>
                                        <div class="col-6 bg-body rounded">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column text-center">
                                                    <span class="p-1 mt-2 fw-semibold"><?php echo $producto->getTitulo(); ?></span>
                                                    <span class="p-1 "><?php echo $producto->getPrecio(); ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto->getTitulo(); ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                        <?php
                                                        if(isset($_SESSION['admin'])){
                                                            echo '<button type="submit" class="btn btn-danger m-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                    </button>';
                                                        }else{
                                                            ?>
                                                            <button type="button" class="btn btn-dark anadirAlCarrito m-1 ">
                                                                <span class="btn-text">Añadir al carrito</span>
                                                                <div class="spinner-border" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            if(isset($_SESSION['user'])){
                                                            ?>
                                                            <button type="button" class="btn btn-outline-danger border border-0  anadirAFavoritos m-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart btn-text" viewBox="0 0 16 16">
                                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                </svg>
                                                                <div class="spinner-border spinner-border-sm" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    <?php 
                                        endif;
                                        $contador++;
                                    endforeach; 
                                    ?>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">      <!--CUARTO PRODUCTO-->
                                <div class="row justify-content-around">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador >=3 && $contador <4):
                                    ?>
                                        <div class="col-6 bg-body rounded">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column text-center">
                                                    <span class="p-1 mt-2 fw-semibold"><?php echo $producto->getTitulo(); ?></span>
                                                    <span class="p-1 "><?php echo $producto->getPrecio(); ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto->getTitulo(); ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                        <?php
                                                        if(isset($_SESSION['admin'])){
                                                            echo '<button type="submit" class="btn btn-danger m-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                    </button>';
                                                        }else{
                                                            ?>
                                                            <button type="button" class="btn btn-dark anadirAlCarrito m-1 ">
                                                                <span class="btn-text">Añadir al carrito</span>
                                                                <div class="spinner-border" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            if(isset($_SESSION['user'])){
                                                            ?>
                                                            <button type="button" class="btn btn-outline-danger border border-0  anadirAFavoritos m-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart btn-text" viewBox="0 0 16 16">
                                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                </svg>
                                                                <div class="spinner-border spinner-border-sm" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    <?php 
                                        endif;
                                        $contador++;
                                    endforeach; 
                                    ?>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">      <!--QUINTO PRODUCTO-->
                                <div class="row justify-content-around">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador >=4 && $contador <5):
                                    ?>
                                        <div class="col-6 bg-body rounded">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column text-center">
                                                    <span class="p-1 mt-2 fw-semibold"><?php echo $producto->getTitulo(); ?></span>
                                                    <span class="p-1 "><?php echo $producto->getPrecio(); ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto->getTitulo(); ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                        <?php
                                                        if(isset($_SESSION['admin'])){
                                                            echo '<button type="submit" class="btn btn-danger m-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                    </button>';
                                                        }else{
                                                            ?>
                                                            <button type="button" class="btn btn-dark anadirAlCarrito m-1 ">
                                                                <span class="btn-text">Añadir al carrito</span>
                                                                <div class="spinner-border" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            if(isset($_SESSION['user'])){
                                                            ?>
                                                            <button type="button" class="btn btn-outline-danger border border-0  anadirAFavoritos m-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart btn-text" viewBox="0 0 16 16">
                                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                </svg>
                                                                <div class="spinner-border spinner-border-sm" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    <?php 
                                        endif;
                                        $contador++;
                                    endforeach; 
                                    ?>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">      <!--SEXTO PRODUCTO-->
                                <div class="row justify-content-around">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador >=5):
                                    ?>
                                        <div class="col-6 bg-body rounded">
                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column text-center">
                                                    <span class="p-1 mt-2 fw-semibold"><?php echo $producto->getTitulo(); ?></span>
                                                    <span class="p-1 "><?php echo $producto->getPrecio(); ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto->getTitulo(); ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto->getImagenProducto()); ?>">
                                                        <?php
                                                        if(isset($_SESSION['admin'])){
                                                            echo '<button type="submit" class="btn btn-danger m-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                    </svg>
                                                                    </button>';
                                                        }else{
                                                            ?>
                                                            <button type="button" class="btn btn-dark anadirAlCarrito m-1 ">
                                                                <span class="btn-text">Añadir al carrito</span>
                                                                <div class="spinner-border" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            if(isset($_SESSION['user'])){
                                                            ?>
                                                            <button type="button" class="btn btn-outline-danger border border-0  anadirAFavoritos m-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart btn-text" viewBox="0 0 16 16">
                                                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                </svg>
                                                                <div class="spinner-border spinner-border-sm" role="status" style="display: none;">
                                                                    <span class="visually-hidden">Loading...</span>
                                                                </div>
                                                            </button>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    <?php 
                                        endif;
                                        $contador++;
                                    endforeach; 
                                    ?>
                                </div>
                            </div>

                        </div>
                        <button style="height: 2em; margin-top:8em" class="carousel-control-prev " type="button" data-bs-target="#carouselResponsive2" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button style="height: 2em; margin-top:8em" class="carousel-control-next " type="button" data-bs-target="#carouselResponsive2" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>                                  <!--FIN CARROUSEL RESPONSIVE 2-->

           

        </div> 
        
        <div class="container-fluid fondo_dos d-flex flex-column justify-content-center align-content-center">   <!--FOTO CONTAINER-->
            <div class="row justify-content-center">
                <div class="col-8">
                    <p style="text-shadow: black 0.1em 0.1em 0.2em" class="text-white text-center elemento display-4 text-uppercase  fw-bold">DESCUBRE EL PODER DE LA COMUNICACIÓN EN TUS MANOS.</p>
                </div>
            </div>
            <div class="row p-5">
                <div class="col text-center">
                    <a href="index.php?tienda"><button class="btn elemento btn-outline-light mt-5 shadow" >Descubrir</button></a>
                </div>
            </div>   
        </div>              <!--FIN FOTO CONTAINER--><!--FIN CONTAINER CARROUSEL-->
        <?php include 'footer.php'; ?>  
    </section>
</body>
</html>


