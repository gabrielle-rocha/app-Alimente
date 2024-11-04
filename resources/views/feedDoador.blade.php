<!DOCTYPE html>
<html lang="pt-br">
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


    $(".filter a").click(function(e){
        e.preventDefault();  // Impede a ação padrão do link
        $(this).parent().toggleClass("expanded");  // Alterna a classe 'expanded'
    });

    document.querySelector('.user').addEventListener('click', function() {
    const dropdownMenu = this.querySelector('.dropdown-menu');
    dropdownMenu.style.display = dropdownMenu.style.display === 'flex' ? 'none' : 'flex';
});

    </script>

<script>function showLogoutModal() {
        document.getElementById('logoutModal').style.display = 'flex';
    }

    function closeLogoutModal() {
        document.getElementById('logoutModal').style.display = 'none';
    }
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
    <a href="#" id="search-button"><i class="fa-solid fa-magnifying-glass"></i></a>
    <input type="search" id="search-input" placeholder="Buscar...">
</li>
                <div id="ong-results" class="results-container" style="display: none;"></div>
                <li class="filter">
                <a href="#"><i class="fa-solid fa-hashtag"></i></a>
                <div class="filter-buttons">
                    <button onclick="filterPosts('doenças')">Doenças</button>
                    <button onclick="filterPosts('alimentação')">Alimentação</button>
                    <button onclick="filterPosts('vestimenta')">Vestimenta</button>
                    <button onclick="filterPosts('animais')">Animais</button>
                    <button onclick="filterPosts('')">Todos</button>
                </div>
                </li>
                </ul>

                <div class="user">
                <img src="{{ asset('storage/' . $doador->fotoDoador) }}" alt="Foto do Doador">                
                <div class="dropdown-menu">
                    <a href="/perfilDoador">
                    <i class="fa-solid fa-users"></i> Perfil
                    </a>
                    <button type="button" onclick="showLogoutModal()" class="logout-button">
    <i class="fa-solid fa-right-from-bracket menu-icon"></i> Logout
</button>
                </div>
            </div>

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

                    <li><a href="/geolocalizacao">
                    <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                    <span class="title">Buscar</span>
                    </a></li>
                </ul>
            </div>

                <div class="main_container">
                <h2 class="campanhas-title">Campanhas para você</h2>

                <div class="campanhas">
                @foreach($campanhas as $index => $campanha)
            <div class="card">
            <div class="image">
                <img src="{{ asset('storage/' . $campanha->imagemCampanha) }}" alt="{{ $campanha->nomeCampanha }}">
            </div>
            <div class="content">
                <div class="perfilImgCampanha">
                    @if($campanha->ong->fotoOng)  <!-- Supondo que a ONG tenha um campo fotoPerfil -->
                    <img src="{{ asset('storage/uploads/' . $campanha->ong->fotoOng) }}" alt="Imagem da ONG" />                    @else
                        <img src="/img/default-perfil.jpg" alt="Imagem de Perfil" class="perfil"> <!-- Imagem padrão se não houver -->
                    @endif
                </div>
                <div class="text-content">
                    <div class="title">{{ $campanha->nomeCampanha }}</div>
                    <div class="sub-title">{{ $campanha->assuntoCampanha }}</div>
                </div>
                <div class="bottom">
                    <p>{{ $campanha->descricaoCampanha }}</p>
                    <button class="openCampaignModalBtn" data-index="{{ $index }}">Ver campanha</button>
                </div>
            </div>
        </div><!--card-->
    @endforeach
</div><!--campanhas-->


<!-- Modal de Campanha -->
@foreach($campanhas as $index => $campanha)
<div id="campaignModal{{ $index }}" class="campaign-modal" style="display:none;">
  <div class="campaign-modal-content">
    <div class="campaign-modal-left">
        <img src="{{ asset('storage/' . $campanha->imagemCampanha) }}" alt="{{ $campanha->nomeCampanha }}" class="campaign-modal-img">
        <button class="campaign-profile-btn">Visitar perfil da ONG autora</button>
    </div>
    <div class="campaign-modal-right">
        <h1 class="campaign-modal-title">{{ $campanha->nomeCampanha }}</h1>
        <h3 class="campaign-modal-subtitle">{{ $campanha->assuntoCampanha }}</h3>
        <p class="campaign-modal-description">{{ $campanha->descricaoCampanha }}</p>
        <h2 class="campaign-highlight-title">Período de Recolha</h2>
        <p class="campaign-period">{{$campanha->dataInicioCampanha}} a {{$campanha->dataFimCampanha}}</p>
    </div>
    <span class="campaign-close-btn">&times;</span>
  </div>
</div>
@endforeach
    <div class="feed-container">
    
    @foreach($postagens as $postagem)
    <div class="card-postagem" data-hashtags="{{ strtolower($postagem->hashtags) }}">
        <div class="top">
            <div class="userDetails">
                <div class="profileImg">
                @if($postagem->ong->fotoOng)  <!-- Supondo que a ONG tenha um campo fotoPerfil -->
                    <img src="{{ asset('storage/uploads/' . $postagem->ong->fotoOng) }}" alt="Imagem da ONG" class="cover"/>                    @else
                    @endif
                </div>
                <h3>{{ $postagem->ong->nomeUsuarioOng }}<br>
                    <span>Ong</span>
                </h3>
            </div>
            <div class="dot">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </div>
        </div>
        <div class="imgBg">
        @if($postagem->imagem)
                <img src="{{ asset('storage/' . $postagem->imagem) }}" alt="Postagem">
            @endif        
        </div>
        <div class="btns">
            <div class="left">
            <img class="heart" src="/img/coracao.png" onclick="likeButton()">
            <img src="/img/comentario.webp" alt="">
                <img src="/img/dinheiro.png" alt="" onclick="showPixModal('{{ $postagem->id }}')">
            </div>
        </div>
        <h4 class="likes">{{$postagem->numeroCurtidas}} curtidas</h4>
        <h4 class="message">
        <b>{{ $postagem->ong->nomeUsuario }}</b> {{ $postagem->conteudo }} <span>{{$postagem->hashtags}}</span>        
        </h4>
        <h4 class="comments">Ver todos os {{$postagem->comentariosPostagem}} comentários</h4>
        <div class="addComments">
            <div class="userImg">
            <img src="{{ asset('storage/' . $doador->fotoDoador) }}" alt="Foto do Doador">                
            </div>
            <input type="text" class="text" placeholder="Adicionar um comentário...">
        </div>
        <div class="postTime" data-post-time="{{ $postagem->dataPostagem }}">
    Há {{ $postagem->dataPostagem->diffForHumans() }}
