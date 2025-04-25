<?php

    class Pessoa{
        // atributo da classe
        public $Nome;
        public $Peso;
        public $Altura;

        //Métodos

        public function MostraDadosPessoa(){
            echo "Nome da pessoa: " . $this->Nome . "<br>";   //this serve para chama  a classe para colocar ali
            echo "Peso da pessoa: " . $this->Peso . "<br>"; 
            echo "Altura da pessoa: " . $this->Altura . "<br>"; 
        }
    }

?>