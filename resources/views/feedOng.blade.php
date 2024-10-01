<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ong | Alimente</title>
    <!--ICONES-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--FONTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
        }

        /* Navbar */
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
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo img {
            width: 80%;
            height: auto;
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


        /* Container principal */
        .container {
            display: flex;
            margin-left: 300px;
        }

        .container .notifications {
            width: 35%;
            padding: 30px;
        }

        .container .feed {
            width: 80%;
        }

        /* Feed */
        .feed {
            height: calc(100vh - 40px);
            padding: 20px;
            background-color: #ffffff;
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            overflow-y: auto;
        }

        .post {
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            width: 75%;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .post img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        /* Estilização da barra de rolagem */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Publicação */
        .post .post-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .post .post-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .post .post-header span {
            font-weight: bold;
            font-size: 16px;
        }

        .post p {
            font-size: 16px;
            margin: 10px 0;
        }

        /* Ações da publicação */
        .post-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .like-button,
        .comment-button {
            background: none;
            border: none;
            color: #007bff;
            font-size: 16px;
            cursor: pointer;
        }

        .comment-section {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }

        .comment-input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 5px;
        }

        .submit-comment {
            background: none;
            border: none;
            color: #007bff;
            cursor: pointer;
            font-size: 20px;
        }

        .comments-list {
            margin-top: 10px;
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        .comment-item {
            margin-bottom: 10px;
        }

        .comment-item strong {
            font-weight: bold;
            color: #333;
        }

        .comment-item p {
            margin: 5px 0 0 0;
            font-size: 14px;
        }

        .interaction-section {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .interaction-section button {
            background: none;
            border: none;
            color: black;
            cursor: pointer;
            font-size: 18px;
            margin-right: 15px;
        }

        .interaction-section button i {
            margin-right: 5px;
        }

        /* Notificações */
        .notifications {
            background-color: #fff;
            padding: 30px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .notification-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            font-size: 24px;
            font-weight: bold;
            width: 100%;
            color: black;
            padding: 20px;
        }

        .notification-icon {
            font-size: 24px;
            color: #333;
            margin-left: 10px;
        }

        .notification-header i {
            margin-right: 10px;
            font-size: 24px;
        }

        .notifications-title {
            font-size: 40px;
            color: #333;
        }

        .notifications .notification-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .notifications .notification-item i{
            color: gray;
            font-size: 40px;
            margin-right: 10px;
        }

        .notifications .notification-item span {
            font-size: 14px;
        }

        .notifications .notification-item button {
            background: rgb(103, 134, 167);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 8px;
            cursor: pointer;
        }

        /* Responsividade */
        @media (max-width: 1200px) {
            .container {
                flex-direction: column;
                margin-left: 0;
            }

            .nav {
                width: 100%;
                height: auto;
                flex-direction: row;
                justify-content: space-around;
            }

            .logo img {
                width: 50%;
            }

            .nav a {
                font-size: 18px;
                padding: 10px;
            }

            .feed {
                width: 100%;
            }

            .notifications {
                display: none;
            }

            .post {
                width: 90%;
            }

            .post img {
                height: 300px;
            }

            .perfil {
                flex-direction: column;
                align-items: center;
            }

            .perfil .nomeOng {
                font-size: 14px;
                text-align: center;
            }

            .perfil .foto i {
                font-size: 24px;
            }

            .perfil .maisOpcoes i {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    
<!-----------------------------------------------------------------NAV----------------------------------------------------------------------------->
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
            <a  href="editarperfilong" class="nomeOng">Amigos_do_Bem</a>
            <div class="maisOpcoes">
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </div>
    </div>

    <!-- Conteúdo Principal -->
    <div class="container">
        
   
<!---------------------------------------------------------------- FEED------------------------------------------------------------------------------>
        <div class="feed">

        
 <!-- PUBLICAÇÃO 1-->
        <div class="post">
    <div class="post-header">
        <img src="/img/luvas.jpg" alt="User Image">
        <span>ongesperanca</span>
    </div>
    <img src="/img/feed1.jpeg" alt="Post Image">
    <p>Alimentos arrecadados para doação:)</p>
    

    <!-- Botões de curtida e comentário -->
<div class="interaction-section">
    <button class="like-button"><i class="bi bi-heart"></i> Curtir</button>
    <button class="comment-button" onclick="toggleCommentSection(this)"><i class="bi bi-chat"></i> Comentar</button>
</div>


   <!-- Área de comentários -->
<div class="comment-section" style="display: none;">
    <input type="text" placeholder="Escreva um comentário..." class="comment-input">
    <button class="submit-comment"><i class="bi bi-send"></i></button>
    
    <!-- Espaço para visualizar comentários -->
    <div class="comments-list">
        <div class="comment-item">
            <strong>Nome do Usuário</strong>
            <p>Esse é um comentário de exemplo!</p>
        </div>
        <div class="comment-item">
            <strong>Outro Usuário</strong>
            <p>Mais um comentário aqui!</p>
        </div>
        <!-- Mais comentários podem ser adicionados aqui -->
    </div>
</div>
</div>

 <!-- PUBLICAÇÃO 2-->
<div class="post">
    <div class="post-header">
        <img src="/img/luvas.jpg" alt="User Image">
        <span>Cão_Sem_Dono</span>
    </div>
    <img src="/img/feed2.jpg" alt="Post Image">
    <p>Venha ajudar nossos animais :)</p>
    

    <!-- Botões de curtida e comentário -->
<div class="interaction-section">
    <button class="like-button"><i class="bi bi-heart"></i> Curtir</button>
    <button class="comment-button" onclick="toggleCommentSection(this)"><i class="bi bi-chat"></i> Comentar</button>
</div>


   <!-- Área de comentários -->
<div class="comment-section" style="display: none;">
    <input type="text" placeholder="Escreva um comentário..." class="comment-input">
    <button class="submit-comment"><i class="bi bi-send"></i></button>
    
    <!-- Espaço para visualizar comentários -->
    <div class="comments-list">
        <div class="comment-item">
            <strong>Nome do Usuário</strong>
            <p>Esse é um comentário de exemplo!</p>
        </div>
        <div class="comment-item">
            <strong>Outro Usuário</strong>
            <p>Mais um comentário aqui!</p>
        </div>
</div>
</div>
</div>


 <!-- PUBLICAÇÃO 3-->
<div class="post">
    <div class="post-header">
        <img src="/img/luvas.jpg" alt="User Image">
        <span>Cão_Sem_Dono</span>
    </div>
    <img src="/img/feed3.jpeg" alt="Post Image">
    <p>Venha ajudar nossos animais :)</p>
    

    <!-- Botões de curtida e comentário -->
<div class="interaction-section">
    <button class="like-button"><i class="bi bi-heart"></i> Curtir</button>
    <button class="comment-button" onclick="toggleCommentSection(this)"><i class="bi bi-chat"></i> Comentar</button>
</div>


   <!-- Área de comentários -->
<div class="comment-section" style="display: none;">
    <input type="text" placeholder="Escreva um comentário..." class="comment-input">
    <button class="submit-comment"><i class="bi bi-send"></i></button>
    
    <!-- Espaço para visualizar comentários -->
    <div class="comments-list">
        <div class="comment-item">
            <strong>Nome do Usuário</strong>
            <p>Esse é um comentário de exemplo!</p>
        </div>
        <div class="comment-item">
            <strong>Outro Usuário</strong>
            <p>Mais um comentário aqui!</p>
        </div>
</div>
</div>
</div>




 <!-- PUBLICAÇÃO 4-->
<div class="post">
    <div class="post-header">
        <img src="/img/luvas.jpg" alt="User Image">
        <span>Cão_Sem_Dono</span>
    </div>
    <img src="/img/feed4.jpg" alt="Post Image">
    <p>Venha ajudar nossos animais :)</p>
    

    <!-- Botões de curtida e comentário -->
    <!-- Área de interação com a publicação -->
<div class="interaction-section">
    <button class="like-button"><i class="bi bi-heart"></i> Curtir</button>
    <button class="comment-button" onclick="toggleCommentSection(this)"><i class="bi bi-chat"></i> Comentar</button>
</div>


   <!-- Área de comentários -->
<div class="comment-section" style="display: none;">
    <input type="text" placeholder="Escreva um comentário..." class="comment-input">
    <button class="submit-comment"><i class="bi bi-send"></i></button>
    
    <!-- Espaço para visualizar comentários -->
    <div class="comments-list">
        <div class="comment-item">
            <strong>Nome do Usuário</strong>
            <p>Esse é um comentário de exemplo!</p>
        </div>
        <div class="comment-item">
            <strong>Outro Usuário</strong>
            <p>Mais um comentário aqui!</p>
        </div>
</div>
</div>
</div>

 <!-- PUBLICAÇÃO 5-->
<div class="post">
    <div class="post-header">
        <img src="/img/luvas.jpg" alt="User Image">
        <span>Cão_Sem_Dono</span>
    </div>
    <img src="/img/feed5.jpg" alt="Post Image">
    <p>Venha ajudar nossos animais :)</p>
    

    <!-- Botões de curtida e comentário -->
