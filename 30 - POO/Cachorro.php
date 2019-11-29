<?php

    class Cachorro{
        private $Nome;
        private $NivelFome;
        private $NivelHumor;

        public function __construct($Nome){
            $this->Nome = $Nome;
            $this->NivelFome = 0;
            $this->NivelHumor = 0;
        }

        // public function setFome($n){
        //     if ($n <-5 || $n > 10) {
        //         echo('Erro: valor invalido');
        //     } else {
        //         $this->NivelFome = $n;
        //     }
        // }

        // Metodo Comer
        public function comer(){
            $this->NivelFome --;

            // dar um echo antes e atribuição dps

            if ($this->NivelFome >= 0) {

                return $this->NivelFome = '0 (SEM FOME)';
                
            } elseif ($this->NivelFome >= 1 || $this->NivelFome <= 4 ) {

                return $this->NivelFome = "{$this->NivelFome} (Pouca FOME)";

            } else{
                return $this->NivelFome = "{$this->NivelFome} (Muita FOME)";
            }
        }

        // Metodo Dormir
        public function dormir(){
            $this->NivelFome ++;
            $this->NivelHumor ++;
        }

        public function brincar(){
            $this->NivelHumor ++;
        }

        public function mostrarEstado(){

            echo("Nome: {$this->Nome} <br> 
                  Fome : {$this->NivelFome} <br>
                  Humor : {$this->NivelHumor} <br>");
        }
    }

?>