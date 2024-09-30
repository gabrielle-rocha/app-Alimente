<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Alimente</title>
    <link rel="stylesheet" href="/css/adm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
        <li><a href="{{ route('admin.dashboard') }}"><i class="bi bi-columns-gap"></i> Dashboard</a></li>
        <li><a href="{{ route('admin.doadores') }}"><i class="bi bi-person"></i> Doadores</a></li>
        <li><a href="{{ route('admin.ongs') }}"><i class="bi bi-people"></i> Ongs</a></li>
    </ul>
</div>

<div class="feed-dash">
    <div class="row center ong-header">
        <div class="col-6"><h2>Ongs</h2></div>
        <div class="col-6"><span>{{$ongs->count()}} Ongs cadastradas</span></div>
    </div>

    <div class="nav-pesquisa ong-search">
        <form action="">
            <div class="input-field">
                <input placeholder="Pesquisar..." id="search-ong" class="search-ong" type="search">
                <i class="bi bi-search"></i>
            </div>
        </form>
    </div>

    <table id="ongs-table" class="ongs-table">
        <thead>
        <tr>
            <th></th>
            <th>Id</th>  
            <th>Ong</th>
            <th>Email</th>
            <th>Nome de Usuário</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($ongs as $ong)
            <tr>
                <td><i class="bi bi-people"></i></td>
                <td>#{{$ong->idOng}}</td>
                <td>{{$ong->nomeOng}}</td>                    
                <td>{{$ong->emailOng}}</td>
                <td>{{$ong->nomeUsuarioOng}}</td>
                <td>
                    <a class="edit"><i class="bi bi-check-circle-fill"></i></a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{$ong->idOng}}">       
                    <i class="bi bi-ban"></i>             
                    </a>
                    @include('ongs.delete', ['ong' => $ong])
                </td>
            </tr>
            @endforeach
            @if(count($ongs) == 0 && $search)
                <tr><td colspan="6">Não foi possível encontrar nenhuma ONG com o nome '{{$search}}'!</td></tr>
            @elseif(count($ongs) == 0)
                <tr><td colspan="6">ONG não encontrada</td></tr>
            @endif
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search-ong').on('keyup', function() {
            let query = $(this).val();

            $.ajax({
                url: "{{ route('ongs.search') }}",
                method: "GET",
                data: { query: query },
                success: function(data) {
                    let tbody = '';
                    if(data.length) {
                        data.forEach(function(ong) {
                            tbody += `<tr>
                                <td><i class="bi bi-people"></i></td>
                                <td>#${ong.idOng}</td>
                                <td>${ong.nomeOng}</td>
                                <td>${ong.emailOng}</td>
                                <td>${ong.nomeUsuarioOng}</td>
                                <td>
                                    <a class="edit"><i class="bi bi-pencil-square"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal${ong.idOng}">       
                                    <i class="bi bi-trash3-fill"></i>              
                                    </a>
                                    @include('ongs.delete', ['ong' => 'ong'])
                                </td>
                            </tr>`;
                        });
                    } else {
                        tbody = '<tr><td colspan="6">Nenhuma ONG encontrada.</td></tr>';
                    }
                    $('#ongs-table tbody').html(tbody);
                }
            });
        });
    });
</script>
</body>
</html>
