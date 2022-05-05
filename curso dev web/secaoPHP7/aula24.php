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
    
    //atributos e métodos estáticos
        class Exemplo {
            //não acessível atraves do operador ->
            public static $atributo1 = 'eu sou um atributo estático';
            public $atributo2 = 'eu sou um atributo normal';

            //não pode ultilizar o this
            public static function metodo1(){
                echo 'eu sou um método estático';
            }

            public function metodo2(){
                echo 'eu sou um método normal';
            }
        }

        echo Exemplo :: $atributo1;
        echo '<br/>';
        Exemplo :: metodo1();
    


        //interfaces

        interface EquipamentoEletronicoInterface(){
            public function ligar();
            public function desligar();
        }

        class Geladeira implements EquipamentoEletronico(){
            public function abrirPorta(){
                echo 'abrir porta';
            }

            public function ligar(){
                echo 'ligar';
            }

            public function desligar(){
                echo 'desligar';
            }

        }

        class TV implements EquipamentosEletronicosInterface{
            public function trocarCanal(){
                echo 'trocar canal';
            }

            public function ligar(){
                echo 'ligar';
            }

            public function desligar(){
                echo 'desligar';
            }
        }

        $x = new Geladeira();
        $x = new TV();


        //---------------------------------------

        interface MamiferoInterface{
            public function respirar();
        }

        interface TerrestreInterface{
            public function andar();
        }

        interface aquaticoroInterface{
            public function nadar();
        }

        class Humano implements MamiferoInterface,TerrestreInterface{
            public function andar(){
                echo 'andar';
            }

            public function respirar(){
                echo 'repirar';
            }

            public function conversar(){
                echo 'conversar';
            }
        }

        class Baleia implements MamiferoInterface, aquaticoroInterface{
            public function respirar(){
                echo 'repirar';
            }

            public function nadar(){
                echo 'nadar';
            }

            protected function esguichar(){
                echo 'esguichar';
            }
        }

        //--------------------------
        interface AnimalInterface{
            public function comer();
        }

        interface AveInterface extends AnimalInterface{
            public function voar();
        }

        class Papagaio implements AveInterface{
            public function voar(){
                echo 'voar';
            }
            
            public function comer(){
                echo 'comer';
            }
        }


    
    
    ?>
</body>
</html>