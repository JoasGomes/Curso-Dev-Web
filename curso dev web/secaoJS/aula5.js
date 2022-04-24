
        //operadores aritméticos
        /*
        Adição(+) - Soma valores
        Subtração(-) - Diferença entre valores
        Multiplicação(*) - Produto dos valores
        Divisão(/) - Quociente dos valores
        Módulo(%) - Resto da divisão
        Incremento(++) - Pré/pós incremento
        Decremento(--) - Pré/pós decremento
        */

        var num1 = prompt('Digite o valor de num1')
        var num2 = prompt('Digite o valor de num2')

        num1 = parseInt(num1)
        num2 = parseInt(num2)

        document.write('A soma entre num1 e num2 é:'+ (num1 + num2) + <br/>)
        document.write('A subtração entre num1 e num2 é:'+ (num1 - num2) + <br/>)
        document.write('A multiplicação entre num1 e num2 é:'+ (num1 * num2) + <br/>)
        document.write('A divisão entre num1 e num2 é:'+ (num1 / num2) + <br/>)
        document.write('O módulo entre num1 e num2 é:'+ (num1 % num2) + <br/>)
        document.write('O incremento de num1 é:'+ (++num1) + <br/>)
        document.write('O decremento de num1 é:'+ (--num1) + <br/>)



