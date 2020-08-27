@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bem-vindo a sua biblioteca de musicas!
                </div>

                <div class="panel-body">
                <button class="btn btn-block btn-primary"
                    onclick="cadastrarMusicas()"
                    >Cadastrar Musicas</button>

                    <button class="btn btn-block btn-primary"
                    onclick="cadastrarAlbum()"
                    >Cadastrar Album</button>

                    <button class="btn btn-block btn-primary"
                    onclick="listMusics()"
                    >Listar Musicas</button>

                    <button class="btn btn-block btn-primary"
                    onclick="listAlbums()"
                    >Listar Albums</button>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    function cadastrarAlbum(){
        window.location = "http://localhost:8000/createAlbum";
    }

    function listAlbums(){
        window.location = "http://localhost:8000/listAlbum";
    }
    function cadastrarMusicas(){
        window.location = "http://localhost:8000/create";
        
    }

    function listMusics(){
        window.location = "http://localhost:8000/listFaixa";
    }
</script>
<script src="{{ asset('js/axios.min.js') }}"></script>
@endsection
