<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ong | Alimente</title>

   <link rel="stylesheet" href="/css/feedOng.css">
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
    <script>
        $(document).ready(function(){
            $(".hamburguer").click(function(){
                $(".wrapper").toggleClass("collapse");
                
            });
            document.querySelector('.user').addEventListener('click', function() {
    const dropdownMenu = this.querySelector('.dropdown-menu');
    dropdownMenu.style.display = dropdownMenu.style.display === 'flex' ? 'none' : 'flex';
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

                <div class="user">
                <img src="/img/exemplo-perfil5.jpg" alt="Foto do perfil">
                <div class="dropdown-menu">
                    <a href="/perfilOng">
                    <i class="fa-solid fa-users"></i> Perfil
                    </a>
                    <a href="#logout">
                    <i class="fa-solid fa-right-from-bracket menu-icon"></i> Logout
                    </a>
                </div>
            </div>

            </div>
        </div>
        
            <div class="sidebar">
                <ul>
                    <li><a href="/feedOng">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="title">Início</span>
                    </a></li>

                    <li><a href="/perfilOng">
                    <span class="icon"><i class="fa-solid fa-users"></i></span>
                    <span class="title">Perfil</span>
                    </a></li>

                    <li><a href="/prestarContaOng">
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
    @if($campanhas->count() === 0)
        <p id="no-campaigns-message">Você ainda não possui campanhas na plataforma.</p>
    @endif

    @foreach ($campanhas as $campanha)
        <div class="card">
            <div class="image">
                <img src="{{ asset('storage/' . $campanha->imagemCampanha) }}">
            </div>
            <div class="content">
                <div class="title">{{ $campanha->nomeCampanha }}</div>
                <div class="sub-title">{{ $campanha->assuntoCampanha }}</div>
                <div class="bottom">
                    <p>{{ $campanha->descricaoCampanha }}</p>
                    <button data-id="{{ $campanha->idCampanha }}" class="edit-button"><i class="fa-regular fa-pen-to-square"></i>Editar campanha</button>
                </div>
            </div>
        </div>
    @endforeach
</div><!--campanhas-->

                <div class="post-convite">
                    <div class="titulo">Que tal publicar suas causas?</div>
                    <p>Publique suas causas e amplie o alcance da sua instituição, conectando-se com potenciais doadores de forma atrativa e interativa. Ao compartilhar seu trabalho de maneira visual e envolvente, você não só capta a atenção de mais pessoas, mas também promove um diálogo direto com seu público. Receba comentários, curtidas e feedbacks que podem ajudar a fortalecer sua causa e aumentar o impacto das suas ações. Pronto para dar o primeiro passo e transformar sua campanha em um sucesso?</p>
                         <button id="openPostModalBtn"><i class="fa fa-plus" aria-hidden="true"></i>Nova Publicação</button>
                </div><!--post-convite-->
            </div>

<!--modais-->

<!-- Modal de campanha -->
<div id="modal" class="modal">
    <div class="modal-content">
        <div class="modal-left">
            <h1>Atribua uma imagem à sua campanha</h1>
            <label for="imagemCampanha" class="file-label">
                <i class="fa fa-upload" aria-hidden="true"></i> Clique aqui para adicionar uma imagem
            </label>
            <input type="file" id="imagemCampanha" name="imagemCampanha" class="imagemCampanha" accept="image/*">
            <div id="image-preview" class="image-preview"></div>
        </div>
        <div class="modal-right">
            <form id="campanhaForm" action="{{ route('campanha.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="idCampanha" name="idCampanha">
                <input type="hidden" name="idOng" value="{{ auth()->user()->idOng }}">

                <label for="campaign-name">Nome da Campanha:</label>
                <input type="text" id="campaign-name" name="nomeCampanha" placeholder="Nome da Campanha" required>

                <label for="campaign-subject">Assunto:</label>
                <input type="text" id="campaign-subject" name="assuntoCampanha" placeholder="Assunto" required>

                <label for="campaign-description">Descrição:</label>
                <textarea id="campaign-description" name="descricaoCampanha" placeholder="Descrição da campanha" required></textarea>

                <label for="start-date">Data de Início:</label>
                <input type="date" id="start-date" name="dataInicioCampanha" required>

                <label for="end-date">Data de Fim:</label>
                <input type="date" id="end-date" name="dataFimCampanha" required>

                <div class="modal-buttons">
                    <button type="button" id="cancelBtn" class="cancel">Cancelar</button>
                    <button type="submit" class="submit">Salvar</button>
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
            <script>
    const csrfToken = "{{ csrf_token() }}";
</script>
</body>
</html>