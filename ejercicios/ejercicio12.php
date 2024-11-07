<?php
$nombre = $_POST['nombre'] ?? 'Invitado';
$ingresos = $_POST['ingresos'] ?? 0;

echo "Nombre: $nombre<br>";
echo "Ingresos mensuales: $ingresos<br>";

if ($ingresos > 3000) {
    echo "Debe pagar impuestos a las ganancias.";
} else {
    echo "No paga impuestos a las ganancias.";
}
?>
