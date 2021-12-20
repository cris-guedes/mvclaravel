@extends('template.template')
@section('content')

    <body>
        <div class="container mt-3">
            <form class="row g-3" action="{{ url('/ramals/updateAction') }}" method="post">
                @csrf
                <div class="col-md-4">
                    <label for="input-setor" class="form-label">Setor</label>
                    <input type="text" value="{{ $ramal->setor }}" name="setor" class="form-control" id="input-setor"
                        required>
                </div>

                <div class="col-md-4">
                    <label for="input-numero" class="form-label">Numero</label>
                    <input type="text" value="{{ $ramal->numero }}" name="numero" class="form-control" id="input-numero"
                        required>
                </div>

                <input type="hidden" value="{{ $ramal->id }}" name="id">

                <div class="col-12">
                    <button type="submit" value="Submit" class="btn btn-warning"> Alterar Ramal</button>
                </div>
            </form>
        </div>
    </body>
@endsection
