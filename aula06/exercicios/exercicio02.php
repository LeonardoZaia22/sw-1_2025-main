<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela com WHILE</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f0f0f0;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
</head>
<body>

<h2>Gerar Tabela Dinâmica</h2>

<form method="post">
    <label>Quantas linhas?</label>
    <input type="number" name="linhas" min="1" required><br><br>

    <label>Quantas colunas?</label>
    <input type="number" name="colunas" min="1" required><br><br>

    <input type="submit" value="Mostrar Tabela">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $linhas = $_POST["linhas"];
    $colunas = $_POST["colunas"];

    echo "<table>";
    
    
    echo "<tr>";
    $c = 1;
    while ($c <= $colunas) {
        echo "<th>Coluna $c</th>";
        $c++;
    }
    echo "</tr>";

    
    $l = 1;
    while ($l <= $linhas) {
        echo "<tr>";
        $c = 1;
        while ($c <= $colunas) {
            echo "<td>Linha $l, Coluna $c</td>";
            $c++;
        }
        echo "</tr>";
        $l++;
    }

    echo "</table>";
}
?>

</body>
</html>

