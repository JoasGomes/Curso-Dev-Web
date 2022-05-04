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
    
        //pilar do polimorfismo
        class Carro extends Veiculo {

            public $teto_solar = true;

            function __construct($placa,$cor){
                $this->placa = $placa;
                $this->cor = $cor;
            }

            function abrirTetoSolar(){
                echo 'abrir teto solar';
            }

            function alterarPosicaoVolante(){
                echo 'alterar posição volante';
            }
        }

        class Moto extends Veiculo{

            public $contraPesoGuidao = true;

            function __construct($placa,$cor){
                $this->placa = $placa;
                $this->cor = $cor;
            }

            function empinar(){
                echo 'empinar';
            }

            function trocarMarcha(){
                echo 'desengatar embreagem com a mão e engatar com o pé';
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

            function trocarMarcha(){
                echo 'desengatar embreagem com o pé e engatar com a mão';
            }
        }

        class Caminhao extends Veiculo{

        }

        $carro = new Carro('cdv1234','branco');
        $moto = new Moto('def2345','preto');
        $caminhao = new Caminhao();

        $carro->trocarMarcha();
        echo '<br/>';
        $moto->trocarMarcha();
        echo '<br/>';
        $caminhao->trocarMarcha();
        

        
    
    
    
    ?>
</body>
</html>