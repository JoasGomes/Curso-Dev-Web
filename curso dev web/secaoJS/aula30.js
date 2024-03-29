
        //->> notação de classe
        class Produto{
            constructor(descricao, preco){
                this.descricao = descricao
                this.preco = preco
            }

            verDescricao(){
                console.log(`${this.descricao} por apenas ${this.preco}`)
            }
        }

        let produto = new Produto('notebook', 2200)
        produto.verDescricao()

        //->> objeto literal / estático
        let produtoLiteral = {
            descricao:'geladeira',
            preco:1500,
            verDescricao:function(){
                console.log(`${this.descricao} por apenas ${this.preco}`)
            }
        }

        produtoLiteral.verDescricao()

        //------------------------------------------

        //quando usar objeto literal ?

        /* formulário -> servidor
            recupera dados e monta um objeto produtoLiteral
                obj literal -> JSON -> HTTP -> servidor -> armazena */



        let nome = 'jorge' // document.getElementId('nome').value
        let idade = 29
        let sexo = 'masculino'
        let profissao = 'programador'

        let objeto = {
            nome: nome,
            idade: idade,
            sexo: sexo,
            profissao: profissao,
            exibirResumo: function(){
                console.log(`${this.nome},${this.idade} anos,${this.sexo} é ${this.profissao}.`)
            },
        }

        //descrição geral do objeto
        console.log(objeto)
        //método
        objeto.exibirResumo()

        //->> melhorias
        let objeto2 = {
            nome, //nome = nome da variável / valor = valor da variável
            idade,
            sexo,
            profissao,
            exibirResumo(){
                console.log(`${this.nome},${this.idade} anos,${this.sexo} é ${this.profissao}.`)
            },
        }

        //descrição geral do objeto
        console.log(objeto2)
        //método
        objeto2.exibirResumo()


