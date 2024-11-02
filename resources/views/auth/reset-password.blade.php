<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
     <!--Fonte-->
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
            background-color: rgba(255, 255, 255, 0.85);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(50, 50, 50, 0.4);
            max-width: 400px;
            width: 90%;
            text-align: center;
        }
        
        h1 {
            color: #333;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        label, input, button {
            width: 100%;
            font-size: 1rem;
            margin-bottom: 1rem;
            display: block;
        }
        
        label {
            color: #333;
            text-align: left;
            font-size: 20px;
        }
        
        input[type="password"] {
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }
        
        button {
            width: 50%;
            margin: 0 auto;
            background-color: #5cafbf;
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }
        
        button:hover {
            background-color:  #67beb6;
        }
        
       
        .back-link {
            display: block;
            margin-top: 1rem;
            color:#333;
            font-size: 0.9rem;
            text-decoration: none;
            font-size: 18px;
        }
        
        .back-link:hover {
            text-decoration: underline;
        }

        /* Responsive*/
        @media (max-width: 500px) {
            h1 {
                font-size: 1.5rem;
            }
            .form-container {
                padding: 1.5rem;
            }
        }
        
        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-top: -0.5rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Redefinir Senha</h1>
        <form method="POST" action="/password-reset">
            <div>
                <label for="new-password">Nova Senha:</label>
                <input type="password" id="new-password" name="new-password" required>
            </div>
            <div>
                <label for="confirm-password">Confirmar Senha:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="error-message" style="display: none;">
                Erro: As senhas não coincidem.
            </div>
            <div>
                <button type="submit">Redefinir Senha</button>
            </div>
        </form>
        <a href="/login" class="back-link">Voltar para a página de login</a>
    </div>
</body>
</html>
