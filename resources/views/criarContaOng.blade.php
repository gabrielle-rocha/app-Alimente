<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Alimente</title>
    
    <!--css-->
    <link rel="stylesheet" href="/css/criarContaOng.css">

    <!--js-->
    <script src="/js/criarContaOng.js"></script>
    
    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
</head>
<body>
     <!--gradiente-->
     <div class="grad">
        <img src="/img/alimente.png" alt="">
        <img src="/img/slogan-alimente-cinza.png" alt="">
    </div>

    <div class="container">

    <div class="formulario">
        <form method="GET" action="/configPerfilOng">
            <h3>Criar Conta</h3>
            <label for="">Email:</label>
            <input type="text" placeholder="Ex:juanpf12@gmail.com">

            <label for="">Senha:</label>
            <input type="password" placeholder="Crie uma senha">

            <label for="">Confirmar Senha:</label>
            <input type="password" placeholder="Repita a senha">

            <a class="button" href="/configPerfilOng">Próximo</a>
        </form>
    </div>

    </div>
</body>
</html>