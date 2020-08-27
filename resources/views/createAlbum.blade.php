@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Album</div>

                <div class="panel-body">
                    <form action="">
                    <label for="nome">Nome</label>
                        <input id="nome" class="form-control" type="text">
                    </form>

                    <label for="lancamento">Lançamento</label>
                        <input id="lancamento" class="form-control" type="date">
                    </form> 

                    <label for="artista">Artista</label>
                        <input id="artista" class="form-control" type="text">
                    </form>

                    <label for="faixas">Faixas</label>
                        <input id="faixa" class="form-control" type="text">
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

    async function makePostFaixa(nome, lancamento, artista, faixas) {

        params = {
            nome: nome,
            lancamento: lancamento,
            artista: artista,
            faixas: faixas,
        }

        let res = await axios.post('http://localhost:8000/api/albun', params);

        console.log(res.data);
        alert("Cadastrado com sucesso")
        window.location = "http://localhost:8000/createAlbum";
    }

    function createAlbum(){
        const nome = document.getElementById('nome').value
        const lancamento = document.getElementById('lancamento').value
        const artista = document.getElementById('artista').value
        const faixas = document.getElementById('faixa').value
        console.log(nome)
        console.log(lancamento)
        console.log(artista)
        console.log(faixas)
        makePostFaixa(nome, lancamento, artista, faixas)

        
        
    }

</script>
@endsection


