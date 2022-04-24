
        //->> super

        //forma para deixar o código mais dinâmico com relação aos valores
        class Animal {
            constructor(cor,tamanho,peso){
                this.cor = cor
                this.tamanho = tamanho
                this.peso = peso
            }

            dormir(){
                console.log('dormir')
            }
        }

        class Passaro extends Animal {
            constructor(bico,cor,tamanho,peso){
                super(cor,tamanho,peso)
                this.bico = bico
            }

            voar(){
                console.log('voar')
            }

        }

        class Papagaio extends Passaro {
            constructor(sabeFalar,cor,tamanho,peso){
                super('médio',cor,tamanho,peso)
                this.sabeFalar = sabeFalar
            }

            falar(){
                console.log('falar')
            }
        }

        let papagaio = new Papagaio(true,'verde',25,350)
        console.log(papagaio)

        let papagaio2 = new Papagaio(false,'azul',10,80)
        console.log(papagaio2)


