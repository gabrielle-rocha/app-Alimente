<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doador | Alimente</title>

   <link rel="stylesheet" href="/css/doador.css">
   <link rel="stylesheet" href="/css/swiper-bundle.min.css">
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
                <a href="#"><i class="fa-solid fa-hashtag"></i></a>
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
                <h2 class="campanhas-title">Campanhas para você</h2>

                <div class="campanhas">
                <div class="card">
    <div class="image">
        <img src="/img/campanha exemplo.jpg" alt="">
    </div>
    <div class="content">
        <div class="perfilImgCampanha">
            <img src="/img/exemplo-perfil.jpg" alt="Imagem de Perfil" class="perfil">
        </div>
        <div class="text-content">
            <div class="title">Campanha exemplo</div>
            <div class="sub-title">assunto da campanha</div>
        </div>
        <div class="bottom">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos architecto placeat officia recusandae vel odit facere deserunt sed laudantium possimus! Sapiente rerum animi incidunt excepturi soluta quam perferendis aut aspernatur.</p>
            <button id="openCampaignModalBtn">Ver campanha</button>
        </div>
    </div>
</div><!--card-->

                    <div class="card">
                        <div class="image">
                            <img src="/img/campanha exemplo5.jpg" alt="">
                        </div>
                        <div class="content">
        <div class="perfilImgCampanha">
            <img src="/img/exemplo-perfil.jpg" alt="Imagem de Perfil" class="perfil">
        </div>
        <div class="text-content">
            <div class="title">Campanha exemplo</div>
            <div class="sub-title">assunto da campanha</div>
        </div>
                            <div class="bottom">

                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos architecto placeat officia recusandae vel odit facere deserunt sed laudantium possimus! Sapiente rerum animi incidunt excepturi soluta quam perferendis aut aspernatur.</p>
                                <button>Ver campanha</button>
                            </div>
                        
                        </div>

                    </div><!--card-->

                    <div class="card">
                        <div class="image">
                            <img src="/img/campanha exemplo2.jpg" alt="">
                        </div>
                        <div class="content">
        <div class="perfilImgCampanha">
            <img src="/img/exemplo-perfil.jpg" alt="Imagem de Perfil" class="perfil">
        </div>
        <div class="text-content">
            <div class="title">Campanha exemplo</div>
            <div class="sub-title">assunto da campanha</div>
        </div>
                            <div class="bottom">

                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos architecto placeat officia recusandae vel odit facere deserunt sed laudantium possimus! Sapiente rerum animi incidunt excepturi soluta quam perferendis aut aspernatur.</p>
                                <button>Ver campanha</button>
                            </div>
                        
                        </div>

                    </div><!--card-->

                    <div class="card">
                        <div class="image">
                            <img src="/img/campanha exemplo4.jpg" alt="">
                        </div>
                        <div class="content">
        <div class="perfilImgCampanha">
            <img src="/img/exemplo-perfil.jpg" alt="Imagem de Perfil" class="perfil">
        </div>
        <div class="text-content">
            <div class="title">Campanha exemplo</div>
            <div class="sub-title">assunto da campanha</div>
        </div>
                            <div class="bottom">

                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos architecto placeat officia recusandae vel odit facere deserunt sed laudantium possimus! Sapiente rerum animi incidunt excepturi soluta quam perferendis aut aspernatur.</p>
                                <button>Ver campanha</button>
                            </div>
                        
                        </div>

                    </div><!--card-->

                     <div class="card">
                        <div class="image">
                            <img src="/img/campanha exemplo3.jpg" alt="">
                        </div>
                        <div class="content">
        <div class="perfilImgCampanha">
            <img src="/img/exemplo-perfil.jpg" alt="Imagem de Perfil" class="perfil">
        </div>
        <div class="text-content">
            <div class="title">Campanha exemplo</div>
            <div class="sub-title">assunto da campanha</div>
        </div>
                            <div class="bottom">

                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos architecto placeat officia recusandae vel odit facere deserunt sed laudantium possimus! Sapiente rerum animi incidunt excepturi soluta quam perferendis aut aspernatur.</p>
                                <button>Ver campanha</button>
                            </div>
                        
                        </div>

                    </div><!--card-->

                </div><!--campanhas-->

