
        //funções ----------------------------------------------------

        //void - resultado é guardado e não mostrado
        //retorno - algo é explicitado usando "return"

        /* function calcularArea(largura,comprimento){
            var area = largura * comprimento
            return area
        }
        var largura = prompt('digite a largura do terreno em metros')
        var comprimento = prompt('digite o comprimento do terreno em metros')

        var area = calcularArea(largura,comprimento)

        document.write('o terreno possui ' + area + ' metros quadrados')
        */


        //escopo ------------------------------------------------------

        //3 escopos: global, função e o bloco
        /*
        global = todo o código
        função = todo o código dentro da function
        bloco = todo o código dentro de uma instrução de comando ex:if/else
        */

        var serie = 'friends'

        //escopo de bloco
        if(true){
            var serie2 = 'game of thrones'
            document.write(serie)
        }

        document.write(serie2)

        document.write(<br/>)

        function x(){
            var serie3 = 'the walking dead'
            document.write(serie)
            document.write(serie2)

        }
        x()
        document.write(<br/>)
        document.write(serie3)

