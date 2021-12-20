@extends('template.template')
@section('content')

    <body>
        <div class="container mt-3">
            <form class="row g-3" action="{{ url('/clients/updateAction') }}" method="post">
                @csrf
                <div class="col-md-4">
                    <label for="input-nome" class="form-label">Nome</label>
                    <input type="text" value="{{ $client->nome }}" name="nome" class="form-control" id="input-nome"
                        required>
                </div>

                <div class="col-md-4">
                    <label for="input-telefone" class="form-label">Telefone</label>
                    <input type="text" value="{{ $client->telefone }}" name="telefone" class="form-control"
                        id="input-telefone" required>
                </div>

                <div class="col-4">
                    <label for="input-cpf" class="form-label">CPF</label>
                    <input type="text" value="{{ $client->cpf }}" name="cpf" class="form-control" id="input-cpf"
                        required>
                </div>
                <input type="hidden" name="id" value="{{ $client->id }}">

                <div class="col-12">
                    <button type="submit" value="Submit" class="btn btn-warning">Cadastrar Cliente</button>
                </div>
            </form>
        </div>
    </body>
@endsection
