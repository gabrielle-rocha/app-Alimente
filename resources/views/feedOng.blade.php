<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ong | Alimente</title>

   <link rel="stylesheet" href="/css/feedOng.css">
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <!--<script src="https://code.jquery.com/jquery-3.4.1.js"></script>-->
    
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
                <img src="{{ asset('storage/uploads/' . $ong->fotoOng) }}" alt="Imagem da ONG" />
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
                    <div class="row">
                    <button data-id="{{ $campanha->idCampanha }}" class="edit-button"><i class="fa-regular fa-pen-to-square"></i>Editar campanha</button>
                    <button data-id="{{ $campanha->idCampanha }}" class="delete-button"><i class="fa-solid fa-circle-xmark"></i>Excluir</button>
                    </div>
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

<!-- Modal de edição de campanha -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <div class="modal-left">
            <h1>Atribua uma nova imagem à sua campanha</h1>
            <label for="edit-imagemCampanha" class="file-label">
                <i class="fa fa-upload" aria-hidden="true"></i> Clique aqui para adicionar uma nova imagem
            </label>
            <input type="file" id="edit-imagemCampanha" name="imagemCampanha" class="imagemCampanha" accept="image/*">
            <div id="edit-image-preview" class="edit-image-preview"></div>
        </div>
        <div class="modal-right">
        <form id="editCampanhaForm" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Método para atualização -->
                <input type="hidden" id="edit-idCampanha" name="idCampanha">
                <input type="hidden" id="edit-idOng" name="idOng" value="{{ auth()->user()->idOng }}">

                <label for="edit-campaign-name">Nome da Campanha:</label>
                <input type="text" id="edit-campaign-name" name="nomeCampanha" placeholder="Nome da Campanha" required>

                <label for="edit-campaign-subject">Assunto:</label>
                <input type="text" id="edit-campaign-subject" name="assuntoCampanha" placeholder="Assunto" required>

                <label for="edit-campaign-description">Descrição:</label>
                <textarea id="edit-campaign-description" name="descricaoCampanha" placeholder="Descrição da campanha" required></textarea>

                <label for="edit-start-date">Data de Início:</label>
                <input type="date" id="edit-start-date" name="dataInicioCampanha" required>

                <label for="edit-end-date">Data de Fim:</label>
                <input type="date" id="edit-end-date" name="dataFimCampanha" required>

                <div class="modal-buttons">
                    <button type="button" id="editCancelBtn" class="cancel">Cancelar</button>
                    <button type="submit" class="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--modal de deletar campanha
<div id="deleteModal" style="display: none;">
    <div class="modal-content">
        <p>Tem certeza de que deseja excluir esta campanha?</p>
        <button id="confirmDeleteBtn">Excluir</button>
        <button id="cancelDeleteBtn">Cancelar</button>
    </div>
</div>-->
<div id="deleteModal" class="modal-delete">
    <div class="modal-content-delete">
        <h2>Tem certeza que deseja excluir esta campanha?</h2>
        <p id="delete-campaign-name">Nome da Campanha:</p>
        <form id="deleteCampanhaForm" method="POST" action="">
            @csrf
            @method('DELETE')
            <input type="hidden" id="delete-idCampanha" name="idCampanha">
            <input type="hidden" id="delete-idOng" name="idOng" value="{{ auth()->user()->idOng }}">
            <div class="modal-buttons-delete">
                <button type="button" id="deleteCancelBtn" class="cancel">Cancelar</button>
                <button type="submit" class="delete-campaign">Excluir</button>
            </div>
        </form>
    </div>
</div>

