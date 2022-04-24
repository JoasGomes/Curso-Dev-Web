
        //->> template string = concatenação
        let nome = 'jorge'

        //jeito antigo de concatenação
        //console.log('oi' + nome + 'tudo bem ?')

        //nova forma no ES6
        console.log(`oi ${nome} tudo bem ?`)

        //podemos usar funções 
        function calcular(x, y) {
            return x * y
        }
        
        console.log(`a idade de Caio vezes a idade de Junior é de: ${calcular(10,12)}`)


        //->> funções - parâmetros
            // se a informação não for dada:    1                   2               3
        function contarHistoria(personagem = 'fubá', atividade = 'correr', dono = 'joás'){
            document.write(`era uma vez um cachorro chamado ${personagem}, ele adorava ${atividade},
            seu dono era o ${dono},e eles viveram felizes para sempre`)
        }
        //caso a informação for dadas ela será sobreposta pelos novos valores
        contarHistoria('repolho')

