<?php
    include_once 'Pessoa.class.php';

    //Instanciar um objeto (Nova pessoa)
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;

    //Atribuir valores

    $pessoa1->Nome = 'Carlos Ancelotti';
    $pessoa1->Peso = 78.3;
    $pessoa1->Altura = 1.82; 

    $pessoa2->Nome = 'José';
    $pessoa2->Peso = 72.3;
    $pessoa2->Altura = 1.65;

    //Chamando um método da classe pessoa
    $pessoa1->MostraDadosPessoa();
    $pessoa2->MostraDadosPessoa();




?>