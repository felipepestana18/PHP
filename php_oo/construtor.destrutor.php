<?php 

    class Pessoa {
        public $nome = null;
        public $sobreNome;

        function __construct($atributo){
            $this->nome = $atributo;
            return "Objeto está iniciado";
        }
        function __destruct(){
            return "Objeto está sendo removido da memoria";
        }
        function __get($atributo) {
            return $this->$atributo;
        }

        function correr(){
            return "O " .  $this->__get("nome") . " está correndo";
        }
    }

    $pessoa = new Pessoa("Felipe");
    
    echo $pessoa->__get("nome");
    echo "<br/>";
    echo $pessoa->correr();
    echo "<br/>";
    echo $pessoa->__destruct();

?>