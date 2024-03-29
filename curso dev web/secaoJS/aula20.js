
        //3 escopos(abrir e fechar de chaves): global, função e bloco
        
        //var estará em todos os níveis de escopo
        var serie = 'friends'

        function x(){

            //uma nova var interromperá a aplicação da var de fora
            var serie = 'game of thrones'
            console.log('função:' + serie)

            if(true){
                console.log('bloco dentro da função:' + serie)
            }
        }

        x()

        if(true){
            //o global preservará a var global 'friends'
            console.log('global:' + serie)
        }

        //o let preserva o escopo em que ela foi criada
        /* if(true){
            let filme = 'intocáveis'
        }

         //dará um erro pois foi chama fora do escopo
        console.log(filme) */


        //potencial origem de bugs que o let soluciona
        var carro = 'porsche'

        {
            var carro = 'dodge'
            console.log('dentro do bloco:' + carro)
        }
        // também será dodge
        console.log('fora do bloco:' + carro)

        //com let isso não ocorre
        let moto = 'mt-09'

        {
            let moto = 'z900'
            console.log('dentro do bloco:' + moto)
        }
        // também será dodge
        console.log('fora do bloco:' + moto)


        //const = cria uma constante que não pode ter alteração de valor.
        const marca = 'adidas'

        //acontece um erro, não se pode mudar valor de uma constante
        marca = 'nike'
        console.log(marca)
