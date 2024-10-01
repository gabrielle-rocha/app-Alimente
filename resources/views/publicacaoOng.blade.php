<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ong | Alimente</title>
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: white;
        }

        .nav {
            width: 300px;
            height: 100vh;
            background: rgb(103, 134, 167);
            position: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.034);
        }

        .logo {
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent;
        }

        .logo img {
            width: 80%;
            height: auto;
            max-width: 80%;
        }

        .nav a {
            text-decoration: none;
            color:white;
            padding: 18px;
            display: flex;
            align-items: center;
            font-size: 20px;
            transition: background-color 0.3s ease, transform 0.3s; /* Transição suave ao passar o mouse */
        }

        .nav a:hover {
          background-color: rgba(255, 255, 255, 0.2); /* Efeito hover mais leve */
          transform: translateX(5px); /* Leve movimento ao passar o mouse */
        }

        .nav a i {
            margin-right: 15px;
            font-size: 20px;
        }

        .perfil {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            border: none;
        }
        .perfil .foto i {
            font-size: 30px;
            color:white;
        }

        .perfil .nomeOng {
            font-size: 16px;
            color:white;
        }

        .perfil .maisOpcoes i {
            font-size: 20px;
            color: white;
        }

        .container {
            width: calc(100% - 300px); /* Ajusta largura com base na largura da nav */
            margin: 0 auto;
            padding: 20px;
            padding-top: 90px; 
            box-sizing: border-box; 
            margin-left: 300px; /* Espaço para a nav */
            transition: margin-left 0.3s ease; /* Transição suave para margin */
        }

        .header {
            display: flex;
            align-items: center;
            padding: 10px;
           height:80px;
            border-radius: 12px; 
            margin-bottom: 25px;
            width: 100%;
            margin-top: -80px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .header img {
            width: 54px;
            height: 55px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        .upper-section {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .select-image {
            width: 45%;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px dashed #95a5b8;
            padding: 20px;
            border-radius: 12px; 
            cursor: pointer;
            height: 250px;
            background-color: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .select-image:hover {
            transform: scale(1.02);
        }

        .select-image img {
            width: 98%;
            height: 98%;
            object-fit: cover;
            border-radius: 12px; 
        }

        .description-area {
            width: 50%;
            display: flex;
            flex-direction: column;
            margin-left: 60px;
        }

        .description-area textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 12px; 
            border: 1px solid #95a5b8;
            resize: none;
            font-size: 16px;
            height: 150px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .publish-btn {
            padding: 10px 30px;
            background-color: rgba(53, 82, 155, 1);
            color: white;
            border: none;
            border-radius: 10px; 
            cursor: pointer;
            align-self: flex-end;
            transition: background-color 0.3s ease, transform 0.3s;
            font-size: 15px;
            font-weight: 600;
        }

        .publish-btn:hover {
            background-color: rgba(90, 112, 168, 1); 
            transform: translateY(-2px);
        }

        .recent-section {
            width: 100%;
            margin-top: 60px;
            background-color: rgba(224, 224, 224, 0.1);
            padding: 20px;
            border-radius: 12px; 
            margin-top: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .recent-section h3 {
            margin-bottom: 10px;
            font-size: 15px; 
            color: #333; 
        }

        .recent-images {
            display: flex;
            justify-content: space-between; 
            gap: 5px;
        }

        .recent-images img {
            width: calc(25% - 7.5px); 
            border-radius: 12px; 
            object-fit: cover;
            height: 145px;
            transition: transform 0.3s;
        }

        .recent-images img:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .nav {
                width: 100%;
                height: auto; 
                position: relative; 
            }

            .container {
                width: 100%; 
                margin-left: 0; 
                padding: 10px; 
            }

            .upper-section {
                flex-direction: column; 
                align-items: center; 
            }

            .select-image,
            .description-area {
                width: 100%; 
                margin-left: 0; 
            }

            .select-image {
                height: 250px; 
            }

            .description-area textarea {
                height: 150px; 
            }

            .recent-images img {
                width: calc(50% - 5px); 
                height: auto; 
            }
        }

        @media (max-width: 480px) {
            .nav {
                height: auto; 
            }

            .nav a {
                font-size: 18px; 
            }

            .recent-images img {
                width: 100%; 
            }

            .header h1 {
                font-size: 20px; 
            }

            .perfil .nomeOng {
                font-size: 14px; 
            }

            .publish-btn {
                padding: 8px 16px; 
            }
        }
    </style>
</head>
<body>
    <!--NAV-->
    <div class="nav">
        <div class="logo">
            <img src="/img/alimentebranco.png" alt="Alimente Logo">
        </div>
        
        <div class="options">
            <a href="/feedOng"><i class="bi bi-house-door-fill"></i> Página Inicial</a>
            <a href="/publicacaoOng"><i class="bi bi-plus-circle-fill"></i> Nova Publicação</a>
            <a href="/prestarContaOng"><i class="bi bi-clipboard-data-fill"></i> Prestar Contas</a>
        </div>

        <div class="perfil">
    <div class="foto">
    <i class="bi bi-person-circle"></i>
    </div>
    <a href="/prestarContaOng" class="nomeOng">Amigos_do_Bem</a>
    <div class="maisOpcoes">
        <i class="bi bi-three-dots-vertical"></i>
    </div>
</div>


    </div>

    <!-- CONTEÚDO -->
    <div class="container">
        <div class="header">
            <img src="/img/perfil.png" alt="Imagem de Perfil">
            <h3>Amigos do Bem</h3>
        </div>

        <div class="upper-section">
            <div class="select-image">
                <img src="/img/sample-image.jpg" alt="Clique para selecionar" onclick="document.querySelector('#fileInput').click()">
            </div>
            <div class="description-area">
                <textarea placeholder="Adicionar descrição..."></textarea>
                <button class="publish-btn">Publicar</button>
            </div>
        </div>

        <div class="recent-section">
            <h3>Imagens Recentes</h3>
            <div class="recent-images">
                <img src="/img/feed1.jpeg" alt="Imagem Recente 1">
                <img src="/img/feed2.jpg" alt="Imagem Recente 2">
                <img src="/img/feed3.jpeg" alt="Imagem Recente 3">
                <img src="/img/feed4.jpg" alt="Imagem Recente 4">
            </div>
        </div>
    </div>

     <!-- Input para selecionar o arquivo (oculto) -->
     <input type="file" id="image-input" style="display: none;" accept="image/*">

<script>
    // Script para seleção de imagem
    document.querySelector('.select-image').addEventListener('click', function() {
        document.getElementById('image-input').click();
    });

    document.getElementById('image-input').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.querySelector('.select-image img');
                img.src = e.target.result; // Atualiza a imagem com a nova seleção
            }
            reader.readAsDataURL(file);
        }
    });
</script>
</body>
</html>
