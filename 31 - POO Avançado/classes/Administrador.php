<?php

    class Administrador extends Usuario{

        public function chutarUsuario(Espectador $usuario):void{
            echo("{$this->nome} Kickou o {$usuario->nome}");
        }
    }




?>