<form action="ejercicio15.php" method="POST">
    Nombre: <input type="text" name="nombre"><br>
    Dirección: <input type="text" name="direccion"><br>
    Jamón y Queso: <input type="checkbox" name="pizzas[jyq]"> Cantidad: <input type="number" name="cantidad_jyq" min="0"><br>
    Napolitana: <input type="checkbox" name="pizzas[napolitana]"> Cantidad: <input type="number" name="cantidad_napolitana" min="0"><br>
    Muzzarella: <input type="checkbox" name="pizzas[muzzarella]"> Cantidad: <input type="number" name="cantidad_muzzarella" min="0"><br>
    <input type="submit" value="Confirmar Pedido">
</form>
