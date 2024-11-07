<?php
function validarClaves($clave1, $clave2) {
    return $clave1 === $clave2;
}

$usuario = $_POST['usuario'] ?? '';
$clave1 = $_POST['clave1'] ?? '';
$clave2 = $_POST['clave2'] ?? '';

if (validarClaves($clave1, $clave2)) {
    echo "Usuario $usuario registrado correctamente.";
} else {
    echo "Las claves ingresadas no coinciden.";
}
?>
