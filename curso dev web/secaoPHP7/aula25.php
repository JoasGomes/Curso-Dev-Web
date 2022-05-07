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

        //namespaces
        namespace A;
        class Cliente implements \B\CadastroInterface{
            public $nome = 'jorge';

            public function __constructor(){
                echo '<pre>';
                print_r(get_class_methods($this));
                echo '</pre>';
            }

            public function __get($attr){
                return $this->$attr;
            }

            public function salvar(){
                echo 'salvar'
            }

            public function remover(){
                echo 'remover'
            }
        }

        interface CadastroInterface{
            public function salvar();
        }

        //vai dividir o código apartir do ponto q foi colocado
        namespace B;
        class Cliente implements \A\CadastroInterface{
            public $nome = 'paulo';

            public function __constructor(){
                echo '<pre>';
                print_r(get_class_methods($this));
                echo '</pre>';
            }

            public function __get($attr){
                return $this->$attr;
            }

            public function remover(){
                echo 'remover'
            }

            public function salvar(){
                echo 'salvar'
            }
        }

        interface CadastroInterface{
            public function remover();
        }

        //indicaremos o namespace para criação de nova instância
        $c = new \A\Cliente();
        print_r($c);
        echo $c->__get('nome');

    
    
    
    
    
    ?>
</body>
</html>