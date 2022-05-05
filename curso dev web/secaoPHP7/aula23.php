<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        //pilar do encapsulamento
        class Pai {
            
            private $nome = 'jorge';
            protected $sobrenome = 'silva';
            public $humor = 'feliz';


            /* public function __get($attr){
                return $this->$attr;
            }

            public function __set($attr, $value){
                $this->$attr = $value;
            } */

            private function executarMania(){
                echo 'assobiar';
            }

            protected function responder(){
                echo 'oi';
            }

            public function executarAcao(){
                
                $this->executarMania();
                echo '<br/>';
                $this->responder();
            }

        }

        class Filho extends Pai{
            public function getAtributo($attr){
                return $this->$attr;
            }

            public function setAtributo($attr, $value){
                $this->$attr = $value;
            }
        }

        /* $pai = new Pai();
        echo $pai->getNome();
        $pai->setNome('jamilton');
        echo '<br/>';
        echo $pai->getNome();

        echo '<br/>';
        echo $pai->executarAcao(); */

        $filho = new Filho();
        echo '<pre>';
        print_r($filho);
        echo '<pre/>';
        echo $filho->getAtributo('humor');
        $filho->setAtributo('humor', 'triste');
        echo '<br/>';
        echo $filho->getAtributo('humor');
        
        echo '<pre>';
        print_r(get_class_methods($filho));
        echo '<pre/>';

        echo $filho->_get('nome');
        echo '<br/>';
        echo $filho->_get('nome');
    ?>
</body>
</html>