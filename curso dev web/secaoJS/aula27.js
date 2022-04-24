
        //paradigma de orientação a objetos
        //->> herança

        //animal vai passar sua herança para o cachorro e passaro
        class Animal {
            constructor(){
                this.cor = ''
                this.tamanho = null
            }

            dormir(){
                console.log('dormir')
            }
        }

        // indicaremos para a class herdar a herança com 'extends' 
        class Cachorro extends Animal {
            constructor(){
                super()
                //this.cor = 'branco e marrom'
                //this.tamanho = 30
                this.orelhas = 'grandes e caidas'
            }

            correr(){
                console.log('correr')
            }

           /*  dormir(){
                console.log('dormir')
            } */

            rosnar(){
                console.log('rosnar')
            }
        }

        class Passaro extends Animal {
            constructor(){
                super()
                //this.cor = 'branco e marrom'
                //this.tamanho = 10
                this.bico = 'curto'
            }

            voar(){
                console.log('voar')
            }
            
           /*  dormir(){
                console.log('dormir')
            } */

        }

        // papagaio vai pegar atributos do Passaro e do Animal juntos
        class Papagaio extends Passaro {
            constructor(){
                super()
                this.sabeFalar = true
            }

            falar(){
                console.log('falar')
            }
        }

        let cachorro = new Cachorro()
        let passaro = new Passaro()
        let papagaio = new Papagaio()

        console.log(cachorro)
        console.log(passaro)
        console.log(papagaio)



