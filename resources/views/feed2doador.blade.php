<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doador - Alimente</title>
    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Quicksand';
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width:20%;
            background: linear-gradient(to bottom right, #c6ddf5, #d7efcb);
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: space-between;
        }
        
        .sidebar .imagem{
            width: 100%;
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            margin: 10px 0;
            display: flex;
            align-items: center;
        }

        .sidebar a:hover {
            color: #4a705d;
        }

        .sidebar .menu {
            margin-top: 30%;
        }

        .sidebar .profile {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .sidebar .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Main content area */
        .main-content {
            flex-grow: 1;
            background-color: #fff;
            padding: 15px;
        }

        /* Notifications area */
        .notifications {
            width: 20%;
            background-color: #f9f9f9;
            padding: 20px;
            border-left: 1px solid #ddd;
        }

        .notification {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .notification img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .notification-info {
            display: flex;
            align-items: center;
        }

        .notification-text {
            font-size: 100%;
        }

        .btn-ver {
            background: linear-gradient(to bottom right, #c6ddf5, #d7efcb);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
    /* Barra de rolagem */
.post-container::-webkit-scrollbar {
    width: 10px; 
    cursor: pointer;
}

.post-container::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.post-container::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 10px;
    border: 2px solid #f1f1f1; /* Corrigido para usar um espaço em vez de vírgula */
    cursor: pointer;
}

.post-container::-webkit-scrollbar-thumb:hover {
    background-color: black;
}

/* Post styling */
.post-container {
    overflow: auto; /* Mudei para auto para mostrar a barra de rolagem apenas quando necessário */
    width: 100%;
    max-width: 100%;
    max-height: 600px; /* Defina uma altura máxima para o container, se necessário */
    background-color: white;
    padding: 15px;
    
}

        .post-header {
            display: flex;
            align-items: center;
           
        }
        .post-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .post-header h4 {
            font-size: 100%;
            margin-right: 5px;
        }
        .post-body img {
            width:  100%;
            height: 500px;
            border-radius: 10px;
            margin: 5px 0;
        }

        .post-body{
            align-items: center;
        }

        .post-caption {
            font-size: 100%;
            margin-bottom: 10px;
        }

        .post-comments {
            font-size: 100%;
            color: #888;
            margin-bottom: 10px;
        }

        .comment-box {
            width: 100%;
            border: none;
            border-top: 1px solid #ddd;
            padding: 10px;
            font-size: 100%;
            color: #888;
        }

        .comment-box input {
            width: 100%;
            padding: 10px;
            border: none;
            outline: none;
            font-size: 14px;
            color: #333;
        }

        .post-footer {
            font-size: 100%;
            color: #888;
            margin-top: 10px;
        }

        /* Custom styles for responsiveness */
        .search-section {
            display: none; /* Hidden by default */
            margin-top: 20px;
        }

        .search-section.active {
            display: block; /* Show when active */
        }

        @media (max-width: 768px) {
            /* Styles for mobile view */
            .search-section {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <div class="imagem">
                    <h1>
                      <img src="img/feedoador.png" alt="imagem">
                 </h1>
                </div>
                <div class="menu">
                    <a href="feed2doador"> <i class="fas fa-home"></i> Página inicial</a>
                    <a href="#" id="pesquisa"><i class="fas fa-plus-circle"></i> Pesquisar</a>
                    <a href="prestarconta"><i class="fas fa-file-invoice"></i> Buscar</a>
                </div>
            </div>
            <div class="profile">
                <a href="editarperfildoador">
                <img src="img/user.png" alt="Profile">
                <span>Doador_01</span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Barra de Pesquisa -->
            <div class="search-section" id="search-section">
                <input type="text" placeholder="Digite para pesquisar..." style="width: 100%; padding: 10px;">
            </div>

            <!-- Social Media Post -->
            <div class="post-container">
                <!-- Header -->
                <div class="post-header">
                    <img src="img/user.png" alt="Cão_Sem_Dono">
                    <h2>Cão_Sem_Dono</h2>
                </div>

                <!-- Body (Image and Caption) -->
                <div class="post-body">
                    <img src="img/feeddoador.jpg" alt="Post image">
                    <p class="post-caption">A seca está castigando todos, os mais prejudicados são os animais.</p>
                    <p class="post-caption"><strong>Cão_Sem_Dono</strong> Venha ajudar nossos animais :)</p>
                </div>

                <!-- Comments -->
                <div class="post-comments">
                    Adicionar um comentário...
                </div>

                <!-- Input box for comments -->
                <div class="comment-box">
                    <input type="text" placeholder="Adicionar um comentário...">
                </div>

                <!-- Footer (Post time) -->
                <div class="post-footer">
                    Postado há 21 horas
                </div>
            </div>
        </div>

        <!-- Notifications -->
        <div class="notifications">
            <h1>Sugestões para você</h1>
            <div class="notification">
                <div class="notification-info">
                    <img src="img/user.png" alt="Notification">
                    <div class="notification-text">Cão_Sem_Dono Fez uma nova publicação.</div>
                </div>

        </div><br>
        <div class="notification">
                <div class="notification-info">
                    <img src="img/user.png" alt="Notification">
                    <div class="notification-text">Mente_do_palhaco pediu para seguir você.</div>
                </div>
    </div>

    <script src="/js/feed2doador.js"></script>
    <script>
        // JavaScript para alternar a exibição da barra de pesquisa
        document.getElementById('pesquisa').addEventListener('click', function() {
            var searchSection = document.getElementById('search-section');
            searchSection.classList.toggle('active');
        });
    </script>

</body>
</html>