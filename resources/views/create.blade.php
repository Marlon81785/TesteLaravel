@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Musica</div>

                <div class="panel-body">
                    <form action="">
                    <label for="Ordem">Nome</label>
                        <input id="nome" class="form-control" type="text">
                    </form>

                    <label for="duracao">Duração</label>
                        <input id="duracao" class="form-control" type="time">
                    </form> 

                    <label for="Albun">Albun</label>
                        <input id="Albun" class="form-control" type="text">
                    </form>

                    <label for="Ordem">Ordem</label>
                        <input id="Ordem" class="form-control" type="text">
                    </form>

                    <hr>

                    <button onclick="createAlbum()" class="btn btn-block btn-primary">Create Album</button>  
                    <button onclick="voltarAlbum()" class="btn btn-block btn-primary">Voltar</button>          

                </div>

                
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/axios.min.js') }}"></script>
<script>

    function voltarAlbum(){
        window.location = "http://localhost:8000/home";
    }

    async function makePostFaixa(nome, duracao, Albun, Ordem) {

        params = {
            nome: nome,
            duracao: duracao,
            albun: Albun,
            ordem: Ordem,
        }

        let res = await axios.post('http://localhost:8000/api/faixa', params);

        console.log(res.data);
        alert("Cadastrado com sucesso")
        window.location = "http://localhost:8000/create";
    }

    function createAlbum(){
        const nome = document.getElementById('nome').value
        const duracao = document.getElementById('duracao').value
        const Albun = document.getElementById('Albun').value
        const Ordem = document.getElementById('Ordem').value
        console.log(nome)
        console.log(duracao)
        console.log(Albun)
        console.log(Ordem)
        makePostFaixa(nome, duracao, Albun, Ordem)

        
        
    }


    
    async function returnJSON()
    {
        const response = await axios.get('http://127.0.0.1:8000/api/faixa')
        return console.log(response.data)
    }
    returnJSON()
</script>
@endsection


