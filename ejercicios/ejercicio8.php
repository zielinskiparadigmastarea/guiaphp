<?php
echo "<h3>Tabla de multiplicar del 2 usando for</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo "2 x $i = " . (2 * $i) . "<br>";
}

echo "<h3>Tabla de multiplicar del 2 usando while</h3>";
$i = 1;
while ($i <= 10) {
    echo "2 x $i = " . (2 * $i) . "<br>";
    $i++;
}

echo "<h3>Tabla de multiplicar del 2 usando do/while</h3>";
$i = 1;
do {
    echo "2 x $i = " . (2 * $i) . "<br>";
    $i++;
} while ($i <= 10);
?>
