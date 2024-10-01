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
    <form action="" method="POST">
    <h3>Código</h3>
    @csrf
    <label for="code">Código de confirmação:</label>
            <div class="code-inputs">
                <input type="text" maxlength="1" class="code" autofocus name="code[]">
                <input type="text" maxlength="1" class="code" name="code[]">
                <input type="text" maxlength="1" class="code" name="code[]">
                <input type="text" maxlength="1" class="code" name="code[]">
            </div>

            <button class="button" type="submit">Verificar</button>

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