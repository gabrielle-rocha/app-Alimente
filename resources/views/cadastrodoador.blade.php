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
            background: linear-gradient(to bottom, #c5f3b5, #bddef8);
            border-top-left-radius: 15%;
            border-bottom-left-radius: 15%;
        }

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
            background: linear-gradient(to right, rgba(88,169,195,1) 0%, rgb(127, 223, 164) 100%);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .login-btn:hover {
            background: linear-gradient(90deg, rgb(127, 223, 164) 0%, rgba(88,169,195,1) 100%);
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
        }

        form select {
            width: 100%;
        }

        .right-section img {
            max-width: 80%;
        }
    </style>
</head>
<body>
    <div class="left-section">
        <div class="login-card">
            <h3 class="text-center">Preencha os Campos:</h3>
            <form  action="/cadastrodoador" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nomeDoador" id="nomeDoador" placeholder="Seu nome vai aqui" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Endereço:</label>
                    <input type="adress" class="form-control" name="cepDoador" id="cepDoador" placeholder="Preencher automáticamente com o cep" onblur=buscarCep()>
                    <input type="adress" class="form-control" name="enderecoDoador" id="enderecoDoador" placeholder="Rua" >
                    <input type="adress" class="form-control" name="numeroDoador" id="numeroDoador" placeholder="Número" >
                    <input type="adress" class="form-control" name="complementoDoador" id="complementoDoador" placeholder="Complemento">
                    <input type="adress" class="form-control" name="bairroDoador" id="bairroDoador" placeholder="Bairro" >
                    <input type="adress" class="form-control" name="cidadeDoador" id="cidadeDoador" placeholder="Cidade" >
                   
                    <select name="estadoDoador" id="estadoDoador">
                        <option value="0">Estado</option>
                        <option>AC</option>
                        <option>AL</option>
                        <option>AP</option>
                        <option>AM</option>
                        <option>BA</option>
                        <option>CE</option>
                        <option>ES</option>
                        <option>GO</option>
                        <option>MA</option>
                        <option>MT</option>
                        <option>MS</option>
                        <option>MG</option>
                        <option>PA</option>
                        <option>PB</option>
                        <option>PR</option>
                        <option>PE</option>
                        <option>PI</option>
                        <option>RJ</option>
                        <option>RN</option>
                        <option>RS</option>
                        <option>RO</option>
                        <option>RR</option>
                        <option>SC</option>
                        <option>SP</option>
                        <option>SE</option>
                        <option>TO</option>
                    </select>
                    <a href="/cadastroOng">Quero cadastrar minha Ong</a>
                </div>
               
                <button type="submit" class="btn login-btn w-100">Próximo</button>

            </form>
        </div>
    </div>
    <div class="right-section">
    <img src="/img/alimente.png" alt="">
    <img src="/img/slogan-alimente-cinza.png" alt="">
    </div>
    <!--js-->
<script src="/js/cadastroDoador.js"></script>
</body>
</html>