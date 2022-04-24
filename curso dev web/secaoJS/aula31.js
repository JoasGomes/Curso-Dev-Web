
        //->> funções construtoras

        let Carro = function(){
            this.cor = 'amarelo'
            this.modelo = 'chevette'
            this.velocidadeAtual = 0
            this.velocidadeMaxima = 100

            this.acelerar = function(){
                //this.velocidadeAtual += 10

                let velocidade = this.getVelocidadeAtual() + 10
                this.setVelocidadeAtual(velocidade)
            }

            this.getVelocidadeAtual = function(){
                return this.velocidadeAtual
            }
            this.setVelocidadeAtual = function(velocidadeAtual){
                return this.velocidadeAtual = velocidadeAtual
            }
        }

        let carro = new Carro()

        carro.getVelocidadeAtual() 

        //dando nível de segurança para velocidade máxima
        let Carro2 = function(){

            var velocidadeMaxima = 180

            this.cor = 'amarelo'
            this.modelo = 'chevette'
            this.velocidadeAtual = 0

            this.acelerar = function(){
                //this.velocidadeAtual += 10

                let velocidade = this.getVelocidadeAtual() + 50
                if(velocidade > velocidadeMaxima){
                    velocidade = velocidadeMaxima
                }
                this.setVelocidadeAtual(velocidade)
            }

            this.getVelocidadeAtual = function(){
                return this.velocidadeAtual
            }
            this.setVelocidadeAtual = function(velocidadeAtual){
                return this.velocidadeAtual = velocidadeAtual
            }
        }

        let carro2 = new Carro2()
        console.log(carro2.velocidadeAtual)
        carro2.acelerar()
        console.log(carro2.velocidadeAtual)
        carro2.acelerar()
        console.log(carro2.velocidadeAtual)
        carro2.acelerar()
        console.log(carro2.velocidadeAtual)
        carro2.acelerar()
        console.log(carro2.velocidadeAtual)
        carro2.acelerar()
        console.log(carro2.velocidadeAtual)

        console.log(carro)
        console.log(carro2)



