

@section('content')

    </style>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de ONGs - Admin</title>
    <style>
        /* CSS aqui */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1, h2 {
            color: #333;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        form {
            margin-bottom: 20px;
            background: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 15px;
            color: white;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background: white;
            padding: 10px;
            margin: 5px 0;
            border-radius: 4px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
    </style>
    </head>
        <body>
    @yield('content')
        </body>
    </html>



    <h1>Cadastro de ONGs - Admin</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <h2>Cadastrar Nova ONG</h2>
    <form action="{{ route('admin.ongs.store') }}" method="POST">
        @csrf
        <input type="text" name="cnpj" placeholder="CNPJ" required>
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="endereco" placeholder="Endereço" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Cadastrar</button>
    </form>

    

    <h2>Cadastros Pendentes</h2>
    <ul>
        @foreach($ongsPendentes = [] as $ong)
            <li>
                {{ $ong->nome }} - {{ $ong->cnpj }}
                <form action="{{ route('admin.ongs.authorize', $ong->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit">Autorizar</button>
                </form>
            </li>
        @endforeach
    </ul>

    <h2>Cadastros Autorizados</h2>
    <ul>
        @foreach($ongsAutorizadas = [] as $ong)
            <li>{{ $ong->nome }} - {{ $ong->cnpj }}</li>
        @endforeach
    </ul>
@endsection
