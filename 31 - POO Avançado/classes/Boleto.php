<?php

    class Boleto implements Pagavel{
        private $valor;
        
        public function __construct(float $valor){
            $this->valor = $valor;
        }

        public function getValor(){
            return $this->valor;
        }

        public function reembolsar(){
            echo('Reembolsando o boleto<br>');
        }

        public function pagar(){
            echo('Pagando o boleto<br>');
        }
        
    }



?>