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
        <form action="">
            <div class="input-field">
                <input placeholder="Pesquisar..." id="search" type="search">
                <i class="bi bi-search"></i>
            </div>
        </form>
       </div>

       <table>
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
                    <td><a><i class="bi bi-pencil-square"></i></a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{$doador->idDoador}}">       
                    <i class="bi bi-trash3-fill"></i>              
                    </a>
                    @include('doadores.delete', ['doador' => $doador])
                      
                  </tr>
            @endforeach
        </tbody>
       </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>