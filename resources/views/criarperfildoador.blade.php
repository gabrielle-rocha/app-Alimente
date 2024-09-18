<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Alimente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: row;
        }
        .left-section, .right-section {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .left-section {
            background-color: white;
        }
        .right-section {
            background: linear-gradient(to bottom right, #c6ddf5, #d7efcb);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .right-section img {
            max-width: 80%;
        }
        .profile-card {
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;
        }
        .profile-card h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-card .upload-photo {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-card .upload-photo img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .profile-card textarea {
            resize: none;
            width: 100%;
            height: 80px;
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
            background: linear-gradient(to bottom right, #c6ddf5, #d7efcb);
            color: white;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="left-section">
        <div class="profile-card">
            <h3>Perfil</h3>
            <div class="upload-photo">
                <img src="https://via.placeholder.com/80" alt="Foto de Perfil">
                <input type="file" id="photo" class="form-control" style="margin-top: 10px;">
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
        <img src="img/alimentelogo.png" alt="Alimente - Gerando Solidariedade">
    </div>
</body>
</html>