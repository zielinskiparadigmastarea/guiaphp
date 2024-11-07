<?php
$nombre = $_POST['nombre'] ?? '';
$direccion = $_POST['direccion'] ?? '';
$pizzas = $_POST['pizzas'] ?? [];

$pedido = "Nombre: $nombre\nDirección: $direccion\n";

if (isset($pizzas['jyq']) && $_POST['cantidad_jyq'] > 0) {
    $pedido .= "Jamón y Queso - Cantidad: " . $_POST['cantidad_jyq'] . "\n";
}
if (isset($pizzas['napolitana']) && $_POST['cantidad_napolitana'] > 0) {
    $pedido .= "Napolitana - Cantidad: " . $_POST['cantidad_napolitana'] . "\n";
}
if (isset($pizzas['muzzarella']) && $_POST['cantidad_muzzarella'] > 0) {
    $pedido .= "Muzzarella - Cantidad: " . $_POST['cantidad_muzzarella'] . "\n";
}

$pedido .= str_repeat("=", 20) . "\n";

file_put_contents("pedidos.txt", $pedido, FILE_APPEND);
echo "Pedido guardado exitosamente.";
?>
