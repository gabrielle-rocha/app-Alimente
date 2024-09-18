<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | Alimente</title>

    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

     <!--Fonte-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        body {
            margin: 0;
            display: flex;
            flex-direction: row;
            height: 100vh;
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
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .right-section img {
            max-width: 80%;
        }
        h3 {
            text-align: center;
            font-size: 1.5em;
            font-weight: 600;
        }
        .form-label {
        margin-bottom: 5px;
        font-weight: 600;
        }

        .profile-card {
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .profile-card h3 {
            text-align: center;
            margin-bottom: 10px;
            margin-top: 0;
        }
        .profile-card textarea {
            resize: none;
            width: 100%;
            height: 75px;
        }
        .causes-section {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }
        .causes-section img {
            width: 50px;
            height: 50px;
        }
        .btn-next {
            background: linear-gradient(to right, rgba(88,169,195,1) 0%, rgb(127, 223, 164) 100%);
            color: white;
            width: 100%;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn-next:hover {
        background: linear-gradient(90deg, rgb(127, 223, 164) 0%, rgba(88,169,195,1) 100%);
        color: white;
        }

       
    .imgPerfil{
        border: 3px solid #87a5bd;
        width: 130px;
        height: 130px;
        border-radius: 100%;
        position: relative;
        box-shadow: 2px 3px 11px #00000060;
        overflow: hidden;
        cursor: pointer;
        margin: 0 auto; 
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 5px;
         margin-bottom: 10px ;
    }

    & .imgPerfil img{
        object-fit: cover;
    }

    & .imgPerfil i{
        position: absolute;
        margin: 0 auto;
        font-size: 90px;
        color: #89adc9;
    }

    & #img-field{
        position: absolute;
        margin: 0 ;
        width: 100px;
        height: 100px;
        opacity: 0;
        cursor: pointer;
    }

    </style>
</head>
<body>
    <div class="left-section">
        <div class="profile-card">
            <h3>Perfil</h3>
            <label for="user" class="form-label">Adicione uma foto:</label>
            <div class="imgPerfil box">
                    <img src="" alt="" id="img-preview" class="w-100 h-100">
                    <i class="bi bi-person-fill-add"></i>
                    <input id="img-field" type="file">
                </div>

            <div class="mb-3">
                <label for="user" class="form-label">Nome de usuário:</label>
                <input type="text" class="form-control" placeholder="Ex: voce_02" required>
            </div>

            <div class="mb-3">
                <label for="bio" class="form-label">Adicione uma bio:</label>
                <textarea id="bio" class="form-control" placeholder="Ex: Doador à 2 anos; Foco em doação de Roupas." required></textarea>
            </div>
            <div class="causes-section">
                <img src="img/pets.png" alt="Causa 1">
                <img src="img/doenças.png" alt="Causa 2">
                <img src="img/roupas.png" alt="Causa 3">
                <img src="img/comida.png" alt="Causa 4">
            </div>
            <button type="submit" class="btn btn-next">Próximo</button>
        </div>
    </div>
    <div class="right-section">
        <img src="/img/alimente.png" alt="Alimente - Gerando Solidariedade">
        <img src="/img/slogan-alimente-cinza.png" alt="Alimente - Gerando Solidariedade">
    </div>
</body>
</html>