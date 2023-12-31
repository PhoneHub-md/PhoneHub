<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

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
?>