<div class="interaction-section">
    <button class="like-button"><i class="bi bi-heart"></i> Curtir</button>
    <button class="comment-button" onclick="toggleCommentSection(this)"><i class="bi bi-chat"></i> Comentar</button>
</div>


   <!-- Área de comentários -->
<div class="comment-section" style="display: none;">
    <input type="text" placeholder="Escreva um comentário..." class="comment-input">
    <button class="submit-comment"><i class="bi bi-send"></i></button>
    

    <!-- Espaço para visualizar comentários -->
    <div class="comments-list">
        <div class="comment-item">
            <strong>Nome do Usuário</strong>
            <p>Esse é um comentário de exemplo!</p>
        </div>
        <div class="comment-item">
            <strong>Outro Usuário</strong>
            <p>Mais um comentário aqui!</p>
        </div>
</div>
</div>
</div>
</div>
 <!---------------------------------------------------SCRIPT PARA OS COMENTÁRIOS DA PUBLICAÇÃO-------------------------------------------------------------------------------->
<script>
    document.querySelectorAll('.comment-button').forEach(button => {
        button.addEventListener('click', () => {
            const commentSection = button.closest('.post').querySelector('.comment-section');
            commentSection.style.display = commentSection.style.display === 'none' ? 'flex' : 'none';
        });
    });

    document.querySelectorAll('.submit-comment').forEach(button => {
        button.addEventListener('click', () => {
            const commentInput = button.previousElementSibling;
            if (commentInput.value.trim()) {
                alert(`Comentário enviado: ${commentInput.value}`); // Substitua por sua lógica para enviar o comentário
                commentInput.value = ''; // Limpa o campo de entrada
            } else {
                alert('Digite um comentário antes de enviar.');
            }
        });
    });
</script>

      
<!---------------------------------------------------ESPAÇO PARA AS NOTIFICAÇÕES -------------------------------------------------------------------------------->
<div class="notifications">
    <div class="notification-header">
        <span>Notificações</span>
        <i class="bi bi-bell-fill notification-icon"></i> <!-- Ícone de notificação -->
    </div>

    <!-- notificação 1 -->
    <div class="notification-item">
    <i class="bi bi-person-circle"></i>
        <span>Cão_Sem_Dono fez uma nova publicação.</span>
        <button>Ver</button>
    </div>

     <!-- notificação 2 -->
    <div class="notification-item">
    <i class="bi bi-person-circle"></i>
        <span>Gabrielle_09 fez uma doação no método pix.</span>
        <button>Ver</button>
    </div>
    <!-- Outras notificações -->
</div>


</body>
</html>
