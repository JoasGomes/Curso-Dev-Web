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
    
        //operadores condicionais/comparação
        /*
        ==
        ===
        != ou <>
        !==
        <
        >
        <=
        >=

        */

        // f e v = f
        if(5 == 3 && 10 > 3){
            echo 'verdadeiro';
        } else{
            echo 'falso';
        }

        // v e v = v
        if(3 == 3 && 10 > 3){
            echo 'verdadeiro';
        } else{
            echo 'falso';
        }

        // v ou f = v
        if(3 == 3 || 10 > 15){
            echo 'verdadeiro';
        } else{
            echo 'falso';
        }


        $usuario_possui_cartao_loja = true;
        $valor_compra = 225;

        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        if($usuario_possui_cartao_loja == true && $valor_compra >=100){
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        }
    
    
    
    ?>

    <h1>detalhes do pedido</h1>

    <p>possui cartão da loja?
        <?php
            if($usuario_possui_cartao_loja == true){
                echo 'sim';
            } else{
                echo 'não';
            }
        
        ?>
    </p>

    <p>valor de compra: <?= $valor_compra ?> </p>

    <p>recebeu desconto frete?
        <?php
            if($recebeu_desconto_frete == true){
                echo 'sim';
            } else{
                echo 'não';
            }
        ?>
    </p>

    <p>valor do frete: <?= $valor_frete ?> </p>

</body>
</html>