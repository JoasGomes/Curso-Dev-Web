
        //->> rest/spread
        
        //spread = espalhar

        //string
        let tituloArtigo = 'como utilizar o operador spread'

        console.log(tituloArtigo)
        console.log(...tituloArtigo)
        console.log([...tituloArtigo])

        //arrays
        let listaCursos1 = ['nodeJS e mongoDB','ES6,typeScript e angular 4']
        let listaCursos2 = ['multiplataforma android/IOS','intrudução ao GNU/linux']
        let listaCursosCompleto = ['web completo','android completo',...listaCursos1,...listaCursos2]

        console.log(listaCursosCompleto)

        //objetos
        let pessoa = {
            nome:'joão',
            idade: 27
        }
        let clone = {
            endereco: 'rua abc', 
            ...pessoa
        }

        console.log(clone)

        //rest = juntar

        //vai pegar todos os parâmetros e juntar em forma dde array
        function soma(...param){
            let resultado = 0

            console.log(param)
            param.forEach(v => resultado += v)
            return resultado
        }
        console.log(soma(3, 7, 5, 2))

        function multiplicacao (m,...p){
            //console.log(m)
            //console.log(p)
            let resultado = 0

            p.forEach(v => resultado += m * v)
            return resultado

        }
        //vai pegar o primeiro parâmetro e jogar no 'm' e o resto vai no array 'p'
        multiplicacao(5,7,12,3,49)


