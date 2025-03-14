<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nome = $_GET['nome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "<h2>Resultado da Média</h2>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Média: $media</p>";
}
?>

