<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar | Alimente</title>

    <link rel="stylesheet" href="/css/autenticacao.css">

<!--icon-->
<link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

<!--Fonte-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
</head>
<body>
    <div class="container">

    <form action="">
    <h3>Recuperação de senha</h3>

    <label for="">Digite um email:</label>
    <input type="text">
    
    <label for="">Código de confirmação:</label>
            <div class="code-inputs">
                <input type="text" maxlength="1" class="code" autofocus>
                <input type="text" maxlength="1" class="code">
                <input type="text" maxlength="1" class="code">
                <input type="text" maxlength="1" class="code">
            </div>

    <p>Reenviar</p>
    <a href="/autenticacao" class="button">Próximo</a>
    </form>

    </div>

    <script>
        const inputs = document.querySelectorAll('.code');
        inputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                if (input.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && index > 0 && input.value === '') {
                    inputs[index - 1].focus();
                }
            });
        });
    </script>
</body>
</html>