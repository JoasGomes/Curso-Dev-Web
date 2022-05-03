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
            public $cargo = null;
            public $salario = null;


            
            //metodos getters e setters
            /* function setNome($nome) {
                $this->nome = $nome;
            }

            function setNumFilhos($numFilhos) {
                $this->numFilhos = $numFilhos;
            }

            function getNome(){
                return $this->nome;
            }

            function getNumFilhos(){
                return $this->numFilhos;
            } */


            //getters e setters mágicos
            function __set($atributo,$valor){
                $this->$atributo = $valor;
            }

            function __get($atributo){
                return $this->$atributo;
            }



            //métodos
            function resumirCadFunc(){
                return "$this->nome possui $this->numFilhos filhos(s)";
            }

            function modificarNumFilhos($numFilhos){
                //afetar um atributo do obj
                $this->numFilhos = $numFilhos;
            }

            

        }

        $f = new Funcionario();
        $f->__set('nome', 'jose');
        $f->__set('numFilhos', 2);
        //echo $f->resumirCadFunc();
        
        echo $f->__get('nome') . 'possui' . $f->__get('numFilhos') . 'filho(s)';
    
    
    ?>
</body>
</html>