<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Alimente</title>

    <link rel="stylesheet" href="/css/adm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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

        <li>
            <a href="">
            <i class="bi bi-person-gear"></i>
            Perfil
            </a>
        </li>
    </ul>
</div>

<div class="feed-dash">
    <div class="row center ong-header">
        <div class="col-6"><h2>ONGs</h2></div>
        <div class="col-6"><span>0 ONGs cadastradas</span></div>
    </div>

    <div class="nav-pesquisa ong-search">
        <form action="">
            <div class="input-field">
                <input placeholder="Pesquisar..." id="search-ong" type="search">
                <i class="bi bi-search"></i>
            </div>
        </form>
    </div>

    <table class="ong-table">
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
                <td><i class="bi bi-person-circle"></i></td>
                <td>#{{$ong->idOng}}</td>
                <td>{{$ong->nomeOng}}</td>                    
                <td>{{$ong->emailOng}}</td>
                <td>{{$ong->nomeUsuarioOng}}</td>
                <td><a class="edit"><i class="bi bi-pencil-square"></i></a>
                    <a class="delete"><i class="bi bi-trash3-fill"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


</body>
</html>