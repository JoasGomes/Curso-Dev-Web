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
    
        //tratamento de erros

        //aqui pode ter uma lógica
        try{
            //aqui pode ter outra lógica para potencial erro
            echo '<h3> *** try *** </h3>';

            $sql = 'Select * from clientes';
            //mysql_query($sql); //erro

            if(!file_exists('require_arquivo_a.php')){
                throw new Exception('o arquivo em questão não existe');
            }

        }catch(Error $e){
            echo '<h3> *** catch error *** </h3>';
            echo $e;
            //armazenando esse erro em banco de dados
        }catch(Exception $e){
            echo '<h3> *** catch exception *** </h3>';
            echo $e;
        }
        
        //opcional
        finally{
            echo '<h3> *** finally *** </h3>';
        }

        //erros customizados
        class MinhaExceptionCustomizada extends Exception{

            private $erro = '';

            public function __construct($erro){
                $this->erro = $erro;
            }

            public function exibirMensagemErroCustomizada(){
                echo '<div style="border: solid 1px #000">';
                    echo $this->erro;
                echo '</div>';
            }
        }

        try{

            throw new MinhaExceptionCustomizada('Esse é um erro de teste');


            //error(php)
            //exception (mais comum (programadores))
            //customizadas (programadores)

        } catch(MinhaExceptionCustomizada $e){
            $e->exibirMensagemErroCustomizada();
        }

    
    
    ?>
</body>
</html>