
        //paradigma de orientação a objetos
        //->> polimorfismo

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

        class Avestruz extends Passaro{
            constructor(){
                super('grande','branco e preto',250,15000)
            }

            enterrarCabeca(){
                console.log('enterrar a cabeça')
            }

            //já que o avestruz não sabe voar,terá o recurso de polimorfismo
            //sobrescrever o metodo do obj pai no obj filho caracteriza o filho com polimorfismo
            voar(){
                console.log('nao sabe voar')
            }
        }

        let papagaio = new Papagaio(true,'verde',25,350)
        console.log(papagaio)

        let avestruz = new Avestruz()



