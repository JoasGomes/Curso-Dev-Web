

        //casting
        var variavel1 = prompt('digite um numero:')
        var variavel2 = prompt('digite outro numero:')

        variavel1 = parseInt(variavel1)//apenas valores inteiros
        variavel2 = parseFloat(variavel2)//preserva casas decimais

        //toString() = transforma numeros em strings(inverso de parseInt/float)

        document.write(variavel1 + variavel2)

        //operadores lógicos
        // E(&&) - verdadeiro se todas forem verdadeiras.
        // OU(||) - verdadeiro se pelo menos uma for verdadeira.
        // Negação(!) - inverte o resultado da expressão.

        if(2 == 2 && 3 >= 1){
            document.write('Verdadeiro')
        } else{
            document.write('Falso')
        }

        if(2 == 2 || 3 >= 1){
            document.write('Verdadeiro')
        } else{
            document.write('Falso')
        }

