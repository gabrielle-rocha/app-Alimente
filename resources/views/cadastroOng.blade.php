<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Alimente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <img src="/img/logo-alimente-branco.png" alt="">
    <img src="/img/slogan-alimente-cinza.png" alt="">
    </div>

    <div class="container">

    <div class="formulario">
        
            <h3>Preencha os Campos:</h3>
            @if ($errors->any())
            <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{ route('ong.store.first') }}" method="POST">
            @csrf
            <div class="row">
            <div class="col-4 mb-3">
            <label for="">Instituição:</label>
            <input type="text" name="nomeOng" class="form-control" placeholder="Nome da Ong" required>
            </div>

            <div class="col-4 mb-3">
            <label for="">Email:</label>
            <input type="text" name="emailOng" class="form-control" placeholder="Ong@gmail.com">
            </div>

            <div class="col-4 mb-3">
            <label for="">Senha:</label>
            <input type="password" name="senhaOng" class="form-control" placeholder="Crie uma senha">
            </div> 

            </div>

            <label for="">Registro: </label>
            <div class="row">
            <div class="col-12 mb-3">
            <input class="form-control" name="cnpjOng" type="text" placeholder="CNPJ" required>
            </div>
            </div>

            <label for="endereco">Endereço: </label>
            <div class="row mb-2">
            <div class="col-4 mb-3">
            <input type="text" class="form-control" name="cepOng" id="cep" placeholder="Cep" required onblur="buscarCep()">
            </div>

            <div class="col-4 mb-3">
            <input type="text" class="form-control" name="enderecoOng" id="endereco" placeholder="Rua" required>
            </div>

            <div class="col-4 mb-3">
            <input type="number" class="form-control" name="numeroOng" id="numero" placeholder="Número">
            </div>

            </div>

            <div class="row mb-2">
                <div class="col-4 mb-3">
            <input type="text" class="form-control" name="complementoOng" id="complemento" placeholder="Complemento">
            </div>

            <div class="col-4 mb-3">
            <input type="text" class="form-control" id="bairro" name="bairroOng" placeholder="Bairro">
            </div>

            <div class="col-4 mb-3">
            <input type="text" class="form-control" id="cidade" name="cidadeOng" placeholder="Cidade">
            </div>

            </div>

            <select id="estado" name="estadoOng" >
                <option value="">Estado</option>
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

            <button type="submit" class="button">Próximo</button>
        </form>
    </div>

    </div>

    <!--js-->
<script src="/js/cadastroOng.js"></script>
</body>
</html>