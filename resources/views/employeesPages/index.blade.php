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
                            <th>Cargo</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if (count($employees) > 0)
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->nome }}</td>
                                    <td>{{ $employee->telefone }}</td>
                                    <td>{{ $employee->cpf }}</td>
                                    <td>{{ $employee->cargo }}</td>
                                    <td><a href="{{ url('employees/update/' . $employee->id) }}"><button type="button"
                                                class="btn btn-primary">Editar</button></a>
                                        <a href="{{ url('employees/destroy/' . $employee->id) }}"><button type="button"
                                                class="btn btn-danger">Excluir</button></a>
                                    </td>
                                </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="5">Nenhum funcionário encontrado</td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
            <a href="{{ url('/employees/create') }}"><button type="button" class="btn btn-warning">Cadastrar</button></a>
        </div>
    </body>
@endsection
