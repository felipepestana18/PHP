<?php 

    class Veiculo {
        public $placa = "aaasfas";
        public $cor = "aaa";

        function acelar() {
            return "Acelar";
        }
    }

    class Carro extends Veiculo {
        public $tetoSolar = null;

        function __construct($placa, $cor) {
            $this->$placa = $placa;
            $this->$cor = $cor;
        }
        function __get($atributo) {
            return $this->$atributo;
        }
        function abrirTeto() {
            return "Abrindo o teto solar do carro com a cor " . $this->__get("cor") . " é com a placa: " . $this->__get("placa");
        }
        function alterarPosicaoVolante(){
            return "Alterar a posição do volante do carro com a cor " . $this->__get("cor") . " é com a placa: " . $this->__get("placa");
        }
    }
    class Moto extends Veiculo {
        public $contrarPesoEngidao = null;
        function __construct($placa, $cor) {
            $this->$placa = $placa;
            $this->$cor = $cor;
        }
        function __get($atributo){
            return $this->$atributo;
        }
        function empinar() {
            return "Empinando a moto: " . $this->__get("placa");
        }

    }

    $carro = new Carro("1020-30", "Preto");
    $moto = new Moto("100240", "Branco");

    echo "<pre>";
    print_r($moto);
    echo "</pre>";

    echo "<br/>";

    echo "<pre>";
    print_r($carro);
    echo "</pre>";
    
    echo "<br/>";

    echo $moto->empinar();
    echo "<br/>";
    echo $carro->abrirTeto();
    echo "<br/>";
    echo $carro->alterarPosicaoVolante();