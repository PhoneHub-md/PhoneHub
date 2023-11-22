<?php
    require_once "MODELO/Conexion.php";
    require_once "CONTROL/ProductoController.php";

    $controlador = new ProductoController();
    $novedades = $controlador->buscarNovedades();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneHub</title>
    <link rel="stylesheet" type="text/css" href="VISTA/css/style.css">
    <link href="VISTA/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'navbar.php'; ?>                                           
    <section>
        <div class="container-fluid fondo d-flex flex-column justify-content-center align-content-center ">   <!--FOTO CONTAINER-->
            <div class="row">
                <div class="col">
                    <p style="text-shadow: black 0.1em 0.1em 0.2em" class="text-white text-center display-4 text-uppercase  fw-bold">LA MEJOR ELECCIÓN PARA TU PRÓXIMO </br> DISPOSITIVO.</p>
                </div>
            </div>
            <div class="row p-5">
                <div class="col text-center">
                    <a href="index.php?tienda"><button class="btn btn-outline-light mt-5 shadow" >Descubrir</button></a>
                </div>
            </div>
           
                
                    <div class=" col-2 col-md-1 fixed-right-bottom">
                        <a href="https://wa.me/34722677154">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 48 48">
                                <path fill="#fff" d="M4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5c5.1,0,9.8,2,13.4,5.6	C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19c0,0,0,0,0,0h0c-3.2,0-6.3-0.8-9.1-2.3L4.9,43.3z"></path><path fill="#fff" d="M4.9,43.8c-0.1,0-0.3-0.1-0.4-0.1c-0.1-0.1-0.2-0.3-0.1-0.5L7,33.5c-1.6-2.9-2.5-6.2-2.5-9.6	C4.5,13.2,13.3,4.5,24,4.5c5.2,0,10.1,2,13.8,5.7c3.7,3.7,5.7,8.6,5.7,13.8c0,10.7-8.7,19.5-19.5,19.5c-3.2,0-6.3-0.8-9.1-2.3	L5,43.8C5,43.8,4.9,43.8,4.9,43.8z"></path><path fill="#cfd8dc" d="M24,5c5.1,0,9.8,2,13.4,5.6C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19h0c-3.2,0-6.3-0.8-9.1-2.3	L4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5 M24,43L24,43L24,43 M24,43L24,43L24,43 M24,4L24,4C13,4,4,13,4,24	c0,3.4,0.8,6.7,2.5,9.6L3.9,43c-0.1,0.3,0,0.7,0.3,1c0.2,0.2,0.4,0.3,0.7,0.3c0.1,0,0.2,0,0.3,0l9.7-2.5c2.8,1.5,6,2.2,9.2,2.2	c11,0,20-9,20-20c0-5.3-2.1-10.4-5.8-14.1C34.4,6.1,29.4,4,24,4L24,4z"></path><path fill="#40c351" d="M35.2,12.8c-3-3-6.9-4.6-11.2-4.6C15.3,8.2,8.2,15.3,8.2,24c0,3,0.8,5.9,2.4,8.4L11,33l-1.6,5.8	l6-1.6l0.6,0.3c2.4,1.4,5.2,2.2,8,2.2h0c8.7,0,15.8-7.1,15.8-15.8C39.8,19.8,38.2,15.8,35.2,12.8z"></path><path fill="#fff" fill-rule="evenodd" d="M19.3,16c-0.4-0.8-0.7-0.8-1.1-0.8c-0.3,0-0.6,0-0.9,0	s-0.8,0.1-1.3,0.6c-0.4,0.5-1.7,1.6-1.7,4s1.7,4.6,1.9,4.9s3.3,5.3,8.1,7.2c4,1.6,4.8,1.3,5.7,1.2c0.9-0.1,2.8-1.1,3.2-2.3	c0.4-1.1,0.4-2.1,0.3-2.3c-0.1-0.2-0.4-0.3-0.9-0.6s-2.8-1.4-3.2-1.5c-0.4-0.2-0.8-0.2-1.1,0.2c-0.3,0.5-1.2,1.5-1.5,1.9	c-0.3,0.3-0.6,0.4-1,0.1c-0.5-0.2-2-0.7-3.8-2.4c-1.4-1.3-2.4-2.8-2.6-3.3c-0.3-0.5,0-0.7,0.2-1c0.2-0.2,0.5-0.6,0.7-0.8	c0.2-0.3,0.3-0.5,0.5-0.8c0.2-0.3,0.1-0.6,0-0.8C20.6,19.3,19.7,17,19.3,16z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                
            
            
        </div>              <!--FIN FOTO CONTAINER-->
        
        <div class="container-fluid bg-body-secondary">       <!--CONTAINER CARROUSSEL-->
            <div class="row  justify-content-center ">
                <div class="text-center col-9 col-md  mt-5 mb-2 p-3">
                    <span class="fs-1">Últimas novedades</span>
                </div>
            </div>
            <div class="row p-5 d-none d-md-block">         <!--CARROUSSEL NO RESPONSIVE-->
                <div class="col p-4">
                    <div id="carouselExamplee" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="5000">   <!--PRIMEROS 3 PRODUCTOS-->
                                <div class="row">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador < 3):
                                    ?>
                                        
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column">
                                                    <span class="p-1"><?php echo $producto['titulo']; ?></span>
                                                    <span class="p-1 fw-bold"><?php echo $producto['precio']; ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto['idProducto']; ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto['titulo']; ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto['precio']; ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>">
                                                        <button type="button" class="btn btn-primary anadirAlCarrito">Agregar al Carrito</button>
                                                        <button type="button" class="btn btn-primary btn-sm anadirAFavoritos" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-heart m-1" viewBox="0 0 16 16">
                                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                            </svg>
                                                        </button>
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

                            <div class="carousel-item" data-bs-interval="5000">   <!--SEGUNDOS 3 PRODUCTOS-->
                                <div class="row">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador >= 3):
                                    ?>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column">
                                                    <span class="p-1"><?php echo $producto['titulo']; ?></span>
                                                    <span class="p-1 fw-bold"><?php echo $producto['precio']; ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto['idProducto']; ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto['titulo']; ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto['precio']; ?>">
                                                        <button type="button" class="btn btn-primary anadirAlCarrito">Agregar al Carrito</button>
                                                        <button type="button" class="btn btn-primary btn-sm anadirAFavoritos" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-heart m-1" viewBox="0 0 16 16">
                                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                            </svg>
                                                        </button>
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExamplee" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExamplee" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>                              <!--FIN CARROUSSEL NO RESPONISVE-->

            <div class="row p-5 d-md-none">     <!--CARROUSSEL RESPONSIVE-->
                <div class="col p-4">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="5000">    <!--PRIMEROS 2 PRODUCTOS-->
                                <div class="row">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador < 2):
                                    ?>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column">
                                                    <span class="p-1"><?php echo $producto['titulo']; ?></span>
                                                    <span class="p-1 fw-bold"><?php echo $producto['precio']; ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto['idProducto']; ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto['titulo']; ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto['precio']; ?>">
                                                        <button type="button" class="btn btn-primary anadirAlCarrito">Agregar al Carrito</button>
                                                        <button type="button" class="btn btn-primary btn-sm anadirAFavoritos">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-heart m-1" viewBox="0 0 16 16">
                                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                            </svg>
                                                        </button>
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
                                <div class="row">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador >= 2 && $contador <4):
                                    ?>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column">
                                                    <span class="p-1"><?php echo $producto['titulo']; ?></span>
                                                    <span class="p-1 fw-bold"><?php echo $producto['precio']; ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto['idProducto']; ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto['titulo']; ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto['precio']; ?>">
                                                        <button type="button" class="btn btn-primary anadirAlCarrito">Agregar al Carrito</button>
                                                        <button type="button" class="btn btn-primary btn-sm anadirAFavoritos" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-heart m-1" viewBox="0 0 16 16">
                                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                            </svg>
                                                        </button>
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
                                <div class="row">
                                    <?php 
                                    $contador = 0;
                                    foreach ($novedades as $producto): 
                                        if ($contador >= 4):
                                    ?>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <img class="img-fluid rounded" src="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex flex-column">
                                                    <span class="p-1"><?php echo $producto['titulo']; ?></span>
                                                    <span class="p-1 fw-bold"><?php echo $producto['precio']; ?> €</span>
                                                    <form>
                                                        <input type="hidden" name="idProducto" value="<?php echo $producto['idProducto']; ?>">
                                                        <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>">
                                                        <input type="hidden" name="titulo" value="<?php echo $producto['titulo']; ?>">
                                                        <input type="hidden" name="precio" value="<?php echo $producto['precio']; ?>">
                                                        <button type="button" class="btn btn-primary anadirAlCarrito">Agregar al Carrito</button>
                                                        <button type="button" class="btn btn-primary btn-sm anadirAFavoritos" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-heart m-1" viewBox="0 0 16 16">
                                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                            </svg>
                                                        </button>
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>                                  <!--FIN CARROUSEL RESPONSIVE-->

           

        </div> 
        
        <div class="container-fluid fondo_dos d-flex flex-column justify-content-center align-content-center ">   <!--FOTO CONTAINER-->
            <div class="row justify-content-center">
                <div class="col-8">
                    <p style="text-shadow: black 0.1em 0.1em 0.2em" class="text-white text-center display-4 text-uppercase  fw-bold">DESCUBRE EL PODER DE LA COMUNICACIÓN EN TUS MANOS.</p>
                </div>
            </div>
            <div class="row p-5">
                <div class="col text-center">
                    <a href="index.php?tienda"><button class="btn btn-outline-light mt-5 shadow" >Descubrir</button></a>
                </div>
            </div>
           
                
                    
                
            
            
        </div>              <!--FIN FOTO CONTAINER--><!--FIN CONTAINER CARROUSEL-->

        
         
    </section>
    <script src="VISTA/js/hover.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="VISTA/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function () {
        // Manejar clic en el botón "Agregar al Carrito"
        $(document).on('click', '.anadirAlCarrito', function () {
            var formData = $(this).closest('form').serialize();
            agregarAlCarrito(formData);
        });

        // Manejar clic en el botón "Agregar a Favoritos"
        $(document).on('click', '.anadirAFavoritos', function () {
            var formData = $(this).closest('form').serialize();
            agregarAFavoritos(formData);
        });

        function agregarAlCarrito(formData) {
            $.ajax({
                type: 'POST',
                url: 'MODELO/anadirAlCarrito.php',
                data: formData,
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        console.log('Producto agregado al carrito');
                        actualizarCarrito();
                    } else {
                        console.log('Error: ' + response.message);
                    }
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        }

        function agregarAFavoritos(formData) {
            $.ajax({
                type: 'POST',
                url: 'MODELO/anadirAFavs.php',
                data: formData,
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        console.log('Producto agregado a favoritos');
                        actualizarFavoritos();
                    } else {
                        console.log('Error: ' + response.message);
                    }
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
        }

        function actualizarCarrito() {
            $.ajax({
                url: 'MODELO/obtenerCarrito.php',
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    console.log('Información del carrito actualizada:');
                    $('#divCarrito').html(data);
                    $('#divCarritoResp').html(data);
                },
                error: function() {
                    console.log('Error al obtener la información del carrito.');
                }
            });
        }

        function actualizarFavoritos() {
            $.ajax({
                url: 'MODELO/obtenerFavs.php',
                type: 'GET',
                dataType: 'html',
                success: function(data) {
                    console.log('Información de favoritos actualizada:');
                    $('#divFavs').html(data);
                    $('#divFavsResp').html(data);
                    divCarritoResp
                },
                error: function() {
                    console.log('Error al obtener la información de favoritos.');
                }
            });
        }
    });
</script>
</body>
</html>


