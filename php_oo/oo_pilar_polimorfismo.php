<?php 

    class Veiculo {
        public $placa = "aaasfas";
        public $cor = "aaa";

        function acelar() {
            return "Acelar";
        }

        function trocarMarcha() {
            echo 'Desengantar embreagem com pé ou engatar a empreagem marcha com a mão';
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
        function trocarMarcha() {
            echo 'Desengantar a embreagem com a mão e engatar com  o  pé';
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
        function trocarMarcha() {
            echo 'Desengantar embreagem com pé e engatar a marcha com a mão';
        }

    }

    $carro = new Carro("1020-30", "Preto");
    $carro->trocarMarcha();
    $moto = new Moto("100240", "Branco");
    echo '<br/>';
    $moto->trocarMarcha();