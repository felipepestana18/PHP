<?php 

    class Funcionario {
        public $nomeFun = null;
        public $telefone = null;
        public $qtdFilhos = null;


        function __set($atributo, $valor){
            $this->$atributo = $valor;
            
        }
        function __get($atributo)
        {
            return $this->$atributo;
        }

        function modificarQtdFilhos($qtdFilhos) {
            $this->qtdFilhos = $qtdFilhos;
        }
        /*
        function setNome($nome) {
            $this->nomeFun = $nome;
        }
        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        function setqtdFilhos($qtdFilhos){
            $this->qtdFilhos = $qtdFilhos;
        }
        function getNome(){
            return $this->nomeFun;
        }
        function getTelefone(){
            return $this->telefone;
        }
        function getqtFilhos(){
            return $this->qtdFilhos;
        }
        */
        function mostraDadosFun() {
            return "nome do funcionario " . $this->__get('nomeFun') . " , e seu telefone " . $this->__get('telefone') . ", quatidade de filhos "  .  $this->__get("qtdFilhos");
        }
    }
    $fun = new Funcionario();

    $fun->__set("nomeFun", "Felipe");
    $fun->__set("telefone", "179825650");
    $fun->__set("qtdFilhos", 10);
    echo $fun->mostraDadosFun();
    echo "<hr>";
    $fun1 = new Funcionario();
    echo $fun1->mostraDadosFun();