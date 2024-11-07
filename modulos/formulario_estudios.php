<!-- modulos/formulario_estudios.php -->
<h2>Formulario de Estudios</h2>
<form action="ejercicios/ejercicio10.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Nivel de estudios:
    <input type="radio" name="estudios" value="sin_estudios" required> Sin estudios
    <input type="radio" name="estudios" value="primarios" required> Primarios
    <input type="radio" name="estudios" value="secundarios" required> Secundarios<br>
    <input type="submit" value="Enviar">
</form>
