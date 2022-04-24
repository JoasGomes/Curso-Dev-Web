
        //->> destructuring assignment
        //tira valores de dentro de uma estrutura
        
        //->> array
        let frutas = ['abacaxi','uva','pera','mamão']

        //os índices do array frutas serão atribuídos para a,b,c
        //se quiser pular algum é só deixar vazio
        //let [a,b, ,c] = frutas

        //se não houver uma posição indicada vc pode atribuir um valor pra ela
        let [a,b,c,d,e='banana'] = frutas

        console.log(a, b, c, d, e)

        //com arrays multidimensional
        let coisas = [['abacaxi','uva','pera','mamão'],['jose','maria']]
        let [,[,n2]] = coisas

        console.log(n2) 

        //->> objetos
        let produto = {
            descricao: 'notebook',
            preco: 1800,
            detalhes:{
                fabricante: 'abc',
                modelo:'xyz'
            }
        }

        //let {descricao,preco} = produto
        //console.log(descricao,preco)

        let {descricao: z,preco: p} = produto
        console.log(z,p)

        //desestruturação com rest
        let arr = [10, 20, 30, 40]

        let [ x,...resto] = arr

        console.log(x)
        console.log(resto)


