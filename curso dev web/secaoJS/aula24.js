
        //paradigma de orientação a objetos
        //->> abstração

        /*
        1- entidade = obj real dentro da aplicação ex.: carro, sonho, contaBancaria
        2- identidade = identificar de forma unica cada obj da msm entidade ex.: new Carro()
        3- caracteríscticas = são atributos ex.: modelo, cor, marca
        4- ações = métodos ex.: ligar, acelerar, depositar
        */

        //modelo da entidade/objeto
        class ContaBancaria {
            //agencia
            //numeroConta
            //saldo
            //limite

            //características serão atribuídas
            constructor(){
                // this conecta o atributo ao contexto do obj
                this.agencia = 1075
                this.numeroConta = 8351125
                this.saldo = 50
                this.limite = 450
            }
            //ações serão atribuídas,são parecidas com funções mas não precisa do 'function'
            depositar(valorDeposito){
                this.saldo += valorDeposito
            }
            sacar(valorSaque){
                this.saldo = this.saldo - valorSaque
            }
            consultarSaldo(){
                return this.saldo
            }

        }
        //temos que criar uma identidade, se não ficará apenas na abstração

        //new = indica que eu quero transformar a class em um objeto real
        let x = new ContaBancaria()
        let y = new ContaBancaria()

        console.log(x.consultarSaldo())
        x.depositar(450)
        console.log(x.consultarSaldo())
        x.sacar(200)
        console.log(x.consultarSaldo())


