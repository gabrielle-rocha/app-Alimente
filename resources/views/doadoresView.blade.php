<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Alimente</title>

    <link rel="stylesheet" href="/css/adm.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!--Fonte-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
</head>
<body>
<div class="sidebar">
    <header>
        <img src="/img/fotoAdm.png" alt="">
    </header>

    <ul>
    <li>
            <a href="{{ route('admin.dashboard') }}">
            <i class="bi bi-columns-gap"></i>
            Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('admin.doadores') }}">
            <i class="bi bi-person"></i>
            Doadores
            </a>
        </li>

        <li>
            <a href="{{route('admin.ongs')}}">
            <i class="bi bi-people"></i>
            Ongs
            </a>
        </li>

    </ul>
</div>

    <div class="feed-dash">
        <div class="row center">
            <div class="col-6"><h2>Doadores</h2></div>
            <div class="col-6"> <span>{{$doadores->count()}} doadores cadastrados</span></div>
        </div>

        <div class="nav-pesquisa">
    <form action="" method="GET">
        <div class="input-field">
            <input placeholder="Pesquisar..." id="search" name="search" type="search">
            <i class="bi bi-search"></i>
        </div>
    </form>
</div>



<table id="doadores-table">
    <thead>
        <tr>
            <th></th>
            <th>Id</th>  
            <th>Doador</th>
            <th>Email</th>
            <th>Nome de Usuário</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($doadores as $doador)
            <tr>
                <td><i class="bi bi-person"></i></td>
                <td>#{{$doador->idDoador}}</td>
                <td>{{$doador->nomeDoador}}</td>                    
                <td>{{$doador->emailDoador}}</td>
                <td>{{$doador->nomeUsuarioDoador}}</td>
                <td>
                    <a><i class="bi bi-pencil-square"></i></a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{$doador->idDoador}}">
                        <i class="bi bi-trash3-fill"></i>
                    </a>
                    @include('doadores.delete', ['doador' => $doador])
                </td>
            </tr>
        @endforeach
        @if(count($doadores) == 0 && $search)
            <tr><td colspan="6">Não foi possível encontrar nenhum doador com o nome '{{$search}}'!</td></tr>
        @elseif(count($doadores) == 0)
            <tr><td colspan="6">Doador não encontrado</td></tr>
        @endif
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            let query = $(this).val();

            $.ajax({
                url: "{{ route('doadores.search') }}",
                method: "GET",
                data: { query: query },
                success: function(data) {
                    let tbody = '';
                    if(data.length) {
                        data.forEach(function(doador) {
                            tbody += `<tr>
                                <td><i class="bi bi-person"></i></td>
                                <td>#${doador.idDoador}</td>
                                <td>${doador.nomeDoador}</td>
                                <td>${doador.emailDoador}</td>
                                <td>${doador.nomeUsuarioDoador}</td>
                                <td>
                                    <a><i class="bi bi-pencil-square"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal${doador.idDoador}">       
                                    <i class="bi bi-trash3-fill"></i>              
                                    </a>
                                    @include('doadores.delete', ['doador' => 'doador'])
                                </td>
                            </tr>`;
                        });
                    } else {
                        tbody = '<tr><td colspan="6">Nenhum doador encontrado.</td></tr>';
                    }
                    $('#doadores-table tbody').html(tbody);
                }
            });
        });
    });
</script>

</body>
</html>