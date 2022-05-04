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
    
        //metodo construtor e destrutor
        class Pessoa {

            public $nome = null;

            function __construct($nome) {
                echo 'objeto iniciado';
                $this->nome = $nome;
            }

            function __destruct() {
                echo 'objeto removido';
            }

            function __get($atributo) {
                return $this->$atributo;
            }

            function correr(){
                return $this->__get('nome') . ' está correndo';
            }
        }

        $pessoa = new Pessoa('jorge');
        echo '<br />Nome:' . $pessoa->__get('nome');
        echo '<br />' . $pessoa->correr();

        echo '<br/>';
        unset($pessoa);
        echo '<br/>';



        //pilar da herança
        class Carro extends Veiculo {
            /* public $placa = 'abc1234';
            public $cor = 'branco'; */
            public $teto_solar = true;

            function __construct($placa,$cor){
                $this->placa = $placa;
                $this->cor = $cor;
            }

           /*  function acelerar (){
                echo 'acelerar';
            } */

            function abrirTetoSolar(){
                echo 'abrir teto solar';
            }

            function alterarPosicaoVolante(){
                echo 'alterar posição volante';
            }
        }

        class Moto extends Veiculo{
            /* public $placa = 'def1123';
            public $cor = 'preta'; */
            public $contraPesoGuidao = true;

            function __construct($placa,$cor){
                $this->placa = $placa;
                $this->cor = $cor;
            }

            /* function acelerar(){
                echo 'acelerar';
            } */

            function empinar(){
                echo 'empinar';
            }
        }

        class Veiculo {
            public $placa = null;
            public $cor = null;

            function acelerar(){
                echo 'acelerar';
            }

            function freiar(){
                echo 'freiar';
            }
        }

        $carro = new Carro('cdv1234','branco');
        $moto = new Moto('def2345','preto');

        echo '<pre>';
        print_r($carro);
        echo '<br/>';
        print_r($moto);
        echo '<pre/>';
        echo '<hr/>';

        $carro->abrirTetoSolar();
        echo '<br/>';
        $carro->acelerar();

        echo '<hr/>';

        $moto->empinar();
        echo '<br/>';
        $moto->acelerar();



    
    
    ?>
</body>
</html>