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
                            <th>Categoria</th>
                            <th>Valor</th>
                            <th>Marca</th>
                            <th>Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->nome }}</td>
                                    <td>{{ $product->categoria }}</td>
                                    <td>{{ $product->valor }}</td>
                                    <td>{{ $product->marca }}</td>
                                    <td><a href="{{ url('products/update/' . $product->id) }}"><button type="button"
                                                class="btn btn-primary">Editar</button></a>
                                        <a href="{{ url('products/destroy/' . $product->id) }}"><button type="button"
                                                class="btn btn-danger">Excluir</button></a>
                                    </td>
                                </tr>
                            @endforeach

                        @else
                            <tr>
                                <td colspan="5">Nenhum produto encontrado</td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
            <a href="{{ url('/products/create') }}"><button type="button" class="btn btn-warning">Cadastrar</button></a>
        </div>
    </body>
@endsection
