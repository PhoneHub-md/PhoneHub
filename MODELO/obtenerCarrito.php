<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

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
?>
