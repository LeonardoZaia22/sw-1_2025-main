<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Produtos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #444;
            color: #fff;
        }
        .eletronico {
            background-color: #ffe6e6;
        }
        .vestuario {
            background-color: #e6ffe6;
        }
        .alimento {
            background-color: #e6e6ff;
        }
        .limpeza {
            background-color: #ffffe6;
        }
    </style>
</head>
<body>
    <h2>Tabela de Produtos</h2>
    <?php
    $produtos = array(
        array("Nome" => "Smartphone", "Preço" => "R$ 1.299,90", "Categoria" => "eletronico"),
        array("Nome" => "Camiseta", "Preço" => "R$ 49,90", "Categoria" => "vestuario"),
        array("Nome" => "Arroz", "Preço" => "R$ 12,50", "Categoria" => "alimento"),
        array("Nome" => "Detergente", "Preço" => "R$ 3,20", "Categoria" => "limpeza"),
        array("Nome" => "Notebook", "Preço" => "R$ 3.499,90", "Categoria" => "eletronico"),
        array("Nome" => "Calça Jeans", "Preço" => "R$ 89,90", "Categoria" => "vestuario"),
        array("Nome" => "Feijão", "Preço" => "R$ 8,75", "Categoria" => "alimento"),
        array("Nome" => "Sabão em Pó", "Preço" => "R$ 15,90", "Categoria" => "limpeza")
    );

    echo "<table>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Preço</th>";
    echo "<th>Categoria</th>";
    echo "</tr>";

    foreach ($produtos as $produto) {
        $categoria = strtolower($produto["Categoria"]);
        echo "<tr class='$categoria'>";
        echo "<td>" . $produto["Nome"] . "</td>";
        echo "<td>" . $produto["Preço"] . "</td>";
        echo "<td>" . $produto["Categoria"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
