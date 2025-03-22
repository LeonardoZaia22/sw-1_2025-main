<?php
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if ($email == "aluno@email.com" && $senha == "1234"){
            //vai pra pag PHP
            $nome = "Aluno";
            header("Location:privada.php?nome=".$nome);
        }else{
            //vai pra pag erro.php
            header("Location:erro.php");
        }





?>