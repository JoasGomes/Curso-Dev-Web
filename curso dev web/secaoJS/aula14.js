
        //->> array = basicamente é uma lista para não declarar várias variáveis

        var lista_frutas = Array()// ou []

        lista_frutas[1] = 'banana'
        lista_frutas[2] = 'maçã'
        lista_frutas[3] = 'morango'
        lista_frutas[4] = 'uva'

        /*
        length: se inicia a contagem no 0 (então se o primeiro elemento que você
        determinar for da posição 5 será adicionado os anteriores até o 0 na contagem do length)
        */



        //->> arrays multidimensionais = arrays dentro de arrays

        var lista_coisas = Array()

        lista_coisas['frutas'] = Array()

        lista_coisas['frutas'][1] = 'banana'
        lista_coisas['frutas'][2] = 'pera'
        lista_coisas['frutas'][3] = 'melão'
        lista_coisas['frutas'][4] = 'uva'

        lista_coisas['pessoas'] = Array()

        lista_coisas['pessoas'][1] = 'pedro'
        lista_coisas['pessoas'][2] = 'maria'
        lista_coisas['pessoas'][3] = 'joão'

        console.log(lista_coisas)




