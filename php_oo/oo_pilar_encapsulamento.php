<?php 
    class Pai {
        private $Nome = "Felipe";
        protected $SobreNome = "Pestana";
        public $Humor = "Feliz";


        public function __get($atributo) {
            return $this->$atributo;
        }
        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        private function executarMania() {
            echo 'Assobiar';
        }
        protected function responder(){
            echo 'Oi';
        }
        public function executarAcao(){

            $this->executarMania();
            echo '<br/>';
            $this->responder();
        }


        // function getNome(){
        //     return $this->Nome;
        // }

        // function setNome($value){
        //     if(strlen($value) >= 3 ) {
        //         $this->Nome = $value;
        //     } else {
        //     echo 'Nome Invalido !!';
        //     }
           
        // }
        // function getSobreNome(){
        //     return $this->SobreNome;
        // }

        // function setSobreNome($value){
        //     if(strlen($value) >= 3 ) {
        //         $this->SobreNome = $value;
        //     } else {
        //     echo 'Nome Invalido !!';
        //     }
           
        // }
    }

    class Filho extends Pai {


        public function Mania(){
            echo "Brincar";
        }

    }

    $filho = new Filho();
    echo $filho->Nome = "Carla";
    echo "<br/>";
    $filho->Mania();





    /*

    $pai = new Pai();
    echo $pai->Nome;
    echo '<br/>';
    echo $pai->SobreNome = "Silva";
    echo '<br/>';
    echo $pai->executarAcao();
    */

// safasfas
    
    // $pai = new Pai();
    // echo '<br/>';
    // echo $pai->Humor;
    // echo '<br/>';
    // echo $pai->getNome();
    // echo '<br/>';
    // $pai->setNome("Ra");
    // echo '<br/>';
    // echo $pai->getNome();
    // echo '<br/>';
    // $pai->setSobreNome("Pestana1");
    // echo $pai->getSobreNome();

?>