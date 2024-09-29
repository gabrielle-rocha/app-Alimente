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
            background: linear-gradient(135deg, #f7f7f7, #e0e0e0); /* Gradiente de fundo suave */
        }

        /*---------------------------------------------------------------- NAV------------------------------------------------------------------------------*/
        .nav {
    width: 300px;
    height: 100vh;
    background: linear-gradient(to bottom, #95a5b8, #7f8c8d); /* Gradiente de cima para baixo */
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
            background-color: transparent; /* Logo mais integrada ao gradiente */
        }

        .logo img {
            width: 80%;
            height: auto;
            max-width: 80%;
        }

        .nav a {
            text-decoration: none;
            color: white; /* Texto branco para contraste */
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
            background-color: transparent; /* Integração visual com a nav */
            border: none;
        }

        .perfil a:hover {
            background-color: transparent;
        }

        .perfil .foto i {
            font-size: 30px;
            color: white; /* Ícone de perfil em branco */
        }
        .perfil .foto img {
    width: 40px; 
    height: 40px; 
    border-radius: 50%;
    object-fit: cover; /* Garante que a imagem mantenha proporções */
}


.perfil .nomeOng {
    font-size: 16px;
    color: white;
    margin-left: -60px; 
}

        .perfil .maisOpcoes i {
            font-size: 20px;
            color: white; /* Ícone de opções em branco */
            margin-left: -50px;
        }

        /*---------------------------------------------------------------- CONTEÚDO------------------------------------------------------------------------------*/
        .container {
            width: 75%;
            margin: 0 auto;
            padding: 20px; 
            padding-top: 90px; 
            box-sizing: border-box; 
            margin-left: 390px; 
        }

        .header {
            display: flex;
            align-items: center;
            padding: 10px;
            background: linear-gradient(135deg, #fff, #e0e0e0); /* Gradiente no cabeçalho */
            border-radius: 12px; 
            margin-bottom: 20px;
            width: 100%;
            margin-top: -40px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Sombra mais forte */
        }

        .header img {
            width: 50px;
            height: 50px;
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
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px dashed #95a5b8; /* Cor do contorno mais vibrante */
            padding: 20px;
            border-radius: 12px; 
            cursor: pointer;
            height: 400px;
            background-color: #ffffff; /* Fundo branco para destacar a área de seleção */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra para um efeito de profundidade */
            transition: transform 0.3s; /* Efeito de transformação suave */
        }

        .select-image:hover {
            transform: scale(1.02); /* Leve aumento ao passar o mouse */
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
            margin-left: 20px;
        }

        .description-area textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 12px; 
            border: 1px solid #95a5b8; /* Cor do contorno vibrante */
            resize: none;
            font-size: 16px;
            height: 200px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Sombra para profundidade */
        }

        .publish-btn {
            padding: 10px 20px;
            background: linear-gradient(to bottom, #95a5b8, #7f8c8d); 
            color: white;
            border: none;
            border-radius: 12px; 
            cursor: pointer;
            align-self: flex-end;
            transition: background-color 0.3s ease, transform 0.3s; /* Transição suave ao passar o mouse */
        }

        .publish-btn:hover {
            background: linear-gradient(to bottom, #7f8c8d,#95a5b8 ); 
            transform: translateY(-2px); /* Levantamento ao passar o mouse */
        }

        .recent-section {
            width: 100%;
            margin-top: 60px;
            background-color: rgba(224, 224, 224, 0.8); /* Fundo levemente transparente */
            padding: 20px;
            border-radius: 12px; 
            margin-top: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra para profundidade */
        }

        .recent-section h3 {
            margin-bottom: 10px;
            font-size: 24px; 
            color: #333; 
        }

        .recent-images {
            display: flex;
            justify-content: space-between; 
            gap: 10px;
        }

        .recent-images img {
            width: calc(25% - 7.5px); 
            border-radius: 12px; 
            object-fit: cover;
            height: 220px;
            transition: transform 0.3s; /* Efeito de transformação suave */
            border: 2px solid #95a5b8; /* Contorno vibrante nas imagens */
        }

        .recent-images img:hover {
            transform: scale(1.05); /* Aumento na imagem ao passar o mouse */
        }

        /*---------------------------------------------------------------- RESPONSIVO------------------------------------------------------------------------------*/
        /*---------------------------------------------------------------- RESPONSIVO------------------------------------------------------------------------------*/

@media (max-width: 768px) {
    /* Ajustes para telas menores, como tablets */
    .nav {
        width: 100%;
        height: auto; /* Permite que a altura da nav se ajuste ao conteúdo */
        position: relative; /* Faz com que a nav não fique fixa */
    }

    .container {
        width: 100%;
        margin-left: 0; /* Remove a margem esquerda em telas menores */
    }

    .upper-section {
        flex-direction: column; /* Altera a direção para coluna */
        align-items: center; /* Centraliza os elementos */
    }

    .select-image,
    .description-area {
        width: 100%; /* Faz as seções ocuparem 100% da largura */
        margin-left: 0; /* Remove a margem esquerda */
    }

    .select-image {
        height: 250px; /* Ajusta a altura em telas menores */
    }

    .description-area textarea {
        height: 150px; /* Ajusta a altura do textarea */
    }

    .recent-images img {
        width: calc(50% - 5px); /* Faz as imagens ocuparem 50% da largura */
        height: auto; /* Mantém a proporção da imagem */
    }
}

@media (max-width: 480px) {
    /* Ajustes para telas de smartphones */
    .nav {
        height: auto; /* Permite que a altura da nav se ajuste ao conteúdo */
    }

    .nav a {
        font-size: 18px; /* Ajusta o tamanho da fonte */
    }

    .recent-images img {
        width: 100%; /* Faz as imagens ocuparem 100% da largura */
    }

    .header h1 {
        font-size: 20px; /* Ajusta o tamanho do cabeçalho */
    }

    .perfil .nomeOng {
        font-size: 14px; /* Ajusta o tamanho do nome da ONG */
    }

    .publish-btn {
        padding: 8px 16px; /* Ajusta o padding do botão */
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
        <a href="#">
            <img src="/img/perfil.png" alt="Perfil" class="imagem-perfil">
        </a>
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
            <h1>Amigos do Bem</h1>
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
