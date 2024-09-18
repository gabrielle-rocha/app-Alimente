<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: row;
        }
        .left-section, .right-section {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .left-section {
            background-color: white;
        }
        .right-section {
            background: linear-gradient(to bottom right, #c6ddf5, #d7efcb);
        }
        .login-card {
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;
        }
        .login-btn {
            background: linear-gradient(to bottom right, #c6ddf5, #d7efcb);
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
            <form method="POST" action="{{ route('welcome') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Criar senha" required>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Confirmar senha" required>
                </div>
                <button type="submit" class="btn login-btn w-100">Cadastrar</button>
            </form>
        </div>
    </div>
    <div class="right-section">
        <img src="img/alimentelogo.png" alt="Alimente - Gerando Solidariedade">
    </div>
</body>
</html>