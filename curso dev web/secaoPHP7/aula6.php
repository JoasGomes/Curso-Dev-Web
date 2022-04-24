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
    
        //operadores ternários
        
        /*
        NORMAL
        if($usuario_possui_cartao_loja == true){
            echo 'sim';
        } else{
            echo 'não';
        } 
        */

        // <condição> ? true : false
        //COM OPERADOR
        
        $usuario_possui_cartao_loja = true;
        $valor_compra = 225;

        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if($usuario_possui_cartao_loja == true && $valor_compra >=100){
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        }

        $usuario_possui_cartao_loja == true ? 'sim' : 'não';

        $teste = $recebeu_desconto_frete ? 'sim' : 'não';
        echo $teste;

        
    
    
    ?>
</body>
</html>