</div>

</div>
@endforeach

<!-- Modal -->
<div id="pixModal" class="modal-pix">
    <div class="modal-content-pix">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Chave Pix</h2>
        <img id="qrcode" src="" alt="QR Code" style="width: 200px; height: 200px;"/>
        <p id="pixKey"></p>
        <button id="closeButton" onclick="closeModal()">Fechar</button> <!-- Botão de fechar -->

    </div>
</div>

<!-- Modal de Confirmação de Logout -->
<div id="logoutModal" class="modal-logout" style="display: none;">
    <div class="modal-content-logout">
        <h3>Confirmar Logout</h3>
        <p>Você tem certeza de que deseja sair?</p>
        <form action="{{ route('logout') }}" method="POST" id="logoutForm" style="display: inline;">
            @csrf
            <button type="submit" class="confirm-button">Confirmar</button>
        </form>
        <button type="button" onclick="closeLogoutModal()" class="cancel-button">Cancelar</button>
    </div>
</div>

<div id="commentModal" class="modal">
    
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    
    <div class="modal-left">
    @foreach($postagens as $postagem)
    @if($postagem->imagem)
        <img src="{{ asset('storage/' . $postagem->imagem) }}" alt="Postagem">
    @endif
@endforeach
            </div>
    
    <div class="modal-right">
      <h3>Comentários</h3>
      <div class="comments-section" id="comments-section">
        <!-- Comentários serão adicionados aqui -->
      </div>
      
      <div class="addComments-modal">
        <input type="text" class="text-modal" placeholder="Adicionar um comentário..." id="comment-input">
        <button type="button" class="send-btn" onclick="addComment()">Enviar</button>
      </div>
    </div>
  </div>
</div>

<div class="container-right">
    <!-- Conteúdo da postagem ou outro tipo de conteúdo -->
    <h2>Olá, {{$doador->nomeDoador}}</h2>
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
    <script src="/js/curtida.js"></script>
    <script src="/js/hora.js"></script>
    <script src="/js/busca.js"></script>
    <script src="/js/pix.js"></script>

    <script>
    const baseUrl = "{{ asset('storage/uploads') }}";
</script>

    <script>
    // Abre o modal ao clicar no ícone de comentário
    document.querySelector(".btns .left img[src='/img/comentario.webp']").addEventListener("click", function () {
        document.getElementById("commentModal").style.display = "block";
        loadComments(); // Carregar comentários ao abrir o modal
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

    // Função para adicionar comentário
    function addComment() {
        const commentInput = document.getElementById('comment-input');
        const commentText = commentInput.value.trim();
        if (commentText) {
            const doador = {
                nome: '<?= auth()->user()->nomeUsuarioDoador ?>', // Substitua pela variável que contém o nome do doador logado
                foto: '{{ asset('storage/' . auth()->user()->fotoDoador) }}' // Usa o mesmo método para obter a URL da foto
            };
            const commentSection = document.getElementById('comments-section');
            
            // Criar elemento de comentário
            const commentDiv = document.createElement('div');
            commentDiv.className = 'comment';
            commentDiv.innerHTML = `
                <img src="${doador.foto}" alt="Foto de perfil" class="comment-profile-img">
                <div class="comment-content">
                    <b>${doador.nome}:</b> ${commentText}
                    <div class="comment-actions">
                        <img src="/img/coracao.png" alt="Curtir" class="heart-comment" data-liked="false">
                        <span class="likes-count">0 curtidas</span>
                    </div>
                </div>
            `;
            commentSection.appendChild(commentDiv);

            // Limpar o input
            commentInput.value = '';
        }
    }

    // Função para curtir um comentário
    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('heart-comment')) {
            const icon = event.target;
            const isLiked = icon.getAttribute('data-liked') === 'true';

            if (!isLiked) {
                let likesCount = icon.nextElementSibling;
                let currentLikes = parseInt(likesCount.textContent);
                likesCount.textContent = (currentLikes + 1) + ' curtidas';
                icon.classList.add("liked");
                icon.setAttribute('data-liked', 'true'); // Marca o comentário como curtido
            }
        }
    });

    // Função para carregar comentários (pode ser adaptada para carregar de um banco de dados)
    function loadComments() {
        // Aqui você pode implementar uma chamada AJAX para buscar comentários do banco de dados
        // ou simplesmente renderizar comentários estáticos para demonstração.
    }

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

<script>
function filterPosts(hashtag) {
    const posts = document.querySelectorAll('.card-postagem');
    
    posts.forEach(post => {
        const postHashtags = post.getAttribute('data-hashtags');
        
        if (hashtag === "" || postHashtags.includes(hashtag.toLowerCase())) {
            post.style.display = "block"; // Mostra a postagem
        } else {
            post.style.display = "none"; // Oculta a postagem
        }
    });
}
</script>



</body>
</html>