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

        //operadores aritméticos
    
        $num1 = 13;
        $num2 = 4;

        echo "a soma entre $num1 e $num2 é" . ($num1 + $num2);
        echo '<br />';
        echo "a diminuição entre $num1 e $num2 é" . ($num1 - $num2);
        echo '<br />';
        echo "a divisão entre $num1 e $num2 é" . ($num1 / $num2);
        echo '<br />';
        echo "a multiplicação entre $num1 e $num2 é" . ($num1 * $num2);
        echo '<br />';
        echo "o resto da divisão entre $num1 e $num2 é" . ($num1 % $num2);
        echo '<br />';

        //atribuição de valores

        //=
        //+, -, *, /, %

        $x = 10;

        $x += 5; //15

        echo $x;

        //operadores de incremento e decremento

        /*
        pre-incremento (++$a) - adiciona uma unidade antes de retornar $a
        pos-incremento ($a++) - retorna $a depois adiciona uma unidade
        pre-decremento (--$a) - diminui uma unidade antes de retornar $a
        pos-decremento ($a--) - retorna $a depois diminui uma unidade
        
        */

        //pós-incremento
        $a = 7;

        echo "o valor contido em a é $a <br />";
        echo 'o valor contido em a após o pos incremento é' . $a++ . '<br />';
        echo "o valor atualizado é $a <br />";
    
        //pré-incremento

        echo "o valor contido em a é $a <br />";
        echo 'o valor contido em a após o pre incremento é' . ++$a . '<br />';
        echo "o valor atualizado é $a <br />";

        //pós-decremento
    
        echo "o valor contido em a é $a <br />";
        echo 'o valor contido em a após o pos decremento é' . $a-- . '<br />';
        echo "o valor atualizado é $a <br />";
    
        //pré-decremento
    
        echo "o valor contido em a é $a <br />";
        echo 'o valor contido em a após o pre decremento é' . --$a . '<br />';
        echo "o valor atualizado é $a <br />";
    
    
    ?>
</body>
</html>