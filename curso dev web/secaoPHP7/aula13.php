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
    
        //false(true/false) - tipo variável boolean
        //null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //valores null
        if(is_null($funcionario1)){
            echo 'sim,a variavel é null';
        } else{
            echo 'nao,a variavel nao é null';
        }

        echo '<br />';
        if(is_null($funcionario2)){
            echo 'sim,a variavel é null';
        } else{
            echo 'nao,a variavel nao é null';
        }

        echo '<br />';
        if(is_null($funcionario3)){
            echo 'sim,a variavel é null';
        } else{
            echo 'nao,a variavel nao é null';
        }

        echo '<br />';
        //valores vazios
        if(empty($funcionario1)){
            echo 'sim,a variavel esta vazia';
        } else{
            echo 'nao,a variavel nao esta vazia';
        }

        echo '<br />';
        if(empty($funcionario2)){
            echo 'sim,a variavel esta vazia';
        } else{
            echo 'nao,a variavel nao esta vazia';
        }

        echo '<br />';
        if(empty($funcionario3)){
            echo 'sim,a variavel esta vazia';
        } else{
            echo 'nao,a variavel nao esta vazia';
        }
    
    
    ?>
</body>
</html>