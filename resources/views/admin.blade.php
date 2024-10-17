

@section('content')
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
