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

        //switch
    
        switch(opção){
            case 1:
                //trecho d código que será executado
                break;
            case 2:
                //trecho d código que será executado
                break;
                //não para até achar um break
            case 3:
                //trecho d código que será executado
                break;
        }

        $parametro = '2';

        switch($parametro){
            case 1:
                echo 'entrou no case 1';
                break;
            case 2:
                echo 'entrou no case 2';
                break;
            case 3:
                echo 'entrou no case 3';
                break;
            //default funciona como se não(else) do if
            default:
                echo 'entrou no default';
                break;
        }


        //casting de tipos
                
        /* 
                 |-> float
        int      |-> string
        

                 |-> int
        string   |-> float
                 |-> boolean


                 |-> int 
        float    |-> string


                 |-> int
        boolean  |-> string

        */

        //gettype() => retorna o tipo da variável --> é igual ao typeof do javascript
        $valor = 10;
        //para tronsforma-la em outro tipo --> igual a js só que o parênteses é oposto
        $valor2 = (float) $valor;

        echo gettype($valor);
    
    ?>
</body>
</html>