
        //->> estruturas de repetição
        
        
        //- while
        var x = 1
        //true
        while(x <= 10){
            document.write(x + '<br/>')

            if(x === 5){
                break
                //ele quebrará o lanço de repetição
            }

            x++
        }

        //- do while

        // ele executa o bloco de código antes de verificar a condição
        var z = 11

        do{
            document.write(x + '<br/>')
        }while(x <= 10)

        //- laço for

        for(variavel; condicao; controle){
            //código que será executado
        }
        for (var w = 10; w >= 0; w--){
            document.write(w + '<br/>')
        }


        //-->> praticando um pouco

        var lista_frutas = Array()

        lista_frutas[0] = 'banana'
        lista_frutas[1] = 'maça'
        lista_frutas[2] = 'morango'
        lista_frutas[3] = 'uva'

        var y = 0

        while(y < lista_frutas.length){
            document.write(lista_frutas[y] + '<br/>')
            y++
        }

