<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>

        /*
        if/else
        if(condição){
            trecho de codigo que será executado
        }else{
            trecho que será executado caso if não for executado
        }
        if/else
        if(condição){
            trecho de codigo que será executado
        }else if{
            trecho de codigo que será executado
        }else{
            trecho que será executado caso if não for executado
        }
        */

        <?php

            $a = 3;
            $b = 4;


            if ($a > $b) {
                echo "a é maior que b";
            } elseif ($a == $b) {
                echo "a é igual a b";
            } else {
                 echo "a é menor que b";
            }
        ?>

        //operadores de comparação
        /*
        igual(==) = iguais
        idêntico(===) = iguais e do mesmo tipo
        diferente(!=) = diferentes
        não idêntico(!==) = diferente e de tipo diferente
        menor(<) = menor que 
        maior(>) = maior que
        menor igual(<=) = menor ou igual a 
        maior igual(>=) = maior ou igual a
        */

        if(2==2){
            document.write('escrevi no bloco if')
        } else{
            document.write('escrevi no bloco else')
        }



    </script>
</head>
<body>
    
</body>
</html>