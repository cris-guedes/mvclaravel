@extends('template.template')
@section('content')

    <body>
        <div class="container mt-3">
            <form class="row g-3" action="{{ url('/ramals/createAction') }}" method="post">
                @csrf
                <div class="col-md-4">
                    <label for="input-setor" class="form-label">Setor</label>
                    <input type="text" name="setor" class="form-control" id="input-setor" required>
                </div>

                <div class="col-md-4">
                    <label for="input-numero" class="form-label">Numero</label>
                    <input type="text" name="numero" class="form-control" id="input-numero" required>
                </div>



                <div class="col-12">
                    <button type="submit" value="Submit" class="btn btn-warning">Cadastrar Ramal</button>
                </div>
            </form>
        </div>
    </body>
@endsection
