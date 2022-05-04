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
            //não estão disponíveis para a aplicação 
            private $nome = 'jorge';
            protected $sobrenome = 'silva';
            //atributos publicos estão disponíveis para mudança direta
            public $humor = 'feliz';


            public function __get($attr){
                return $this->$attr;
            }

            public function __set($attr, $value){
                $this->$attr = $value;
            }

            private function executarMania(){
                echo 'assobiar';
            }

            protected function responder(){
                echo 'oi';
            }

            public function executarAcao(){
                //so posso executar mania(private) atraves de uma public
                $this->executarMania();
                echo '<br/>';
                $this->responder();
            }


            /* public function getNome(){
                return $this->nome;
            }

            public function setNome($value){

                if(strlen($value) >= 3){
                    $this->nome = $value;
                }
            } */

        }

        $pai = new Pai();
        echo $pai->getNome();
        $pai->setNome('jamilton');
        echo '<br/>';
        echo $pai->getNome();

        echo '<br/>';
        echo $pai->executarAcao();

    
    
    
    
    
    ?>
</body>
</html>