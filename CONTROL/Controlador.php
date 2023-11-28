<?php
require_once('MODELO/Modelo.php');

$modelo  = new Modelo();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        echo "Se ha enviado el formulario de login";
        login();
    }
    if(isset($_POST['logout'])){
        logout();
    }
    if (isset($_POST['registro'])) {
        echo "Se ha enviado el formulario de registro";
        registro();
    }
    if (isset($_POST['anadirlCarrito']) || isset($_POST['anadirFavoritos'])) {
        header('Content-Type: application/json');
    
        $response = array('status' => 'error', 'message' => 'Error desconocido');
    
        if (
            isset($_POST['idProducto']) &&
            isset($_POST['titulo']) &&
            isset($_POST['precio']) &&
            isset($_POST['imagen'])
        ) {
            $productoId = $_POST['idProducto'];
            $titulo = $_POST['titulo'];
            $precio = $_POST['precio'];
            $imagen = $_POST['imagen'];
    
            if (isset($_POST['anadirAlCarrito'])) {
                if (agregarAlCarrito($productoId, $titulo, $precio, $imagen)) {
                    $response['status'] = 'success';
                    $response['message'] = 'Producto agregado al carrito';
                } else {
                    $response['message'] = 'Error al agregar el producto al carrito';
                }
            }
            if (isset($_POST['anadirAFavoritos'])) {
                if (agregarAFavs($productoId, $titulo, $precio, $imagen)) {
                    $response['status'] = 'success';
                    $response['message'] = 'Producto agregado a favoritos';
                } else {
                    $response['message'] = 'Error al agregar el producto a favoritos';
                }
            }
        }
    
        echo json_encode($response);
    }
    
    if (isset($_POST['eliminarDelCarrito'])) {
        if (isset($_POST['idProducto'])) {
            $productoId = $_POST['idProducto'];
            
            if (isset($_SESSION['carrito'][$productoId])) {
                unset($_SESSION['carrito'][$productoId]);
                echo json_encode(['status' => 'success', 'message' => 'Producto eliminado del carrito']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'El producto no existe en el carrito']);
            }
            exit();
        }      
    }
    if (isset($_POST['eliminarDeFavoritos'])) {
        if (isset($_POST['idProducto'])) {
            $productoId = $_POST['idProducto'];
            
            if (isset($_SESSION['favoritos'][$productoId])) {
                unset($_SESSION['favoritos'][$productoId]);
                echo json_encode(['status' => 'success', 'message' => 'Producto eliminado de favoritos']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'El producto no existe en favoritos']);
            }
            exit();
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $ajaxAction = isset($_GET['ajax_action']) ? $_GET['ajax_action'] : '';

        if ($ajaxAction == 'actualizarCarrito') {
            obtenerCarrito();
        }
        if ($ajaxAction == 'actualizarFavoritos') {
            obtenerFavoritos();
        }
        
        exit();
    }
}


function login() {
    global $modelo;
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $correo = trim($_POST['email']);
        $contrasena = trim($_POST['password']);

        if (empty($correo) || empty($contrasena)) {
            $_SESSION['errorLogin'] = "Todos los campos son obligatorios";
            header('Location: index.php');
            exit();
        }

        if ($correo === 'admin' && $contrasena === 'qwerty') {
            $_SESSION['admin'] = $correo;
            header('Location: index.php');
            exit();
        } else {
            $usuario = $modelo->login($correo);

            if ($usuario) {
                if (password_verify($contrasena, $usuario->getContrasena())) {
                    echo 'Inicio de sesión exitoso';
                    $_SESSION['idUser'] = $usuario->getIdUsuario();
                    $_SESSION['user'] = $usuario;
                    $_SESSION['userName'] = $usuario->getNombre();

                    if (!empty($usuario->getCartData())) {
                        $_SESSION['carrito'] = unserialize($usuario->getCartData());
                    } else {
                        $_SESSION['carrito'] = array();
                    }
                    if (!empty($usuario->getFavsData())) {
                        $_SESSION['favoritos'] = unserialize($usuario->getFavsData());
                    } else {
                        $_SESSION['favoritos'] = array();
                    }
                    header('Location: index.php');
                    exit();
                } else {
                    $_SESSION['errorLogin'] = "Contraseña incorrecta";
                    header('Location: index.php');
                    exit();
                }
            } else {
                $_SESSION['errorLogin'] = "Correo no registrado";
                header('Location: index.php');
                exit();
            }
        }
    } else {
        $_SESSION['errorLogin'] = "Datos de inicio de sesión incompletos";
        header('Location: index.php');
        exit();
    }
}

function logout(){
    global $modelo;
    if (isset($_SESSION['carrito']) || isset($_SESSION['favoritos']) && !isset($_SESSION['admin'])) {
        $cartData = isset($_SESSION['carrito']) ? serialize($_SESSION['carrito']) : null;
        $favsData = isset($_SESSION['favoritos']) ? serialize($_SESSION['favoritos']) : null;
        $idUsuario = $_SESSION['idUser'];
    
        $modelo->logout($cartData, $favsData, $idUsuario);
    
    }
    session_destroy();
    
    header('Location: index.php?home');
}

