
        //paradigma de orientação a objetos
        //->> encapsulamento

        class Tv {
            constructor(){
                //os termos ultilizados ainda não são suportados pelo js ex.: private
                //dessa forma demonstra pro programador que ele não acesse pois é privado
                this._relacaoCanais = Array(2, 4, 5, 7, 10)
                this._canalAtivo = 5
                this._volume = 5
            }

            //getters setters
            //metodos para serem acesso por uma pseudo variável para questões de segurança
            get canalAtivo(){
                return this._canalAtivo
            }

            set canalAtivo(canal){
                this._canalAtivo = canal
            }
        }

        let tv = new Tv()

        tv.canalAtivo = 7
        console.log(tv.canalAtivo)

