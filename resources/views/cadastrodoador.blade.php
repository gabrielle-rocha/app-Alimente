<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Alimente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Quicksand', sans-serif;
        }
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: row;
            background-color: #fdfcfcc5;
        }
        .left-section, .right-section {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .left-section {
            background-color: #fdfcfcc5;
        }
        .right-section {
            background-color: rgba(46, 139, 87, 1);
            border-top-left-radius: 15%;
            border-bottom-left-radius: 15%;
            margin-left: 20px;
            /*transition: transform 0.4s ease-in-out; /* Transição suave */
        }

       /* .right-section.move-left {
            transform: translateX(-60%); /* Move a seção para fora da tela 
        }*/

         h3 {
            text-align: center;
            font-weight: 600;
            font-size: 1.3em;
        }

        .login-card {
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 1rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-btn {
            background: rgba(46, 139, 87, 1);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .login-btn:hover {
            background: rgba(46, 139, 87, 0.6);
            color: white;
        }

        form input::placeholder {
            color: #aaa;
        }

        form label {
        margin-bottom: 5px;
        font-weight: 600;
        }

       form input, form select {
            margin-bottom: 8px;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1rem;
            width: 100%;
        }

        form select {
            width: 100%;
        }

        .right-section img {
            max-width: 80%;
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>
<body>
    <div class="left-section">
        <div class="login-card">
            <h3 class="text-center mb-4">Preencha os Campos:</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('doador.store') }}" method="POST">
            @csrf
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="nomeDoador" id="nomeDoador" placeholder="Digite seu nome" >
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">email:</label>
                        <input type="email" class="form-control" name="emailDoador" id="emailDoador" placeholder="Insira um email" >
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Senha:</label>
                        <input type="password" class="form-control" name="senhaDoador" id="senhaDoador" placeholder="Crie uma senha" >
                    </div>
                </div>

                <div class="mb-3">
                    <a href="/cadastroOng" id="linkCadastrarOng">Quero cadastrar minha Ong</a>
                </div>  
                <button type="submit" class="btn login-btn w-100">Próximo</button>
            </form>
        </div>
    </div>
    <div class="right-section">
        <img src="/img/normal.png" alt="">
    </div>

    <!-- JavaScript 
    <script>
        const linkCadastrarOng = document.querySelector('#linkCadastrarOng');
        const rightSection = document.querySelector('.right-section');

        linkCadastrarOng.addEventListener('click', function(e) {
            e.preventDefault();
            rightSection.classList.add('move-left');

            // Aguarde a animação antes de redirecionar
            setTimeout(() => {
                window.location.href = '/cadastroOng'; // Redireciona para a página desejada
            }, 100); // Tempo igual ao da animação (500ms)
        });
    </script>-->
</body>
</html>
