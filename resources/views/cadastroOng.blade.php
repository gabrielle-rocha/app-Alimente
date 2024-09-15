<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Alimente</title>

<!--css-->
<link rel="stylesheet" href="/css/cadastroOng.css">

<!--icon-->
<link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

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
        <form action="">
            <h3>Preencha os Campos:</h3>

            <label for="">Nome da instituição: </label>
            <input type="text" placeholder="Ex: Amigos do bem" required>

            <label for="">Registro: </label>
            <input type="text" placeholder="CNPJ" required>

            <label for="endereco">Endereço: </label>
            <input type="text" id="endereco" placeholder="Endereço" required>
            <input type="number" id="numero" placeholder="Número">
            <input type="text" id="complemento" placeholder="Complemento">
            <input type="text" id="bairro" placeholder="Bairro">
            <input type="text" id="cidade" placeholder="Cidade">
            <input type="text" id="cep" placeholder="Cep" required onblur="buscarCep()">

            <select id="estado">
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

            <input class="button" type="submit" value="Próximo">
        </form>
    </div>

    </div>

    <!--js-->
<script src="/js/cadastroOng.js"></script>
</body>
</html>