<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar | Alimente</title>

    <link rel="stylesheet" href="/css/autenticacao.css">

<!--icon-->
<link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

<!--Fonte-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
</head>
<body>
    <div class="container">

    <form action="" method="POST">
    @csrf
    <h3>Recuperação de senha</h3>

    <label for="email">Digite um email:</label>
    <input type="email" name="email">
    <button type="submit" class="enviar">Enviar</button>

    </form>

    </div>

</body>
</html>