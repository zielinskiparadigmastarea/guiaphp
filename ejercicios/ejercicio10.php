<?php
$nombre = $_POST['nombre'] ?? 'Invitado';
$estudios = $_POST['estudios'] ?? 'sin información';

echo "Nombre: $nombre<br>";
echo "Nivel de estudios: ";
switch ($estudios) {
    case 'sin_estudios':
        echo "No tiene estudios";
        break;
    case 'primarios':
        echo "Estudios primarios";
        break;
    case 'secundarios':
        echo "Estudios secundarios";
        break;
}
?>
