<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <h2>Tabela com 8 linhas e 4 colunas</h2>
    <table>
        <thead>
            <tr>
                <th>Coluna 1</th>
                <th>Coluna 2</th>
                <th>Coluna 3</th>
                <th>Coluna 4</th>
            </tr>
        </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 4; $j++) {
                echo "<td>Linha $i, Coluna $j</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>