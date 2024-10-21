<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ong | Alimente</title>

   <link rel="stylesheet" href="/css/feedOng.css">
   <link rel="stylesheet" href="/css/swiper-bundle.min.css">
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
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

            </div>
        </div>
        
            <div class="sidebar">
                <ul>
                    <li><a href="#">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="title">Início</span>
                    </a></li>

                    <li><a href="/perfilOng">
                    <span class="icon"><i class="fa-solid fa-users"></i></span>
                    <span class="title">Perfil</span>
                    </a></li>

                    <li><a href="#">
                    <span class="icon"><i class="fa-solid fa-file-invoice-dollar"></i></i></span>
                    <span class="title">Prestar Conta</span>
                    </a></li>
                </ul>
            </div>

            <div class="main_container">

            <div class="header-campanhas">
                <h3>Suas Campanhas</h3>
                <button id="openModalBtn"><i class="fa fa-plus" aria-hidden="true"></i>Adicionar Uma Nova Campanha</button>
            </div>

                <div class="campanhas">
                    <div class="card">
                        <div class="image">
                            <img src="/img/campanha exemplo.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Campanha exemplo</div>
                            <div class="sub-title">
                                assunto da campanha
                            </div>
                            <div class="bottom">

                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos architecto placeat officia recusandae vel odit facere deserunt sed laudantium possimus! Sapiente rerum animi incidunt excepturi soluta quam perferendis aut aspernatur.</p>
                                <button>Ver campanha</button>
                            </div>
                        
                        </div>

                    </div><!--card-->

                    <div class="card">
                        <div class="image">
                            <img src="/img/campanha exemplo5.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="title">Campanha exemplo</div>
                            <div class="sub-title">
                                assunto da campanha
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
                            <div class="title">Campanha exemplo</div>
                            <div class="sub-title">
                                assunto da campanha
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
                            <div class="title">Campanha exemplo</div>
                            <div class="sub-title">
                                assunto da campanha
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
                            <div class="title">Campanha exemplo</div>
                            <div class="sub-title">
                                assunto da campanha
                            </div>
                            <div class="bottom">

                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos architecto placeat officia recusandae vel odit facere deserunt sed laudantium possimus! Sapiente rerum animi incidunt excepturi soluta quam perferendis aut aspernatur.</p>
                                <button>Ver campanha</button>
                            </div>
                        
                        </div>

                    </div><!--card-->

                </div><!--campanhas-->

                <div class="post-convite">
                    <div class="titulo">Que tal publicar suas causas?</div>
                    <p>Publique suas causas e amplie o alcance da sua instituição, conectando-se com potenciais doadores de forma atrativa e interativa. Ao compartilhar seu trabalho de maneira visual e envolvente, você não só capta a atenção de mais pessoas, mas também promove um diálogo direto com seu público. Receba comentários, curtidas e feedbacks que podem ajudar a fortalecer sua causa e aumentar o impacto das suas ações. Pronto para dar o primeiro passo e transformar sua campanha em um sucesso?</p>
                         <button id="openPostModalBtn"><i class="fa fa-plus" aria-hidden="true"></i>Nova Publicação</button>
                </div><!--post-convite-->
            </div>

<!--modais-->

<!--modal nova campanha-->
<div id="modal" class="modal">
        <div class="modal-content">
            <div class="modal-left">
                <h1>Atribua uma imagem a sua campanha</h1>
                <p><span>*</span> atribua um banner, um post ou uma imagem referente ao objetivo da arrecadação.</p>
                <label for="file-upload" class="file-label">
                    <i class="fa fa-upload" aria-hidden="true"></i> Clique aqui para adicionar uma imagem
                </label>
                <input type="file" id="file-upload" class="file-input" accept="image/*">
                <div id="image-preview" class="image-preview">
                    <!-- A imagem será exibida aqui -->
                </div>
            </div>
            <div class="modal-right">
                <form>
                    <label for="campaign-name">Nome da Campanha:</label>
                    <input type="text" id="campaign-name" placeholder="Nome da Campanha">

                    <label for="campaign-subject">Assunto:</label>
                    <input type="text" id="campaign-subject" placeholder="Assunto">

                    <label for="campaign-description">Descrição:</label>
                    <textarea id="campaign-description" placeholder="Descrição da campanha"></textarea>

                    <label for="start-date">Data de Início:</label>
                    <input type="date" id="start-date">

                    <label for="end-date">Data de Fim:</label>
                    <input type="date" id="end-date">

                    <div class="modal-buttons">
                        <button type="button" id="cancelBtn" class="cancel">Cancelar</button>
                        <button type="submit" class="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal post-->
<div id="postModal" class="post-modal">
  <div class="post-modal-content">
    <span class="post-close">&times;</span>

    <!-- Conteúdo do Modal -->
    <div class="post-modal-body">
      <!-- Lado esquerdo - Upload da imagem -->
      <div class="post-left-section">
         <!-- Botão personalizado para upload -->
         <label for="postUploadImage" class="post-image-label">
          <i class="fa fa-cloud-upload" aria-hidden="true"></i> Adicionar Foto
        </label>
        <input type="file" id="postUploadImage" accept="image/*" style="display:none;" />
        <!-- Quadrado onde a imagem será exibida -->
        <div id="imagePreview" class="post-image-preview"></div>
      </div>
      </div>

      <!-- Lado direito - Descrição e hashtags -->
      <div class="post-right-section">
        <label for="postDescription">Descrição</label>
        <textarea id="postDescription" rows="5" placeholder="Adicione uma descrição..."></textarea>

        <!-- Botões de Hashtags -->
        <div class="post-hashtags">
        <button class="hashtag-btn" data-hashtag="#doenças">#doenças</button>
          <button class="hashtag-btn" data-hashtag="#alimentação">#alimentação</button>
          <button class="hashtag-btn" data-hashtag="#vestimenta">#vestimenta</button>
          <button class="hashtag-btn" data-hashtag="#animais">#animais</button>
        </div>

        <!-- Botões de Cancelar e Enviar -->
        <div class="post-action-buttons">
          <button class="post-cancel-btn">Cancelar</button>
          <button class="post-send-btn">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="/js/postOng.js"></script>
<script src="/js/novaCampanha.js"></script>
            <script>
                $('.card').hover(function(){
                    var card = $(this);
                    if(card.hasClass("active")){
                        card.find('.bottom').slideUp(function(){
                            card.removeClass("active");
                        });
                    } else {
                        $('.card').removeClass("active"); // Remove a classe de todos os outros cards
                        $('.card .bottom').slideUp(); // Fecha o conteúdo de todos os outros cards
                        card.addClass("active");
                        card.find('.bottom').stop().slideDown();
                    }
                });

            </script>
</body>
</html>