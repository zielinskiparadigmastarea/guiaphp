<?php
$nombre = $_POST['nombre'] ?? 'Invitado';
$deportes = $_POST['deportes'] ?? [];

echo "Nombre: $nombre<br>";
echo "Practica " . count($deportes) . " deportes:<br>";
foreach ($deportes as $deporte) {
    echo "- " . htmlspecialchars($deporte) . "<br>";
}
?>
