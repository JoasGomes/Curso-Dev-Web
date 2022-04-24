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
    

        //funções

        //void = não tem retorno
        function exibirBoasVindas(){
            echo 'bem-vindo ao curso php';
        }

        exibirBoasVindas();

        function calcularAreaTerreno($largura,$comprimento){
            $area = $largura * $comprimento;

            return $area;
        }

        echo calcularAreaTerreno(100,50);
        echo '<br />';
        echo calcularAreaTerreno(50,440);
        echo '<br />';
        echo calcularAreaTerreno(23,367);
        echo '<br />';
        echo calcularAreaTerreno(80,20);
        echo '<br />';


        //funções para manipular strings

        /*
        strtolower($texto) - transforma caracteres em minúsculo
        strtoupper($texto) - transforma caracteres em maiúsculo
        ucfirst($texto) - transforma primeiro caractere em maiúsculo
        strlen($texto) - conta todos os caracteres
        str_replace(<procura por>, <substitui por>, $texto) - substitui caracteres por outros
        substr($texto, <posicao inicial>, <qtde caracteres>) - retorna parte de string
        
        */

        $texto = 'curso completo de php';

        //todas em caixa baixa
        echo $texto . '<br />';
        echo strtolower($texto);

        echo '<hr />';

        //todas em caixa alta
        echo $texto . '<br />';
        echo strtoupper($texto);

        echo '<hr />';

        //primeiro caracterete caixa alta
        echo $texto . '<br />';
        echo ucfirst($texto);

        echo '<hr />';

        //numero de caracteres (com espaços vazios)
        echo $texto . '<br />';
        echo strlen($texto);

        echo '<hr />';

        //mudar uma parte do texto
        echo $texto . '<br />';
        echo str_replace('php','javascript',$texto);

        echo '<hr />';

        //copia uma parte do texto
        echo $texto . '<br />';
        echo substr($texto, 1, 4); //urso
    
    
    ?>
</body>
</html>