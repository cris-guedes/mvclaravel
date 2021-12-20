@extends('template.template')
@section('content')


    <body>
        <div class="container mt-3">
            <form class="row g-3" action="{{ url('/products/updateAction') }}" method="post">
                @csrf
                <div class="col-md-4">
                    <label for="input-nome" class="form-label">Nome</label>
                    <input type="text" value="{{ $product->nome }}" name="nome" class="form-control" id="input-nome"
                        required>
                </div>

                <div class="col-md-4">
                    <label for="input-categoria" class="form-label">Categoria</label>
                    <input type="text" value="{{ $product->categoria }}" name="categoria" class="form-control"
                        id="input-categoria" required>
                </div>

                <div class="col-4">
                    <label for="input-valor" class="form-label">Valor</label>
                    <input type="number" value="{{ $product->valor }}" name="valor" class="form-control"
                        id="input-valor" required>
                </div>

                <div class="col-6">
                    <label for="input-marca" class="form-label">Marca</label>
                    <input type="text" value="{{ $product->marca }}" name="marca" class="form-control" id="input-marca"
                        required>
                </div>
                <input type="hidden" value="{{ $product->id }}" name="id" />

                <div class="col-12">
                    <button type="submit" value="Submit" class="btn btn-warning">Alterar Produto</button>
                </div>
            </form>
        </div>
    </body>
@endsection
