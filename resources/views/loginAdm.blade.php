<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Alimente</title>

    <link rel="stylesheet" href="/css/loginAdm.css">

<!--icon-->
<link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

<!--Fonte-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
</head>
    <body>
            <div class="container">
            @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
                <h3>Olá, Administrador!</h3>
                <label for="">Email:</label>
                <input type="email" name="email" id="email">

                <label for="">Senha:</label>
                <input type="password" name="password" id="password">

                <input type="submit" class="button" value="Entrar">

                
            </form>
        </div>
    </body>
</html>