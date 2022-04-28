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
    
        //prática com loops

        $registros = array(
            array('titulo' => 'titulo noticia 1','conteudo' => 'conteudo noticia 1',
            array('titulo' => 'titulo noticia 2','conteudo' => 'conteudo noticia 2',
            array('titulo' => 'titulo noticia 3','conteudo' => 'conteudo noticia 3',
            array('titulo' => 'titulo noticia 4','conteudo' => 'conteudo noticia 4'
        );

        echo '<pre>';
        print_r($registros);
        echo '</pre>';
        echo '<br /><br /><br />';

        //$idx = 0;

        //count -> quantidades de elementos de array
        /* while($idx < count($registros)){

            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            //print_r ($registros[$idx]);
            echo '<hr />';

            $idx++;
        } */

        /* do{
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            echo '<hr />';

            $idx++;
        }while($idx < count($registros)); */

        for($idx = 0; $idx < count($registros); $idx++){
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            echo '<hr />';
        }
        echo '<br/>';

        //foreach

        $itens = array('sofá','mesa','cadeira','fogão','geladeira');

        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach($itens as $item){
            echo "$item ";

            if($item == 'mesa'){
                echo '(*compre uma mesa e ganhe 50% de desconto na compra de 4 cadeiras)';

                echo '<br/>';
            }
        }

        $funcionarios = array(
            array('nome' => 'joão', 'salario' => 1500),
            array('nome' => 'maria', 'salario' => 3000),
            array('nome' => 'juliana', 'salario' => 800),
        );

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $indice => $funcionario){
            
            foreach($funcionario as $indice2 => $valor){
                echo "$idx2 - $valor <br/>";
            }
            echo '<hr/>';
        }
    
    
    
    
    ?>
</body>
</html>