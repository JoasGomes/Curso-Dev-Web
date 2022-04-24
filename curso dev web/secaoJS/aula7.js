
        //funções anônimas

        /*
        funções anônimas para serem chamadas precisam ser atribuídas 
        a uma variável.
        */
        var exibirSaudacao = function(nome){
            document.write('olá '+ nome+',tudo bem ?')
        }
        exibirSaudacao('jorge')

        //funções de callback
        function exibirArtigo(id,callbackSucesso,callbackErro){
            if (true){
                callbackSucesso('funções de callback em js','funções de callback são muito usadas')
            }else{
                callbackErro('erro ao recuperar os dados')
            }
        }

        var callbackSucesso = function(titulo,descricao){
            document.write('<h1>' + titulo + '</h1>')
            document.write('<hr/>')
            document.write('<p>' + descricao + '<p>')
        }
        var callbackErro = function(erro){
            document.write('<p><b>Erro:</b>' + erro + '<p>')
        }

        exibirArtigo(1,callbackSucesso,callbackErro)