<div class="success-message"></div> <!-- Mensagem de sucesso -->

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
$(document).ready(function() {
    // Abre o modal de exclusão quando o botão de excluir é clicado
    $(document).on('click', '.delete-button', function() {
        const idCampanha = $(this).data('id');
        $('#delete-campaign-name').text('Nome da Campanha: ' + $(this).closest('.content').find('.title').text());
        $('#delete-idCampanha').val(idCampanha);
        $('#deleteCampanhaForm').attr('action', `/campanha/${idCampanha}`); // Define a URL de ação
        $('#deleteModal').show();
    });

    $('#deleteCampanhaForm').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST', // O Laravel trata o método DELETE com um POST contendo o _method
            data: $(this).serialize(), // Usa serialize para enviar os dados do formulário
            success: function(response) {
                $('.success-message').text('Campanha excluída com sucesso!').show();

                // Oculta a mensagem após 3 segundos
                setTimeout(function() {
                    $('.success-message').fadeOut();
                }, 3000);

                $('#deleteModal').hide();
                location.reload(); // Atualiza a página
            },
            error: function(response) {
                const errorMessage = response.responseJSON ? response.responseJSON.message : 'Erro desconhecido';
                alert('Erro ao excluir campanha: ' + errorMessage);
            }
        });
    });

    $('#deleteCancelBtn').click(function() {
        $('#deleteModal').hide();
    });

    $(window).click(function(event) {
        if ($(event.target).is('#deleteModal')) {
            $('#deleteModal').hide();
        }
    });
});
</script>

<!-- Código JavaScript e AJAX para atualização de campanha -->
<script>
$(document).ready(function() {
    // Abrir o modal de edição com os dados da campanha
    $('.edit-button').click(function() {
        const id = $(this).data('id');
        
        // Preencher os dados do formulário de edição usando AJAX
        $.get(`/campanha/${id}`, function(data) {
            $('#edit-idCampanha').val(data.idCampanha);
            $('#edit-campaign-name').val(data.nomeCampanha);
            $('#edit-campaign-subject').val(data.assuntoCampanha);
            $('#edit-campaign-description').val(data.descricaoCampanha);
            $('#edit-start-date').val(data.dataInicioCampanha);
            $('#edit-end-date').val(data.dataFimCampanha);
            $('#editModal').css('display', 'flex');
        });
    });

    $('#edit-imagemCampanha').on('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#edit-image-preview').html(`<img src="${e.target.result}" alt="Pré-visualização da imagem" style="max-width: 100%; max-height: 300px;">`);
            };
            reader.readAsDataURL(file);
        } else {
            $('#edit-image-preview').empty(); // Limpa a pré-visualização se nenhum arquivo for selecionado
        }
    });

    // Submissão do formulário de edição via AJAX
    $('#editCampanhaForm').submit(function(e) {
        e.preventDefault();
        const id = $('#edit-idCampanha').val();
        const formData = new FormData(this);

        $.ajax({
            url: `/campanha/${id}`,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-HTTP-Method-Override': 'PUT', // Método PUT simulado
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                alert('Campanha atualizada com sucesso!');

                // Atualizar a imagem no modal e fora dele com cache-busting
                if (response.imagemCampanha) {
                    const timestamp = new Date().getTime(); // Gera um timestamp
                    const newImageSrc = `/storage/${response.imagemCampanha}?t=${timestamp}`;

                    // Atualizar pré-visualização no modal
                    $('#edit-image-preview').html(`<img src="${newImageSrc}" alt="Pré-visualização da imagem" style="max-width: 100%; max-height: 300px;">`);

                    // Atualizar a imagem principal fora do modal
                    $(`#campaign-image-${id}`).attr('src', newImageSrc);
                }

                // Fechar o modal após a atualização
                $('#editModal').hide();
            },
            error: function(response) {
                alert('Erro ao atualizar campanha.');
            }
        });
    });

    // Fechar o modal ao clicar no botão de cancelar
    $('#editCancelBtn').click(function() {
        $('#editModal').css('display', 'none'); // Ocultar o modal
    });

    // Fechar o modal ao clicar fora do conteúdo
    $(window).click(function(event) {
        if ($(event.target).is('#editModal')) {
            $('#editModal').css('display', 'none');
        }
    });
});
</script>


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