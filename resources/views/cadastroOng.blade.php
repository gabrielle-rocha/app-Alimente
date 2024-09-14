<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Alimente</title>
<!--js-->
<script src="/js/script.js"></script>

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
            <input type="text" placeholder="Ex: Amigos do bem">

            <label for="">Registro: </label>
            <input type="text" placeholder="CNPJ">

            <label for="">Endereço: </label>
            <input type="text" placeholder="Endereço">
            <input type="number" placeholder="Número">
            <input type="text" placeholder="Complemento">
            <input type="text" placeholder="Bairro">
            <input type="text" placeholder="Cidade">
            <input type="text" placeholder="Cep">

            <select>
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

            <input class="button" type="button" value="Próximo">
        </form>
    </div>

    </div>
</body>
</html>