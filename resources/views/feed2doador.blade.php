<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post - Alimente</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: linear-gradient(to bottom right, #c6ddf5, #d7efcb);
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: space-between;
        }

        .sidebar .logo {
            font-size: 28px;
            font-weight: bold;
            color: #4a705d;
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
            margin-top: 30px;
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
            padding: 20px;
        }

        /* Notifications area */
        .notifications {
            width: 300px;
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
            font-size: 14px;
        }

        .btn-ver {
            background: linear-gradient(to bottom right, #c6ddf5, #d7efcb);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        /* Post styling */
        .post-container {
            width: 100%;
            max-width: 600px;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin: 20px auto;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .post-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .post-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .post-header h4 {
            font-size: 16px;
            margin-right: 5px;
        }

        .post-header .verified {
            width: 15px;
            height: 15px;
        }

        .post-header p {
            color: #666;
            font-size: 12px;
        }

        .post-body img {
            width: 100%;
            border-radius: 10px;
            margin: 10px 0;
        }

        .post-caption {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .post-comments {
            font-size: 12px;
            color: #888;
            margin-bottom: 10px;
        }

        .comment-box {
            width: 100%;
            border: none;
            border-top: 1px solid #ddd;
            padding: 10px;
            font-size: 12px;
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
            font-size: 12px;
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
                <div class="logo">
                <img src="img/alimente.png" alt="Logo">
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
                    <h4>Cão_Sem_Dono</h4>
                    <img class="verified" src="https://via.placeholder.com/15" alt="Verificado">
                </div>

                <!-- Body (Image and Caption) -->
                <div class="post-body">
                    <img src="https://via.placeholder.com/400x200" alt="Post image">
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
            <h2>Sugestões para você</h2>
            <div class="notification">
                <div class="notification-info">
                    <img src="img/user.png" alt="Notification">
                    <div class="notification-text">Cão_Sem_Dono Fez uma nova publicação.</div>
                </div>
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