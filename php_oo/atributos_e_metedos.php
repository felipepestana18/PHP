<?php

    class Exemplo {

        public static $atributo1 =  "Eu sou atributo estático";
        public $atributo2 =  "Eu sou um atributo Normal";

        public static function Metedo1(){
            echo "Eu sou um metedo Estatico";
        }
        public function Metedo2() {
            echo "Eu sou um metedo Normal";
        }
    }
    echo Exemplo::$atributo1;
?>