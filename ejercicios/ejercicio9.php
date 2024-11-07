<?php
$edad = $_POST['edad'] ?? 0;
$nombre = $_POST['nombre'] ?? 'Invitado';

echo "Nombre: $nombre<br>";
echo $edad >= 18 ? "Es mayor de edad" : "Es menor de edad";
?>
