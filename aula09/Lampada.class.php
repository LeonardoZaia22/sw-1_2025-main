<?php
    
class Lampada {
    public $Fabricante;
    public $Tensao;
    public $Potencia;
    public $Cor;
    public $Status;

      public function Ligar(){
        $this->Status = True;

        }
         public function Desligar(){
            $this->Status = False;
            
        }

    public function MostarDados() {
        echo "Fabricante: " . $this->Fabricante . "<br>";
        echo "Tensão: " . $this->Tensao . "V<br>";
        echo "Potência: " . $this->Potencia . "W<br>";
        echo "Cor: " . $this->Cor . "<br>";
        if ($this->Status == 1 ){
        echo "Status da lampada : Ligada <br> "; }
        else {
        echo "Status da lampada : Desligada <br> "; }
    }
}

?>
