
        //->> praticando um pouco - laços encadeados


        for(var y = 1; y <= 10; y++) {
            
            for(var x = 1; x <= 10; x++) {
                document.write(y + ' x ' + x + ' = ' + (y * x) + '<br/>')
            }
            document.write('<hr/>')
        }

        //->> laço for in = navegar por elementos do array com chaves não sequenciais

        var listaConvidados = ['jorge', 'jamilton', 'jose', 'ana', 'maria']

        for(var x in listaConvidados){
            console.log('indice' + x + 'valor' + listaConvidados[x])
        }


        //->> forEach

        var listaFuncionarios = ['viviane','rosangela','miguel','lucas','fernanda']

        console.log(listaFuncionarios)
        document.write(listaFuncionarios[3])

        listaFuncionarios.forEach(function(valor,indice,array){
            //lógica
            console.log('indice: ' + indice + ' | valor: ' + valor)

            if(valor == 'lucas'){
                array[indice] = 'um novo valor'
            }
        })
        
        console.log(listaFuncionarios)


