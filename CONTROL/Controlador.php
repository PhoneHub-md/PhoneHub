<?php
require_once('MODELO/Modelo.php');

$modelo  = new Modelo();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        login();
    }
    if(isset($_POST['logout'])){
        logout();
    }
    if (isset($_POST['nombre']) &&
        isset($_POST['apellido']) &&
        isset($_POST['email2']) &&
        isset($_POST['password1']) &&
        isset($_POST['password2'])) {
            registro();
    }
    if (isset($_POST['accion'])) {
        $response = array('status' => 'success', 'message' => 'Error desconocido');
        if (
            isset($_POST['idProducto']) &&
            isset($_POST['titulo']) &&
            isset($_POST['precio']) &&
            isset($_POST['imagen'])
        ) {
            if (!empty($_POST['idProducto']) && !empty($_POST['titulo']) && !empty($_POST['precio']) && !empty($_POST['imagen'])) {
                $productoId = $_POST['idProducto'];
                $titulo = $_POST['titulo'];
                $precio = $_POST['precio'];
                $imagen = $_POST['imagen'];

                $producto = new Producto($productoId, $titulo, null, $precio, $imagen);
        
                if ($_POST['accion']=="anadirAlCarrito") {
                    if (agregarAlCarrito($producto)) {
                        $response['status'] = 'success';
                        $response['message'] = 'Producto agregado al carrito';
                    } else {
                        $response['message'] = 'Error al agregar el producto al carrito';
                    }
                }
                if ($_POST['accion']=="anadirAFavoritos") {
                    if (agregarAFavs($producto)) {
                        $response['status'] = 'success';
                        $response['message'] = 'Producto agregado a favoritos';
                    } else {
                        $response['message'] = 'Error al agregar el producto a favoritos';
                    }
                }
            }
        }
        if ( isset($_POST['idProducto'])){
            if ($_POST['accion']=="eliminarDelCarrito") {
                if (!empty($_POST['idProducto'])) {
                    header('Content-Type: application/json');
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
            if ($_POST['accion']=="eliminarDeFavoritos") {
                if (!empty($_POST['idProducto'])) {
                    header('Content-Type: application/json');
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
        
        header('Content-Type: application/json');
       echo json_encode($response);
       exit();
    }
    if (isset($_POST['tituloProducto']) && isset($_POST['descripcionProducto']) && isset($_FILES['imagenProducto']['tmp_name']) && isset($_POST['precioProducto'])) {
        agregarProducto();
    }
    if (isset($_POST['idProducto']) && isset($_POST['eliminarProducto'])){
        eliminarProducto();
    }
    if(isset($_POST['precio']) && $_POST['marca'] && $_POST['orden']){
        header("Location: index.php?tienda&precio=" . $_POST['precio'] . "&marca=" . $_POST['marca'] . "&orden=" . $_POST['orden']);
        exit();
    }
    if(isset($_POST['buscar'])){
        header("Location: index.php?tienda&buscar=" . $_POST['buscar']);
        exit();
    }
    if(isset($_POST['pagar'])){
        pagar();
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

        if ($correo === 'Admin' && $contrasena === 'qwerty') {
            $_SESSION['admin'] = $correo;
            $_SESSION['userName'] = $correo;
            header('Location: index.php');
            exit();
        } else {
            $usuario = $modelo->login($correo);

            if ($usuario !== null) {
                if (password_verify($contrasena, $usuario->getContrasena())) {
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
                    header('Location: index.php?');
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
    if (isset($_SESSION['carrito']) || isset($_SESSION['favoritos']) && isset($_SESSION['idUser'])) {
        $cartData = isset($_SESSION['carrito']) ? serialize($_SESSION['carrito']) : null;
        $favsData = isset($_SESSION['favoritos']) ? serialize($_SESSION['favoritos']) : null;
        $idUsuario = $_SESSION['idUser'];
    
        $modelo->logout($cartData, $favsData, $idUsuario);
    
    }
    session_destroy();
    header('Location: index.php?home');
}

function registro(){
    global $modelo;
    if (
        isset($_POST['nombre']) &&
        isset($_POST['apellido']) &&
        isset($_POST['email2']) &&
        isset($_POST['password1']) &&
        isset($_POST['password2'])
    ) {
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

function agregarAFavs($producto) {
    if (!isset($_SESSION['favoritos'])) {
        $_SESSION['favoritos'] = array();
    }

    if (isset($_SESSION['favoritos'][$producto->getIdProducto()])) {
        $_SESSION['favoritos'][$producto->getIdProducto()] = array(
            'titulo' => $producto->getTitulo(),
            'precio' => $producto->getPrecio(),
            'imagen' => $producto->getImagenProducto()
        );
    } else {
        $_SESSION['favoritos'][$producto->getIdProducto()] = array(
            'titulo' => $producto->getTitulo(),
            'precio' => $producto->getPrecio(),
            'imagen' => $producto->getImagenProducto()
        );
    }

    return true;
}    

function agregarAlCarrito($producto) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    if (isset($_SESSION['carrito'][$producto->getIdProducto()])) {
        $_SESSION['carrito'][$producto->getIdProducto()] = array(
            'titulo' => $producto->getTitulo(),
            'precio' => $producto->getPrecio(),
            'imagen' => $producto->getImagenProducto()
        );
    } else {
        $_SESSION['carrito'][$producto->getIdProducto()] = array(
            'titulo' => $producto->getTitulo(),
            'precio' => $producto->getPrecio(),
            'imagen' => $producto->getImagenProducto()
        );
    }

    return true;
}

function agregarProducto() {
    $tituloProducto = trim($_POST['tituloProducto']);
    $descripcionProducto = trim($_POST['descripcionProducto']);
    $precioProducto = trim($_POST['precioProducto']);
    $imagenTmp = $_FILES['imagenProducto']['tmp_name'];

    if (!empty($tituloProducto) && !empty($descripcionProducto) && !empty($precioProducto)) {
        if (!empty($imagenTmp)) {
            $imagenProducto = file_get_contents($imagenTmp);
        } else {
            $imagenProducto = null;
        }
        global $modelo;
        $producto = new Producto(null, $tituloProducto, $descripcionProducto, $precioProducto, $imagenProducto);
        $modelo->agregarProducto($producto);
    }
    header('Location: index.php?tienda');
    exit();
}

function eliminarProducto(){
    global $modelo;
    $idProducto = $_POST['idProducto'];
    if(!empty($idProducto)){
        $modelo->borrarProducto($idProducto);
    }
    header('Location: index.php?tienda');
    exit();
}

function pagar(){
    global $modelo;
    if(isset($_SESSION['user'])){
        $idUsuario = $_SESSION['idUser'];
        $modelo->pagar($idUsuario);
    }
    unset($_SESSION['carrito']);
    header('Location: index.php');
    exit();
}