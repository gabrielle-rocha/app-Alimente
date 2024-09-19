<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Alimente</title>

    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background: linear-gradient(to bottom, #c5f3b5, #bddef8);
            border-top-left-radius: 15%;
            border-bottom-left-radius: 15%;
        }

        form label {
            margin-bottom: 5px;
            font-weight: 600;
        }

        h3 {
            text-align: center;
            font-size: 1.5em;
            font-weight: 600;
        }

        form input{
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid #ccc;
        font-size: 1em;
}

        .login-card {
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-btn {
            background: linear-gradient(to right, rgba(88,169,195,1) 0%, rgb(127, 223, 164) 100%);
            color: white;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }
        .login-btn:hover {
        background: linear-gradient(90deg, rgb(127, 223, 164) 0%, rgba(88,169,195,1) 100%);
        color: white;
        }
        .forgot-password {
            color: #0072ff;
            text-decoration: none;
        }
        .right-section img {
            max-width: 80%;
        }
    </style>
</head>
<body>
    <div class="left-section">
        <div class="login-card">
            <h3 class="text-center">Criar Conta</h3>
            <form method="GET" action="/criarperfildoador">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Crie uma senha" required>

                    <label for="password" class="form-label">Confirmar Senha:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Repita a senha" required>
                </div>
                <a href="/criarperfildoador" class="btn login-btn w-100">Próximo</a>
            </form>
        </div>
    </div>
    <div class="right-section">
        <img src="/img/alimente.png" alt="">
        <img src="/img/slogan-alimente-cinza.png" alt="">
    </div>
</body>
</html>