@extends('template.template')
@section('content')

    <body>

        <div class="m-auto mt-3" style="width: 1000px;">
            <div class="d-flex m-auto" style="width: 1000px;">
                <table class="table table-bordered" style="margin-top: 10px;">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>CPF</th>
                            <th>Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($clients) > 0)
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->nome }}</td>
                                    <td>{{ $client->telefone }}</td>
                                    <td>{{ $client->cpf }}</td>
                                    <td><a href="{{ url('clients/update/' . $client->id) }}"><button type="button"
                                                class="btn btn-primary">Editar</button></a>
                                        <a href="{{ url('clients/destroy/' . $client->id) }}"><button type="button"
                                                class="btn btn-danger">Excluir</button></a>
                                    </td>
                                </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="5">Nenhum cliente encontrado</td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
            <a href="{{ url('/clients/create') }}"><button type="button" class="btn btn-warning">Cadastrar</button></a>
        </div>
    </body>

@endsection
