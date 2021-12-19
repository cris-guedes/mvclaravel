@extends('template.template')

@section('content')
    <header class="display-2 headerHome"> Lista De Clientes </header>
    <div class="homeArea">
        <a href="{{ url('/client/create') }}"><button type="button" class="btn btn-success">Cadastrar Cliente
                ➕</button></a>
        <table class="table table-dark table-hover table-bordered table-responsive">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Cep</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cpf</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Data Vencimento</th>
                    <th scope="col">Unidade Consumidora</th>
                    <th scope="col">Kwh</th>
                    <th scope="col">Valor Total</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                <tr scope="row">
                    <td>id </td>
                    <td>nome </td>
                    <td>endereco </td>
                    <td>cep </td>
                    <td>bairro </td>
                    <td>cpf </td>
                    <td>nascimento </td>
                    <td>data_vencimento </td>
                    <td>unidade_consumidora </td>
                    <td>kwh </td>
                    <td>valor_total ?></td>
                    <td>
                        <a href="#"><button type="button" class="btn btn-primary ">Editar</button></a>
                        <a href="#"><button type="button" class="btn btn-danger">Excluir</button></a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

@endsection
