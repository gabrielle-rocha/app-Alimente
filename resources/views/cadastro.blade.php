<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro-doador</title>
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
            <h3 class="text-center">Cadastro</h3>
            <form method="POST" action="{{ route('cadastro') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="name" class="form-control" id="name" name="name" placeholder="Seu nome vai aqui" required>
                </div>
                <div class="mb-3">
                    <label for="adress" class="form-label">Endereço:</label>
                    <input type="adress" class="form-control" id="adress" name="adress" placeholder="Endereço" required>
                    <input type="adress" class="form-control" id="adress" name="adress" placeholder="Número" required>
                    <input type="adress" class="form-control" id="adress" name="adress" placeholder="Complemento">
                    <input type="adress" class="form-control" id="adress" name="adress" placeholder="Bairro" required>
                    <input type="adress" class="form-control" id="adress" name="adress" placeholder="Cidade" required>
                    <input type="adress" class="form-control" id="adress" name="adress" placeholder="CEP" required>
                    <input type="adress" class="form-control" id="adress" name="adress" placeholder="Estado" required>
                </div>
                <form action="criarperfil.blade.php">
               <input type="submit" class="btn login-btn w-100" value="Próximo" />
               </form>
            </form>
        </div>
    </div>
    <div class="right-section">
        <img src="img/logo.png" alt="Alimente - Gerando Solidariedade">
    </div>
</body>
</html>