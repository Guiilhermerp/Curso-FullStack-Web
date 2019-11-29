<?php
    class Carro{
        private $modelo;
        private $ano;
        private $capacidade;
        private $rendimento;
        private $potencia;
        private $velocidade;

        // Definindo contrutor da classe
        public function __construct($modelo, $ano, $capacidade){
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->capacidade = $capacidade;
            $this->rendimento = 16;
            $this->potencia = 130;
            $this->velocidade = 0;
        }
        
        public function acelerar(){
            
        }

        public function freiar(){
            
        }

        public function buzinar(){
            
        }
    }
    
    $c = new Carro();
    echo('<pre>');
    print_r($c);
    echo('</pre>');
    die();
?>