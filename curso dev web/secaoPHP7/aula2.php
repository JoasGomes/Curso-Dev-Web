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
    
        //string
        $nome = 'joás vitor';

        //int
        $idade = 19;

        //float
        $peso = 83.5;

        //boolean
        $fumante = false; //(true = 1) ou (false = '')

        //modificando valores 
        $idade = 20;

    
    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?> </p>
    <p>Peso: <?= $peso ?> </p>
    <p>Fumante: <?= $fumante ?> </p>
</body>
</html>