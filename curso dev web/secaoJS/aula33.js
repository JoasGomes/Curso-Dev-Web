
        //->> prototype
        //todos os obejetos em javascript descendem de obeject

        //objeto literal
        let a1 ={
            cor: 'branco',
            modelo: 'airbus a380',
            levantarVoo: function(){
                console.log('levantar voo')
            }

        }

        //função construtora
        let AviaoF = function(){
            this.cor = 'azul',
            this.modelo = 'boeing 787',
            this.levantarVoo = function(){
                console.log('levantar voo')
            }
        }
        let a2 = new AviaoF()

        //classe
        class AviaoC{
            constructor(){
                this.cor = 'vermelho',
                this.modelo = 'embraer e-jets'
            }
            levantarVoo(){
                console.log('levantar voo')
            }
        }
        let a3 = new AviaoC()

        console.log(a1)
        console.log(a2)
        console.log(a3)

        //todos são filhos de object.prototype
        let animal = {atributo1:'a'}
        //cria a ligação de herança com '__proto__:'
        let vertebrado = {__proto__: animal,atributo2:'b'}
        let ave = {__proto__: vertebrado,atributo3:'c'}

        console.log(ave.atributo2,ave.atributo1)


