<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimente</title>
    <style>
      
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html, body {
                height: 100%;
                width: 100%;
                font-family: Arial, sans-serif;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                width: 100vw;
            }

            .container {
                display: flex;
                height: 100%;
                width: 100%;
                border: 1px solid #ccc;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            /*CONFIGURAÇÃO LADO DIREITO DA TELA*/
            .left-section {
            background: linear-gradient(to bottom, #c5f3b5, #bddef8);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 50%;
            padding: 20px;
            color: #4f4f4f;
            text-align: center;
            line-height: 0;
            border-top-right-radius: 15%;
            border-bottom-right-radius: 15%;
        }

        .left-section img {
            max-width: 80%;
            height: auto;
            display: block;
            margin: 0;
            padding: 0;
            border: 0;
        }

        .left-section {
            gap: 0; /* Garantir que não há espaço entre as imagens */
        }

        /*CONFIGURAÇÃO LADO ESQUEROO DA TELA**/
        .right-section {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .right-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .right-section p {
            font-size: 1.7rem;
            margin-bottom: 20px;
            color: #555;
            width: 70%; /* Garantir que ocupe o espaço */
        }
        
        .right-section b {
            font-size: 1.7rem;
            margin-bottom: 20px;
            color:#35a3c9;
            width: 70%; /* Garantir que ocupe o espaço */
        }
        .right-section .login-text {
            width: 80%;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .quote {
            font-style: italic;
            font-size: 1.1rem;
            margin-top: 20px;
            color: #555;
            line-height: 1.6;
        }

        .quote-author {
            margin-top: 5px;
            font-weight: bold;
            color: #333;
        }
        /* Garantir que não há espaço entre as imagens */
        .gloves {
            width: 400px; /* Aumentei o tamanho da imagem das luvas */
            margin-bottom: 20px;
        }
        /* Garantir que não há espaço entre as imagens */
        .start-button {
            background: linear-gradient(to bottom, #c5f3b5, #bddef8);
            border: none;
            padding: 10px 20px;
            color: black;
            font-size: 1.2rem;
            cursor: pointer;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .start-button:hover {
            background: linear-gradient(to bottom,#bddef8,#c5f3b5);
        }
        .start-button a{
            color:black;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Seção da Esquerda -->
        <div class="left-section">
            <img src="img/alimente.png" alt="Alimente Logo" class="alimente">
            <img src="img/slogan-alimente-cinza.png" alt="Gerando Solidariedade" class="solidarity-image"> 
        </div>

        <!-- Seção da Direita -->
        <div class="right-section">
            <h2>Bem Vindo(a)!</h2>
            <p class="login-text">Faça login ou cadastre-se para participar do time <b>Alimente</b>.</p>
            <img src="img/luvas.jpg" alt="Gloves Icon" class="gloves">
            <p class="quote">"Você não viveu hoje até que tenha feito algo para alguém que nunca poderá te retribuir."</p> 
            <p class="quote-author">- John Bunyan</p>
            <button class="start-button"><a href="/logindoador" class="text-muted">Iniciar</a></button>
        </div>
    </div>
</body>
</html>
