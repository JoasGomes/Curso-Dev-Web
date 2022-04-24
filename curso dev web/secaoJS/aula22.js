
        //->> arrow function

        //função convencional
       /*  let quadrado = function(x = 5){
            return x * x
        } */

        // arrow
        // a palavra 'function' é omitida

        /* let quadrado = (x) => {
            return x * x
        } */

        // é ultilizado a flechinha(arrow) e após ela o escopo

        // se um unico parâmetro for recebido eu posso retirar os parênteses

        /* let quadrado = x => {
            return x * x
        } */

        //se houver apenas um retorno da função eu posso omitir o 'return' e as chaves

        /* let quadrado = x => x * x //return implícito

        document.write(quadrado(4)) */


        // function normal
        /* let parOuImpar = function(numero){
            if(numero % 2 === 0){
                return 'par'
            } else {
                return 'ímpar'
            }
        } */

        //na forma arrow function
        /* let parOuImpar = numero => {
            if(numero % 2 === 0){
                return 'par'
            } else {
                return 'ímpar'
            }
        } */

        //na forma arrow function melhorada
        let parOuImpar = numero => numero % 2 === 0 ? 'par' : 'ímpar'

        document.write(parOuImpar(6))


