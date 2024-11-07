<?php
function conectar() {
    try {
        // URL de conexión proporcionada
        $dsn = 'mysql:host=junction.proxy.rlwy.net;port=59211;dbname=railway';
        $usuario = 'root';
        $contraseña = 'BTHWBuWiqpeDyscvobCBFNdSrNLUzOwt';

        // Crear la conexión PDO
        $conexion = new PDO($dsn, $usuario, $contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }
}
?>
