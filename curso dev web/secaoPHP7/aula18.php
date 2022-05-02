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
    
        
        //modelo
        class Funcionario {

            //atributos
            public $nome = 'jose';
            public $telefone = '11 999999999';
            public $numFilhos = 2;

            
            //metodos getters e setters
            function setNome($nome) {
                $this->nome = $nome;
            }

            function setNumFilhos($numFilhos) {
                $this->numFilhos = $numFilhos;
            }


            //métodos
            function resumirCadFunc(){
                return "$this->nome possui $this->numFilhos filhos(s)";
            }

            function modificarNumFilhos($numFilhos){
                //afetar um atributo do obj
                $this->numFilhos = $numFilhos;
            }

            function getNome(){
                return $this->nome;
            }

            function getNumFilhos(){
                return $this->numFilhos;
            }

        }

        $f = new Funcionario();
        $f->setNome('jose');
        $f->setNumFilhos(2);
        echo $f->resumirCadFunc();

        /* $z = new Funcionario();
        echo $z->resumirCadFunc();
        echo '<br/>';
        $z->modificarNumFilhos(1);
        echo $z->resumirCadFunc(); */


    
    
    
    ?>
</body>
</html>