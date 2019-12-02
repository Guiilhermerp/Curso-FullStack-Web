<?php

    class Usuario extends Espectador{

        public function escreverMensagem($mensagem){
            echo("<br> O usuário: {$this->nome} escreveu: $mensagem<br>");
        }
    }



?>