function registro(){
    if (
        isset($_POST['nombre']) &&
        isset($_POST['apellido']) &&
        isset($_POST['email2']) &&
        isset($_POST['password1']) &&
        isset($_POST['password2'])
    ) {
        global $modelo;
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $nombreCompleto = $nombre . " " . $apellido;
        $email = trim($_POST['email2']);
        $password1 = trim($_POST['password1']);
        $password2 = trim($_POST['password2']);

        if (empty($nombre) || empty($apellido) || empty($email) || empty($password1) || empty($password2)) {
            $_SESSION['errorRegistro'] = "Todos los campos son obligatorios";
            header('Location: index.php');
            exit();
        }

        if ($password1 !== $password2) {
            $_SESSION['errorRegistro'] = "Las contraseñas no coinciden";
            header('Location: index.php');
            exit();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['errorRegistro'] = "El formato del correo electrónico no es válido";
            header('Location: index.php');
            exit();
        }

        $usuario = $modelo->registroExistente($email);

        if ($usuario) {
            $_SESSION['errorRegistro'] = "Ya existe un usuario con ese correo";
            header('Location: index.php');
            exit();
        }

        $hashPassword = password_hash($password1, PASSWORD_DEFAULT);

        $modelo->registrarUsuario($nombreCompleto, $email, $hashPassword);
        header('Location: index.php');
        exit();
        
    } else {
        $_SESSION['errorRegistro'] = "Datos de registro incompletos";
        header('Location: index.php');
        exit();
    }
}

function buscarProductos($marca, $precio, $orden, $buscar){
    global $modelo;
    $productos = $modelo->buscarProductos($marca, $precio, $orden, $buscar);
    return $productos;
}

function buscarNovedades(){
    global $modelo;
    $productosNovedades = $modelo->buscarNovedades();
    return $productosNovedades;
}

function agregarAFavs($productoId, $titulo, $precio, $imagen) {
    if (!isset($_SESSION['favoritos'])) {
        $_SESSION['favoritos'] = array();
    }

    if (isset($_SESSION['favoritos'][$productoId])) {
        $_SESSION['favoritos'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio,
            'imagen' => $imagen
        );
    } else {
        $_SESSION['favoritos'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio,
            'imagen' => $imagen
        );
    }

    return true;
}    

function agregarAlCarrito($productoId, $titulo, $precio, $imagen) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    if (isset($_SESSION['carrito'][$productoId])) {
        $_SESSION['carrito'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio,
            'imagen' => $imagen
        );
    } else {
        $_SESSION['carrito'][$productoId] = array(
            'titulo' => $titulo,
            'precio' => $precio,
            'imagen' => $imagen
        );
    }

    return true;
}

function obtenerCarrito(){
    if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
        $precio = 0;
        foreach ($_SESSION['carrito'] as $productoId => $producto) {
            $precio = $precio + $producto['precio'];
            echo "<div class='row p-3'>";
                echo "<div class='col-5'>";
                    echo "<img style='width:8em' class='img-fluid' src='" . $producto['imagen'] . "'></img>";
                echo "</div>";
                echo "<div class='col d-flex flex-column text-center'>";
                    echo "<span class='fw-semibold p-1'>" . $producto['titulo'] . "</span>";
                    echo "<span class='p-1'>" . $producto['precio'] . "€</span>";
                    echo "<form>";
                        echo "<input type='hidden' name='idProducto' value='" . $productoId . "'>";
                        echo "<button type='button' class=' btn btn-danger eliminarDelCarrito m-1' value='eliminarDelCarrito'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                                    <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5'/>
                                </svg>
                              </button>";
                    echo "</form>";
                    
                echo "</div>";
            echo "</div>";
            
        }
        echo '<div class="row m-3">
                <div class="col">
                    <span class=" fs-5 fw-semibold">Total: '. $precio .' € </span>
                </div>
            </div>
            <div class="row m-5">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPago">Ir a pagar</button>
            </div>';
    } else {
        echo "El carrito está vacío.";
    }
}

function obtenerFavoritos(){
    if (isset($_SESSION['favoritos']) && !empty($_SESSION['favoritos'])) {
   
        foreach ($_SESSION['favoritos'] as $productoId => $producto) {
            
            echo "<div class='row p-3'>";
                echo "<div class='col-5'>";
                    echo "<img style='width:8em' class='img-fluid' src='" . $producto['imagen'] . "'></img>";
                echo "</div>";
                echo "<div class='col d-flex flex-column text-center'>";
                    echo "<span class='fw-semibold p-1'>" . $producto['titulo'] . "</span>";
                    echo "<span class='p-1'>" . $producto['precio'] . "€</span>";
                    echo "<form>";
                        echo "<input type='hidden' name='idProducto' value='" . $productoId ."'>";
                        echo "<input type='hidden' name='imagen' value='" .  $producto['imagen'] . "'>"; 
                        echo "<input type='hidden' name='titulo' value='" . $producto["titulo"] ."'>";
                        echo "<input type='hidden' name='precio' value='" . $producto["precio"] ."'>";
                        echo "<button type='button' class=' btn btn-danger eliminarDeFavoritos m-1' value='eliminarDeFavoritos'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3 btn-text' viewBox='0 0 16 16'>
                                    <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5'/>
                                </svg>
                              </button>";
                        echo "<button type='button' class='btn btn-dark m-1 anadirAlCarrito' value='anadirAlCarrito'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bag btn-text' viewBox='0 0 16 16'>
                                    <path d='M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z' />
                                </svg>
                                <div class='spinner-border spinner-border-sm' role='status' style='display: none;'>
                                    <span class='visually-hidden'>Loading...</span>
                                </div>
                              </button>";
                    echo "</form>";
                echo "</div>";
            echo "</div>";
        }    
    }else {
        echo "No hay productos favoritos.";
    }
}