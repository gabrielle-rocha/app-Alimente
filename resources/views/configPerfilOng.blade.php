<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Alimente</title>
    
    <!--css-->
    <link rel="stylesheet" href="/css/configPerfilOng.css">
    
    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
            <form method="GET" action="/">
                <h3>Perfil</h3>

                <label for="">Adicione uma foto:</label>
                <div class="imgPerfil box">
                    <img src="" alt="" id="img-preview" class="w-100 h-100">
                    <i class="bi bi-person-fill-add"></i>
                    <input id="img-field" type="file">
                </div>

                <label for="">Nome de usuário:</label>
                <input type="text" placeholder="Ex: amigos_do_bem.07" required>

                <label for="">Bio:</label>
                <textarea name="" id="" placeholder="Ex: objetivo, data de fundação, número de auxiliados e etc..."></textarea>

                <a href="/analiseOng" class="button">Concluir</a>
            </form>
        </div>
    </div>

    <!--js-->
    <script src="/js/configPerfilOng.js"></script>
</body>
</html>