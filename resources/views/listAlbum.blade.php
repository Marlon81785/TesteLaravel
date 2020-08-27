@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Lista de Albuns </div>

                <div class="panel-body">
                    <table class="table" id="dataTable">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Lançamento</th>
                            <th>Artista</th>
                            <th>Faixas</th>
                        </tr>
                        
                    </table>
                    <button class="btn btn-block btn-primary" onclick="goBack()">Voltar</button>            

                </div>

                
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/axios.min.js') }}"></script>
<script>

    function goBack(){
        window.location = "http://localhost:8000/home";
    }

    
    async function returnJSON()
    {
        const response = await axios.get('http://127.0.0.1:8000/api/albun')
        .then(function(res){
            for(var i = 0;i<=res.data.length;i++){
                document.getElementById('dataTable').innerHTML += "<tr>"
                document.getElementById('dataTable').innerHTML += "<td>"+res.data[i].id+"</td><td>"+res.data[i].nome+"</td><td>"+res.data[i].lancamento+"</td><td>"+res.data[i].artista+"</td><td>"+res.data[i].faixas+"</td>"
                document.getElementById('dataTable').innerHTML += "</td>"
                
            }
            console.log(res.data.length)
                
        return res.data
        })
    }
    var a = returnJSON()
</script>
@endsection