<!-- Modal de Campanha -->
<div id="campaignModal" class="campaign-modal">
  <div class="campaign-modal-content">
    <div class="campaign-modal-left">
      <img src="/img/campanha exemplo3.jpg" alt="Imagem da ONG" class="campaign-modal-img">
      <button class="campaign-profile-btn">Visitar perfil da ONG autora</button>
    </div>
    <div class="campaign-modal-right">
      <h1 class="campaign-modal-title">Título da Campanha</h1>
      <h3 class="campaign-modal-subtitle">Subtítulo da Campanha</h3>
      <p class="campaign-modal-description">Aqui vai um exemplo de descrição da campanha que pode ser um pouco mais longa.</p>
      <h2 class="campaign-highlight-title">Período de Recolha</h2>
      <p class="campaign-period">09/09/2024 a 30/09/2024</p>
    </div>
    <span class="campaign-close-btn">&times;</span>
  </div>
</div>

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

<!-- Modal para comentários -->
<div id="commentModal" class="modal">
  <div class="modal-content">
    <!-- Botão de fechar dentro do modal -->
    <span class="close" onclick="closeModal()">&times;</span>
    
    <div class="modal-left">
      <img src="/img/exemplo.jpg" alt="Postagem" class="post-image">
    </div>
    
    <div class="modal-right">
      <h3>Comentários</h3>
      <div class="comments-section">
        <!-- Exemplo de comentário com opção de curtir e foto do usuário -->
        <div class="comment">
          <img src="/img/exemplo-perfil.jpg" alt="Foto de perfil" class="comment-profile-img">
          <div class="comment-content">
            <b>usuario_123:</b> Que legal essa postagem!
            <div class="comment-actions">
              <img src="/img/coracao.png" alt="Curtir" class="heart-comment" data-liked="false">
              <span class="likes-count">0 curtidas</span>
            </div>
          </div>
        </div>
        <div class="comment">
          <img src="/img/exemplo-perfil.jpg" alt="Foto de perfil" class="comment-profile-img">
          <div class="comment-content">
            <b>pet_lover:</b> Parabéns pela iniciativa!
            <div class="comment-actions">
              <img src="/img/coracao.png" alt="Curtir" class="heart-comment" data-liked="false">
              <span class="likes-count">2 curtidas</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Input de comentário do modal fixado no rodapé -->
      <div class="addComments-modal">
        <input type="text" class="text-modal" placeholder="Adicionar um comentário...">
        <button type="button" class="send-btn">Enviar</button>
      </div>
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
    <script src="/js/campanhaDoador.js"></script>

    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints:{
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

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

    <script>
        // Abre o modal ao clicar no ícone de comentário
document.querySelector(".btns .left img[src='/img/comentario.webp']").addEventListener("click", function () {
  document.getElementById("commentModal").style.display = "block";
});

// Fecha o modal
function closeModal() {
  document.getElementById("commentModal").style.display = "none";
}

// Fecha o modal ao clicar fora dele
window.onclick = function (event) {
  const modal = document.getElementById("commentModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Função para curtir um comentário (apenas uma vez por comentário)
const heartIcons = document.querySelectorAll(".heart-comment");

heartIcons.forEach(icon => {
  icon.addEventListener("click", function () {
    const isLiked = this.getAttribute('data-liked') === 'true';

    if (!isLiked) {
      let likesCount = this.nextElementSibling;
      let currentLikes = parseInt(likesCount.textContent);
      likesCount.textContent = (currentLikes + 1) + ' curtidas';
      this.classList.add("liked");
      this.setAttribute('data-liked', 'true'); // Marca o comentário como curtido
    }
  });
});
    </script>

<script>
$('.card').hover(function() {
    var card = $(this);

    // Se o card já está ativo, feche-o
    if (card.hasClass("active")) {
        card.find('.bottom').slideUp(function() {
            card.removeClass("active");
        });
        card.find('.perfilImgCampanha').css({
            transform: 'translateY(0)', /* Volta a imagem de perfil ao estado inicial */
            transition: 'transform 0.3s ease'
        });
    } else {
        // Feche todos os outros cards e suas animações
        $('.card').removeClass("active");
        $('.card .bottom').slideUp();

        // Ative o card atual e faça a animação
        card.addClass("active");
        card.find('.bottom').stop().slideDown();
        card.find('.perfilImgCampanha').css({
            transform: 'translateY(-20px)', /* Move a imagem de perfil para cima */
            transition: 'transform 0.3s ease'
        });
    }
});
</script>

</body>
</html>