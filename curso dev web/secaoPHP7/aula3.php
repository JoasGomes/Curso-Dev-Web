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

        //concatenação

        $nome = 'jorge';
        $cor = 'vermelho';
        $idade = 19;
        $atividade_preferida = 'andar de bicicleta';

        //operador .

        echo 'olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ',vi que vc tem ' . $idade . ' anos, e gosta de ' . $atividade_preferida;

        //aspas duplas
        echo '<br />';

        echo "olá $nome, vi que sua cor preferida é $cor ,vi que vc tem $idade anos, e gosta de $atividade_preferida";

        //variáveis constantes
        //define()
        define('BD_URL','endereco_bd_dev');
        define('BD_USUARIO','usuario_dev');
        define('BD_SENHA','senha_dev');

        echo '<br />';

        echo BD_URL;
        echo '<br />';
        echo BD_USUARIO;
        echo '<br />';
        echo BD_SENHA;
        

    
    ?>

</body>
</html>