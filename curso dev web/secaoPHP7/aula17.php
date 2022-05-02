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
    
        //introdução a orientação a objetos

        //paradigma procedural
        $a = 10;
        $b = 7;
        $operador = 'soma';

        function calcular($a, $b, $operador){
            if($operador == 'soma'){
                return $a + $b;
            }

            return false;
        }

        echo calcular($a,$b,$operador);

        //paradigma de orientação a objetos

        class Calculadora {

            public $x = 10;
            public $y = 7;
            public $operador = 'soma';

            public function calcula(){
                if($this->operador == 'soma'){
                    return $this->x + $this->y;
                }

                return false;
            }
        }

        $calcular1 = new Calculadora();
        echo $calcular1->calcula();

    
    
    
    
    
    ?>
</body>
</html>