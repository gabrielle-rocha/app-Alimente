<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceu a Senha</title>
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #DCDCDC;
            backdrop-filter: blur(8px);
            font-family: 'Quicksand', sans-serif;
        }
        
        .form-container {
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0px 6px 20px rgba(50, 50, 50, 0.4);
            max-width: 400px;
            width: 90%;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }
        
        label, input, button {
            width: 100%;
            display: block;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        
        label {
            color: #333;
            font-size: 20px;
        }
        
        input[type="email"] {
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }
        
        button {
            background-color: #5cafbf;
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }
        
        button:hover {
            background-color: #67beb6;
        }
        
        /* Ajustes Responsivos */
        @media (max-width: 500px) {
            h1 {
                font-size: 1.5rem;
            }
            .form-container {
                padding: 1.5rem;
            }
        }
        
        /* Estilo para mensagens de erro e sucesso */
        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-top: -0.5rem;
            margin-bottom: 1rem;
        }
        .success-message {
            color: green;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Esqueceu sua senha?</h1>

        <!-- Mensagem de sucesso -->
        @if (session('status'))
            <div class="success-message">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div>
                <label for="email">Digite seu email:</label>
                <input type="email" id="email" name="email" required>
            </div>
      
            <!-- Exibir mensagem de erro se o email for inválido -->
            @if ($errors->has('email'))
                <div class="error-message">
                    {{ $errors->first('email') }}
                </div>
            @endif

            <div>
                <button type="submit">Enviar Link de Redefinição</button>
            </div>
        </form>
    </div>
</body>
</html>
