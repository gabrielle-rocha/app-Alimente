<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doador | Alimente</title>

   <link rel="stylesheet" href="/css/doador.css">
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $(".hamburguer").click(function(){
                $(".wrapper").toggleClass("collapse");
                
            });
        });

        $(document).ready(function(){
    $(".search a").click(function(e){
        e.preventDefault();  // Impede a ação padrão do link
        $(this).parent().toggleClass("expanded");  // Alterna a classe 'expanded'
        $(this).siblings('input[type="search"]').focus();  // Foca no input quando ele aparece
    });


    $(".filter a").click(function(e){
        e.preventDefault();  // Impede a ação padrão do link
        $(this).parent().toggleClass("expanded");  // Alterna a classe 'expanded'
    });
});

    </script>

    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="top_navbar">
            <div class="hamburguer">
                    <div></div>
                    <div></div>
                    <div></div>
            </div>
            <div class="top_menu">

                <div class="logo">
                <img src="/img/alimente.png" alt="">
                </div>

                <ul>
                <li class="search">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <input type="search" placeholder="Buscar...">
                </li>
                <li class="filter">
                <a href="#"><i class="fa-solid fa-filter"></i></a>
                <div class="filter-buttons">
                    <button>Doenças</button>
                    <button>Alimentação</button>
                    <button>Vestimenta</button>
                    <button>Animais</button>
                </div>
                </li>
                </ul>
            </div>
        </div>
        
            <div class="sidebar">
                <ul>
                    <li><a href="#">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="title">Início</span>
                    </a></li>

                    <li><a href="/perfilDoador">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <span class="title">Perfil</span>
                    </a></li>

                    <li><a href="#">
                    <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                    <span class="title">Buscar</span>
                    </a></li>
                </ul>
            </div>

            <div class="main_container">
    <div class="feed-container">
        <div class="card-postagem">
            <div class="top">
                <div class="userDetails">
                    <div class="profileImg">
                        <img src="/img/exemplo-perfil.jpg" alt="" class="cover">
                    </div>
                    <h3>patinha_do_amor<br>
                        <span>Ong</span>
                    </h3>
                </div>
                <div class="dot">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                </div>
            </div>
            <div class="imgBg">
                <img src="/img/exemplo.jpg" alt="" class="cover">
            </div>
            <div class="btns">
                <div class="left">
                    <img src="/img/coracao.png" alt="" class="heart" onclick="likeButton()">
                    <img src="/img/comentario.webp" alt="">
                    <img src="/img/dinheiro.png" alt="">
                </div>
            </div>
            <h4 class="likes">0 curtidas</h4>
            <h4 class="message">
                <b>patinha_do_amor</b> URGENTE, RS! <span>#alimentos</span> <span>#animais</span>
            </h4>
            <h4 class="comments">Ver todos os 3 comentários</h4>
            <div class="addComments">
                <div class="userImg">
                    <img src="/img/exemplo-perfil.jpg" alt="" class="cover">
                </div>
                <input type="text" class="text" placeholder="Adicionar um comentário...">
            </div>
            <div class="postTime">Há 5 horas</div>
        </div>
    </div>
</div>

<div class="container-right">
    <!-- Conteúdo da postagem ou outro tipo de conteúdo -->
    <h2>Olá, Isabel</h2>
    <h4>Quem vamos ajudar hoje?</h4>
     
    <div class="mini-card">
        <div class="profile-image">
            <img src="/img/exemplo-perfil.jpg" alt="Perfil">
        </div>
        <div class="info">
            <h4>patinha_do_amor</h4>
            <p>Recomendado</p>
        </div>
    </div>

    <div class="mini-card">
        <div class="profile-image">
            <img src="/img/exemplo-perfil2.jpg" alt="Perfil">
        </div>
        <div class="info">
            <h4>felicidade_animal</h4>
            <p>Recomendado</p>
        </div>
</div>

<div class="mini-card">
        <div class="profile-image">
            <img src="/img/exemplo-perfil3.jpg" alt="Perfil">
        </div>
        <div class="info">
            <h4>auxiliando_maes_08</h4>
            <p>Recomendado</p>
        </div>
</div>

<div class="mini-card">
        <div class="profile-image">
            <img src="/img/exemplo-perfil4.jpg" alt="Perfil">
        </div>
        <div class="info">
            <h4>onco_babys</h4>
            <p>Recomendado</p>
        </div>
</div>

</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        function likeButton(){
            let heart = document.querySelector('.heart');
            let likes = document.querySelector('.likes');
            if(heart.src.match("/img/coracao.png")){
                heart.src = "/img/coracao-vermelho.png";
                likes.innerHTML = "1 curtidas";
            } else {
                heart.src = "/img/coracao.png";
                likes.innerHTML = "0 curtidas";
            }
        }
    </script>
</body>
</html>