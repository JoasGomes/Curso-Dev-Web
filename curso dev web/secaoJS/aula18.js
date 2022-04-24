
        //trabalhando com parâmetros variáveis
        
        function soma(){
            var resultado = 0
            for(var i in arguments){
                resultado += arguments[i]
            }
            return resultado
        }

        console.log(soma(7, 5, 3.2, 0.8, 'texto'))

        //->> tratamento de erros com try,catch,throw e finally

        //->> try = tente
        //->> catch = pegar
        //->> finally = finalmente
        //->> throw = lançar
        
        
        //netflix
        var video = Array()
        
        video[1]['nome'] = 'fullmetal alchemist'
        video[1]['categoria'] = 'anime'

        function getVideo(video) {

            try{
                //lógica
                //http
                console.log(video[0]['nome'])
            } catch(erro){
                console.log(erro)
                console.log('agr sim podemos tratar esse erro')
                throw new Error('houve um erro mais não se preoucupe, estamos trabalhando nisso')
            } finally{
                console.log('sempre passa por aqui')
            }

            console.log('a aplicação nao morreu')
            
        }

        function tratarErro(e){
            //lógica para tratar erro no servidor
            console.log(e)
        }
        getVideo(video)

