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
    
        //funções nativas para manipulação de arrays
        /*

        is_array(array) -> verifica se é um array

        array_keys(array) -> retorna todas as chaves de um array

        sort(array) -> ordena array e reajusta indices

        asort(array) -> ordena array e preserva indices

        count(array) -> conta a quantidade de elementos

        array_merge(array) -> fundo um ou mais arrays

        explode(array) -> divide uma string baseada em um delimitador

        implode(array) -> junta elementos de um array em uma string

        */


        //is_array


        /* $array = array('notebook','teclado');
        $retorno = is_array($array);

        if($retorno) {
            echo 'sim,é um array';
        } else{
            echo 'não,não é um array';
        } */
    

        //array_keys


        /* $array = [1 => 'a', 7 => 'b', 18 => 'c'];
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        $chaves_array = array_keys($array);
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>'; */


        //sort


        /* $array = array('teclado','mouse','cabo hdmi','notebook','gabinete');
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        sort($array); //true 
        echo '<pre>';
            print_r($array);
        echo '</pre>'; */


        //asort


        /* $array = array('teclado','mouse','cabo hdmi','notebook','gabinete');
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        asort($array); //true 
        echo '<pre>';
            print_r($array);
        echo '</pre>'; */


        //count


        /* $array = array('teclado','mouse','cabo hdmi','notebook','gabinete');
        echo '<pre>';
            print_r($array);
            echo count($array);
        echo '</pre>'; */


        //array_merge


        /* $array1 = ['osx','windows'];
        $array2 = ['linux'];
        $array3 = ['solaris'];

        $novo_array = array_merge($array1, $array2, $array3);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>'; */


        //explode


        $string = '26/04/2022';
        $array_retorno = explode('/', $string);
        echo '<pre>';
            echo $string;
            print_r($array_retorno);
        echo '</pre>';


        //implode


        $array = ['a','b','c','d']; // a,b,c,d
        $string_retorno = implode(',', $array);
        echo $string_retorno;
    ?>
</body>
</html>