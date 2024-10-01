<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar | Alimente</title>

    <link rel="stylesheet" href="/css/autenticacao.css">
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
</head>
<body>
    <div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('password.reset.code') }}" method="POST" onsubmit="combineCode(event)">
    @csrf
    <h3>Código</h3>
    <label for="code">Código de confirmação:</label>
    <div class="code-inputs">
        <input type="text" maxlength="1" class="code" autofocus required>
        <input type="text" maxlength="1" class="code" required>
        <input type="text" maxlength="1" class="code" required>
        <input type="text" maxlength="1" class="code" required>
    </div>
    <input type="hidden" name="code" id="full_code">
    <button class="button" type="submit">Verificar</button>
</form>
</div>
<script>
    const inputs = document.querySelectorAll('.code');

    // Função para avançar automaticamente para o próximo campo
    inputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (input.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        // Permitir voltar para o campo anterior com backspace
        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && index > 0 && input.value === '') {
                inputs[index - 1].focus();
            }
        });
    });

    // Combina os códigos em uma única string antes de enviar o formulário
    function combineCode(event) {
        event.preventDefault();
        let code = '';
        inputs.forEach(input => {
            code += input.value;
        });
        document.getElementById('full_code').value = code;
        event.target.submit(); // Submete o formulário
    }
</script>

</body>
</html>
