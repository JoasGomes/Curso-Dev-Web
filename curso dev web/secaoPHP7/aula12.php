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
    
        //arrays

        //sequenciais (numéricos)

        //$lista_frutas = ['banana','maçã','morango','uva'];
        $lista_frutas = array('banana','maçã','morango','uva');
        $lista_frutas[] = 'abacaxi';

        //var_dump e print_r demonstram o conteudo contigo no array
        var_dump($lista_frutas);
        echo '<hr />';
        print_r($lista_frutas);

        //associativos

        $lista_cores = array(
            'a' => 'vermelho',
            'b' => 'preto',
            'c' => 'verde',
            'd' => 'azul',
            'e' => 'roxo',
        );
        var_dump($lista_cores);

        //arrays multidimensionais

        $lista_coisas = [];

        $lista_coisas['frutas'] = array(1 => 'banana', 2 => 'maçã', 3 => 'morango', 4 => 'uva');
        $lista_coisas['pessoas'] = array(1 => 'joão', 2 => 'josé', 3 => 'maria', 4 => 'joana');

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo '<hr />';
        echo $lista_coisas['frutas'][3]; // morango

        echo '<br />';
        echo $lista_coisas['pessoas'][1]; // joão


        //pesquisa no array
        
        //in_array() -> true ou false se existe os esta sendo procurado
        //array_search() -> retorna o indice do valor pesquisado caso exista

        $lista_objetos = ['celular','estojo','camiseta'];

        echo in_array('camiseta',$lista_objetos);

        echo array_search('estojo',$lista_objetos);






    
    
    
    ?>
</body>
</html>