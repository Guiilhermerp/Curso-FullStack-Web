<?php
    class Carro{
        public $modelo;
        private $ano;
        private $capacidade;
        private $rendimento;
        private $potencia;
        private $velocidade;
        private $ligado;

        // Definindo contrutor da classe

        public function __construct($modelo, $ano, $capacidade){

            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->capacidade = $capacidade;
            $this->rendimento = 16;
            $this->potencia = 130;
            $this->velocidade = 0;
            $this->ligado = false;
        }

        public function ligado(){
            $this->ligado = true;
        }
        
        public function desligar(){
            $this->ligado = false;
        }

        public function acelerar($v){
            //Equivale a $this->velocidade = $this->velocidade + $v
            $this->velocidade += $v;
        }

        public function freiar($v){
             //Equivale a $this->velocidade = $this->velocidade - $v
             $this->velocidade -= $v;
        }

        public function buzinar(){
            if ($this->ligado) {
                echo('BIBIBIBI <br>');
            } else {
                echo("ERRO: {$this->modelo} desligado <br>");
            }
        }
    }
    
?>