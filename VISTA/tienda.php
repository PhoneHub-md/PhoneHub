<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneHub</title>
    <link rel="stylesheet" type="text/css" href="VISTA/css/style.css">
    <link href="VISTA/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-body-secondary">
<?php include 'navbar.php'; ?>
    <div class=" col-2 col-md-1 fixed-right-bottom">
        <a href="https://wa.me/34722677154">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 48 48">
                <path fill="#fff" d="M4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5c5.1,0,9.8,2,13.4,5.6	C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19c0,0,0,0,0,0h0c-3.2,0-6.3-0.8-9.1-2.3L4.9,43.3z"></path><path fill="#fff" d="M4.9,43.8c-0.1,0-0.3-0.1-0.4-0.1c-0.1-0.1-0.2-0.3-0.1-0.5L7,33.5c-1.6-2.9-2.5-6.2-2.5-9.6	C4.5,13.2,13.3,4.5,24,4.5c5.2,0,10.1,2,13.8,5.7c3.7,3.7,5.7,8.6,5.7,13.8c0,10.7-8.7,19.5-19.5,19.5c-3.2,0-6.3-0.8-9.1-2.3	L5,43.8C5,43.8,4.9,43.8,4.9,43.8z"></path><path fill="#cfd8dc" d="M24,5c5.1,0,9.8,2,13.4,5.6C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19h0c-3.2,0-6.3-0.8-9.1-2.3	L4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5 M24,43L24,43L24,43 M24,43L24,43L24,43 M24,4L24,4C13,4,4,13,4,24	c0,3.4,0.8,6.7,2.5,9.6L3.9,43c-0.1,0.3,0,0.7,0.3,1c0.2,0.2,0.4,0.3,0.7,0.3c0.1,0,0.2,0,0.3,0l9.7-2.5c2.8,1.5,6,2.2,9.2,2.2	c11,0,20-9,20-20c0-5.3-2.1-10.4-5.8-14.1C34.4,6.1,29.4,4,24,4L24,4z"></path><path fill="#40c351" d="M35.2,12.8c-3-3-6.9-4.6-11.2-4.6C15.3,8.2,8.2,15.3,8.2,24c0,3,0.8,5.9,2.4,8.4L11,33l-1.6,5.8	l6-1.6l0.6,0.3c2.4,1.4,5.2,2.2,8,2.2h0c8.7,0,15.8-7.1,15.8-15.8C39.8,19.8,38.2,15.8,35.2,12.8z"></path><path fill="#fff" fill-rule="evenodd" d="M19.3,16c-0.4-0.8-0.7-0.8-1.1-0.8c-0.3,0-0.6,0-0.9,0	s-0.8,0.1-1.3,0.6c-0.4,0.5-1.7,1.6-1.7,4s1.7,4.6,1.9,4.9s3.3,5.3,8.1,7.2c4,1.6,4.8,1.3,5.7,1.2c0.9-0.1,2.8-1.1,3.2-2.3	c0.4-1.1,0.4-2.1,0.3-2.3c-0.1-0.2-0.4-0.3-0.9-0.6s-2.8-1.4-3.2-1.5c-0.4-0.2-0.8-0.2-1.1,0.2c-0.3,0.5-1.2,1.5-1.5,1.9	c-0.3,0.3-0.6,0.4-1,0.1c-0.5-0.2-2-0.7-3.8-2.4c-1.4-1.3-2.4-2.8-2.6-3.3c-0.3-0.5,0-0.7,0.2-1c0.2-0.2,0.5-0.6,0.7-0.8	c0.2-0.3,0.3-0.5,0.5-0.8c0.2-0.3,0.1-0.6,0-0.8C20.6,19.3,19.7,17,19.3,16z" clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>

    <div class="container-fluid">
        <div class="row p-3  mb-5 mt-lg-5">
            <div class=" d-none d-lg-flex col-lg-5 col-xl-6">
            </div>
            <form method="get" action="MODELO/filtrarTienda.php">
                <div class="col d-flex flex-row justify-content-center justify-content-lg-end">
                    <select name="precio" class="form-select w-25" aria-label="Default select example">
                        <option selected>Precio</option>
                        <option value="1">100€-250€</option>
                        <option value="2">250€-400€</option>
                        <option value="3">400€-650€</option>
                        <option value="4">650€-800€</option>
                        <option value="5">+800€</option>
                    </select>
                    <select name="marca" class="form-select w-25" aria-label="Default select example">
                        <option selected>Marca</option>
                        <option value="IPhone">IPhone</option>
                        <option value="Oppo">Oppo</option>
                        <option value="Xiaomi">Xiaomi</option>
                        <option value="Samsung">Samsung</option>
                        <option value="Huawei">Huawei</option>
                    </select>
                    <select name="orden" class="form-select w-25" aria-label="Default select example">
                        <option selected>Ordenar</option>
                        <option value="1">Precio ascendente</option>
                        <option value="2">Precio descendente</option>
                    </select>
                    <button type="submit" class="btn btn-outline-dark ms-3">Aplicar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <?php
            require_once "MODELO/Conexion.php";
            require_once "CONTROL/ProductoController.php";
            
            $marca = isset($_GET['marca']) && $_GET['marca'] !=="Marca"  ? $_GET['marca'] : null;
            $precio = isset($_GET['precio']) && $_GET['precio'] !=="Precio" ? $_GET['precio'] : null;
            $orden = isset($_GET['orden']) && $_GET['orden'] !=="Orden" ? $_GET['orden'] : null;
            $buscar = isset($_GET['buscar']) ? $_GET['buscar'] : null;
            
            $controlador = new ProductoController();
            $moviles = $controlador->buscarDatos($marca, $precio, $orden, $buscar);

            foreach ($moviles as $producto) {
            ?>
                <div class="col-10 col-md-6 col-lg-4 col-xxl-3 mt-3 mb-5">
                    <div class="card d-flex align-items-center bg-body  border-0">
                        <img style="width: 13em;" src="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>" class="card-img-top"  alt="..."></img>
                        <div class="card-body d-flex flex-column text-center">
                            <div class="row m-1 p-1">
                                <div class="col d-flex justify-content-center">
                                    <h5 class="card-title"><?php echo $producto['titulo']; ?></h5>
                                </div>
                            </div>
                            <div class="row m-1 p-1">
                                <div class="col">
                                    <p class="card-text word-wrap text-body-secondary ">
                                    <?php 
                                        $maxCaracteres = 50; // Cambia este valor al máximo de caracteres permitidos

                                        $descripcion = $producto['descripcion'];

                                        // Verificar si la longitud de la descripción es mayor al límite
                                        if (strlen($descripcion) > $maxCaracteres) {
                                            // Si es mayor, truncar el texto y agregar puntos suspensivos
                                            $descripcion = substr($descripcion, 0, $maxCaracteres) . '...';
                                        }

                                        echo $descripcion;
                                    ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row m-1 p-1">
                                <div class="col">
                                    <p class="card-text fw-bold"><?php echo $producto['precio']; ?> €</p>
                                </div>
                            </div>
                            <form method = "post" action="MODELO/eliminarProducto.php">
                                <input type="hidden" name="idProducto" value="<?php echo $producto['idProducto']; ?>">
                                <input type="hidden" name="imagen" value="data:image/jpg;base64,<?php echo base64_encode($producto['imagenProducto']); ?>">
                                <input type="hidden" name="titulo" value="<?php echo $producto['titulo']; ?>">
                                <input type="hidden" name="precio" value="<?php echo $producto['precio']; ?>">
                                <?php
                                if(isset($_SESSION['admin'])){
                                    echo '<button type="submit" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                            </svg>
                                            </button>';
                                }else{
                                ?>
                                <button style="margin-left: 60px;" type="button" class="btn btn-dark anadirAlCarrito "><span>Añadir al carrito</span></button>
                                <button type="button" class="btn btn-outline-danger border border-0 anadirAFavoritos m-1" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart m-1" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                    </svg>
                                </button>
                                <?php
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?> 
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>