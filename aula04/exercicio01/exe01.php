<?php
    $nome = $_GET['cxnome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $media = ($nota1 + $nota2 + $nota3) / 3;


echo"Olá $nome suas notas foram: Nota 1 = $nota1 ,  Nota 2 =  $nota2 e Nota 3 = $nota3 e sua Média foi: $media";
?>