<?php 
include("includes/conexion.php");
$conexion = conectar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <h1>Bienvenido a la guía de ejercicios PHP</h1>
    </header>

    <div class="contenedor">
        <section>
            <?php
            if (isset($_GET['modulo'])) {
                $modulo = $_GET['modulo'];
                echo "Módulo solicitado: " . htmlspecialchars($modulo);
                switch ($modulo) {
                    case 'formulario_estudios':
                        include('modulos/formulario_estudios.php');
                        break;
                    case 'formulario_deportes':
                        include('modulos/formulario_deportes.php');
                        break;
                    case 'formulario_ingresos':
                        include('modulos/formulario_ingresos.php');
                        break;
                    default:
                        echo "<p>El módulo solicitado no existe.</p>";
                        break;
                }
            } else {
                echo "<h2>Bienvenidos</h2><p>Contenido principal de la página</p>";
            }
            ?>
        </section>

        <aside>
            <h2>Modulos</h2>
            <a href="?modulo=formulario_estudios"><button>Formulario Estudios</button></a>
            <a href="?modulo=formulario_deportes"><button>Formulario Deportes</button></a>
            <a href="?modulo=formulario_ingresos"><button>Formulario Ingresos</button></a>

            <h2>Ejercicios</h2>
            <?php
            for ($i = 4; $i <= 18; $i++) {
                echo '<a href="ejercicios/ejercicio' . $i . '.php"><button>Ejercicio ' . $i . '</button></a>';
            }
            ?>
        </aside>
    </div>

    <footer>
        <p>Pie de página</p>
    </footer>
</body>
</html>
