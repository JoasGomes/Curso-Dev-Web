
        //software de marcenaria
        //cadeira e sofá

        //-->> paradigma procedural
        //cadeira
        /* let cadeiras = Array()

        cadeiras[0] = Array()
        cadeiras[0]['qtde_pernas'] = 1
        cadeiras[0]['giratoria'] = true
        cadeiras[0]['cor'] = 'azul'

        cadeiras[1] = Array()
        cadeiras[1]['qtde_pernas'] = 4
        cadeiras[1]['giratoria'] = false
        cadeiras[1]['cor'] = 'vermelha'


        function girarCadeira(indice){
            if(cadeiras[indice]['giratoria'] === true){
                console.log('a cadeira girou')
            }else{
                console.log('cadeira não é giratória')
            }
        }

        function adicionarCadeira(qtde_pernas,giratoria,cor){
            let cadeira = Array()

            cadeira['qtde_pernas'] = qtde_pernas
            cadeira['giratoria'] = giratoria
            cadeira['cor'] = cor

            cadeiras.push(cadeira)
        }
        adicionarCadeira(3,false,'verde')

        //girarCadeira(1)

        console.log(cadeiras) */

        //->> paradigma orientação a objetos
        class Cadeira{
            constructor(qtde_pernas,giratoria,cor){
                this.qtde_pernas = qtde_pernas
                this.giratoria = giratoria
                this.cor = cor
            }
            girarCadeira(){
                if(this.giratoria ===true){
                    console.log('girou')
                } else{
                    console.log('não é giratória')
                }
            }
        }
        let cadeira = new Cadeira(4, false, 'azul')
        let cadeira2 = new Cadeira(1, true, 'vermelha')
        cadeira.girarCadeira()


