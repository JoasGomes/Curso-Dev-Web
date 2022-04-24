
        //->> funções factory

        //está sendo colocada de forma harcode
        //requisição http
        //resposta http
        let bicicleta1 = {
            cor: 'branca',
            marcha: 'única',
            aro: 12,
            pedalar(){
                console.log('método pedalar executado')
            }
        }

        let bicicleta2 = {
            cor: 'vermelha',
            marcha: '18',
            aro: 26,
            pedalar(){
                console.log('método pedalar executado')
            }
        }

        /* console.log(bicicleta1)
        console.log(bicicleta2) */

        // dar parâmetros para deixar resultados dinâmicos
        let bicicletaFactory= function(cor,marcha,aro){
            //lógica
            //requisição http
            //resposta http
            //retornará um objeto literal
            return{
                //hardcode
               /*  cor: 'branca',
                marcha: 'única',
                aro: 12,
                pedalar(){
                console.log('método pedalar executado')
                } */

                //forma dinâmica
                cor: cor,
                marcha: marcha,
                aro: aro,
                pedalar(){
                console.log('método pedalar executado')
                }
            }
        }

        //atribui a function factory 
        //cria um obj idêntico
        let bicicleta3 = bicicletaFactory('vermelha', '18', 26)
        console.log(bicicleta3)

        console.log(`cor: ${bicicleta3.cor}`)
        bicicleta3.pedalar()

        let bicicleta4 = bicicletaFactory('azul', '12', 20)
        console.log(bicicleta3)



