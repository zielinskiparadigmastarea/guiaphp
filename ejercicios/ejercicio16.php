<?php
if (file_exists("pedidos.txt")) {
    $contenido = file_get_contents("pedidos.txt");
    echo nl2br($contenido);
} else {
    echo "No hay pedidos para mostrar.";
}
?>
