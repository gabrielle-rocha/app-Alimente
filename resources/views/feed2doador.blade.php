<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doador - Alimente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">

   <!--FONTES-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
    <style>
        .feed {
            width: 100%; /* Continua ocupando 70% da largura */
            height: calc(100vh - 20px); /* Altura total da tela menos o padding */
            box-sizing: border-box;
            overflow-y: auto; /* Permite rolagem vertical */
            background-color: #ffffff;
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            margin-left: 155px;
            
        }
        .post {
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            width: 60%;
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

        /publicação/
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
                
        /*organiza os botões */
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
            font-size: 20px; /* Tamanho do ícone */
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
            margin-top: 10px; /* Espaçamento acima da seção */
        }

        .interaction-section button {
            background: none;
            border: none;
            color: black; 
            cursor: pointer;
            font-size: 18px; 
            margin-right: 15px; /* Espaçamento entre os botões */
        }

        .interaction-section button i {
            margin-right: 5px; /* Espaçamento entre o ícone e o texto */
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Quicksand', sans-serif;
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
       /* Navbar */
       .nav {
            width: 300px;
            height: 100vh;
            background: rgba(46, 139, 87, 1);
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
            font-size: 70%;
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
        <div class="nav">
        <div class="logo">
            <img src="/img/alimentebranco.png" alt="Alimente Logo">
        </div>
        
        <div class="options">
            <a href="/feed2doador"><i class="bi bi-house-door-fill"></i> Página Inicial</a>
            <a href="#" id="pesquisa"><i class="bi bi-search"></i></i>Pesquisar</a>
            <a href="#"><i class="bi bi-geo-alt-fill"></i></i> Buscar</a>
        </div>

        <div class="perfil">
            <div class="foto">
           <i class="bi bi-person-circle"></i>
            </div>
            <a  href="editarperfildoador" class="nomeOng">Doador_01</a>
            <div class="maisOpcoes">
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </div>
    </div>


        <!-- Main Content -->
        <div class="main-content">
            <!-- Barra de Pesquisa -->
            <div class="search-section" id="search-section">
                <input type="text" placeholder="Digite para pesquisar..." style="width: 50%; padding: 15px; border-radius: 100px;  font-family: Arial, sans-serif; font-size:20px; margin-left: 355px; " >
                <i class="fa fa-search"></i>
            </div>

            <div class="feed">

        
<!-- PUBLICAÇÃO 1-->
       <div class="post">
   <div class="post-header">
       <img src="/img/user.png" alt="User Image">
       <span>ongesperanca</span>
   </div>
   <img src="/img/agua.jpg" alt="Post Image">
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
       <img src="/img/user.png" alt="User Image">
       <span>AlmaeCoracao</span>
   </div>
   <img src="/img/cao.jpg" alt="Post Image">
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
       <img src="/img/user.png" alt="User Image">
       <span>AlmasCaridosa</span>
   </div>
   <img src="/img/comida.jpg" alt="Post Image">
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
       <img src="/img/user.png" alt="User Image">
       <span>CuidadocomVidas</span>
   </div>
   <img src="/img/diario.jpeg" alt="Post Image">
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
       <img src="/img/user.png" alt="User Image">
       <span>Cão_Sem_Dono</span>
   </div>
   <img src="/img/sbt.jpeg" alt="Post Image">
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
               alert(Comentário enviado: ${commentInput.value}); // Substitua por sua lógica para enviar o comentário
               commentInput.value = ''; // Limpa o campo de entrada
           } else {
               alert('Digite um comentário antes de enviar.');
           }
       });
   });
</script>
              
               
                
        </div>

        <!-- Notifications -->
        <div class="notifications">
            <h2>Sugestões para você</h2>
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