@extends('template.template')
@section('content')

    <body>

        <div class="m-auto mt-3" style="width: 1000px;">
            <div class="d-flex m-auto" style="width: 1000px;">
                <table class="table table-bordered" style="margin-top: 10px;">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Setor</th>
                            <th>Numero</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($ramals) > 0)
                            @foreach ($ramals as $ramal)
                                <tr>
                                    <td>{{ $ramal->id }}</td>
                                    <td>{{ $ramal->setor }}</td>
                                    <td>{{ $ramal->numero }}</td>
                                    <td><a href="{{ url('ramals/update/' . $ramal->id) }}"><button type="button"
                                                class="btn btn-primary">Editar</button></a>
                                        <a href="{{ url('ramals/destroy/' . $ramal->id) }}"><button type="button"
                                                class="btn btn-danger">Excluir</button></a>
                                    </td>
                                </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="5">Nenhum Ramal encontrado</td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
            <a href="{{ url('/ramals/create') }}"><button type="button" class="btn btn-warning">Cadastrar</button></a>
        </div>
    </body>
@endsection
