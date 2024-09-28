@extends('layout')
@section('content')



    <div class="container mt-5">
        <h2>Liste suas tarefas</h2>
        <form method="post" action="{{route('cadastra-evento')}}">
            @csrf
            <div class="form-group">
                <label for="nomeEvento">Nome do Evento</label>
                <input type="text" class="form-control" id="nomeEvento" name="nomeEvento" placeholder="Digite o nome do evento" required>
            </div>
            <div class="form-group">
                <label for="dataEvento">Data do Evento</label>
                <input type="date" class="form-control" id="dataEvento" name="dataEvento" required>
            </div>
            <div class="form-group">
                <label for="localEvento">Local do Evento</label>
                <input type="text" class="form-control" id="localEvento" name="localEvento" placeholder="Digite o local do evento" required>
            </div>
            <div class="form-group">
                <label for="imgEvento">Imagem do Evento (URL)</label>
                <input type="url" class="form-control" id="imgEvento" name="imgEvento" placeholder="Digite a URL da imagem" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Evento</button>
        </form>
    </div>


@endsection
