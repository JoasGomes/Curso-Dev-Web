

        //->> array - incluir e excluir elementos

        var lista_frutas = Array()

        lista_frutas[0] = 'banana'
        lista_frutas[1] = 'maçã'

        //incluir elemento no final do array = .push()
        lista_frutas.push('melão')

        //incluir elemento no inicio do array = .unshift()
        lista_frutas.unshift('uva')

        //excluir elemento no final do array = .pop()
        lista_frutas.pop()

        //excluir elemento no inicio do array = .shift()
        lista_frutas.shift()


        //->> método de pesquisa

        var lista_carros = Array()

        lista_carros[0] = 'camaro'
        lista_carros[1] = 'lambo'
        lista_carros[2] = 'corsa'
        lista_carros[3] = 'chevetão'

        // index.of() = pesquisa o indice do elemento destacado 
        console.log(lista_carros.indexOf('corsa'))

        //podemos descobrir se ele não existe só der -1 como indice
        if(lista_carros.indexOf('abacaxi') === -1){
            console.log('elemento não existe')
        } else{
            console.log('elemento existe e está na posição' + lista_carros.indexOf('abacaxi'))
        }


        //->> ordenação de elementos

        var lista_numeros = Array()

        lista_numeros[0] = 12
        lista_numeros[1] = 40
        lista_numeros[2] = 3
        lista_numeros[3] = 7
        lista_numeros[4] = 19
        lista_numeros[5] = 1

        //organiza os elementos em padrão alfanumérico
        console.log(lista_numeros.sort(ordenaNumeros()))

        function ordenaNumeros(a, b) {
            return a - b
            // < 0 = a ordenado antes de b
            // > 0 = b ordenado antes de a
            // == a ordem é mantida
        }

