<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD|PHP</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mb-0" href="{{ url('/') }}">
                <img src="https://img.icons8.com/external-sbts2018-solid-sbts2018/58/000000/external-product-design-thinking2-sbts2018-solid-sbts2018.png"
                    alt="" width="40" height="40" class="d-inline-block">
                CRUD Moveis
            </a>

            <div class="collapse navbar-collapse" id="nav-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="{{ url('/') }}" class="nav-link active">
                            Home
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('/clients') }}" class="nav-link active">
                            Clientes
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('/employees') }}" class="nav-link active">
                            Funcionários
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('/products') }}" class="nav-link active">
                            Produtos
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('/ramals') }}" class="nav-link active">
                            Ramais
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    @yield('content')

</body>
