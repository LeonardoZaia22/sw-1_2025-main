<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    $maior = max($num1, $num2, $num3);
    echo "<h2>Resultado - Maior Número</h2>";
    echo "<p>O maior número é: $maior</p>";
}
?>
