
        //new Date = um novo objeto de data é atribuído a uma variável
        var data = new Date()

        //getDate = imprimir um dia de forma dinâmica com base no sistema operacional
        document.write(data.getDate())

        document.write('<br/>')

        //getMonth = imprimir um mês com base no sistema operacional 
        //mas acrescentando +1 (pois a contagem se inicia no 0)
        document.write(data.getMonth() + 1)

        document.write('<br/>')

        //getFullYear = imprimir o ano de forma dinâmica com base no sistema operacional
        document.write(data.getFullYear())

        document.write('<br/>')

        document.write(data.getDate() + '/' + data.getMonth() + '/' + data.getFullYear())

        
        document.write('<br/>')

        //getTime = imprimir os milissegundos de 1 de janeiro de 1970 até a data atual
        document.write(data.getDate())

        document.write('<br/>')
        /*
        
        métodos get são usados para recuperar dados
        já os métodos set são feitos para setar(definir) dados
        
        */

        //adicionar / remover dias
        document.write(data.toString())
        data.setDate(data.getDate() + 30)
        document.write('<br/>')
        document.write(data.toString())
        document.write('<br/><hr/>')

        //adicionar / remover mês
        document.write(data.toString())
        data.setMonth(data.getMonth() + 1)
        document.write('<br/>')
        document.write(data.toString())
        document.write('<br/><hr/>')

        //adicionar / remover anos
        document.write(data.toString())
        data.setFullYear(data.getFullYear() + 1)
        document.write('<br/>')
        document.write(data.toString())
        document.write('<br/><hr/>')

