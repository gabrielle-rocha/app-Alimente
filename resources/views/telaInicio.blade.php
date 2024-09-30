<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimente | Início</title>
    
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
            }

            html, body {
                height: 100%;
                width: 100%;
                font-family: 'Quicksand', sans-serif;
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
            border: none;
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
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .right-section p {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: #555;
            width: 70%; /* Garantir que ocupe o espaço */
        }
        
        .right-section b {
            font-size: 1.3rem;
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
            font-size: 1rem;
            margin-top: 10px;
            color: #555;
            line-height: 1.6;
        }

        .quote-author {
            margin-bottom: 5px;
            font-weight: bold;
            margin-bottom: 40px;
            color: #333;
        }
        /* Garantir que não há espaço entre as imagens */
        .gloves {
            width: 230px; /* Aumentei o tamanho da imagem das luvas */
            margin-bottom: 5px;
        }
        /* Garantir que não há espaço entre as imagens */
        .start-button {
            background: linear-gradient(to right, rgba(88,169,195,1) 0%, rgb(127, 223, 164) 100%);
            color: white;
            width: 50%;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            border: none;
        }

        .start-button:hover {
            background: linear-gradient(90deg, rgb(127, 223, 164) 0%, rgba(88,169,195,1) 100%);
            color: white;
        }
        .start-button a{
            color:white;
            text-decoration:none;
            
            color: white;
            width: 50%;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            border: none;
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
