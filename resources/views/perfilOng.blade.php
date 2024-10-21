<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ong | Alimente</title>

   <link rel="stylesheet" href="/css/perfilOng.css">
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
   <script>
    function changeHeaderImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.querySelector('.header__wrapper header').style.backgroundImage = `url(${e.target.result})`;
        };
        reader.readAsDataURL(file);
    }
}
        $(document).ready(function(){
            $(".hamburguer").click(function(){
                $(".wrapper").toggleClass("collapse");
            });

            // Função para alternar entre os containers
            $('nav ul li a').click(function(e) {
        e.preventDefault();

        // Oculta todos os containers
        $('.content-container').hide();

        // Exibe o container relacionado ao link clicado
        let target = $(this).attr('data-target');
        $(`#${target}`).show();

        // Remove a classe 'active' de todos os links
        $('nav a').removeClass('active');

        // Adiciona a classe 'active' ao link clicado
        $(this).addClass('active');
    });

    // Exibe o container de Causas ao carregar a página
    $('#causas').show();
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
                    <img src="/img/exemplo-perfil5.jpg" alt="">
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

            <div class="header__wrapper">
            <header onclick="document.getElementById('fileInput').click();">
            <i class="fas fa-edit edit-icon"></i>
            </header>
            <input type="file" id="fileInput" accept="image/*" style="display: none;" onchange="changeHeaderImage(event)">
                <div class="cols__container">
                    <div class="left__col">

                        <div class="img__container">
                            <img src="/img/exemplo-perfil5.jpg" alt="">
                            <span></span>
                        </div><!--img__container-->
                        <h2>sempre_juntos</h2>
                        <p>Organização Não Governamental</p>
                        <p>ong@gmail.com</p>

                        <ul class="about">
                            <li><span>0</span>postagens</li>
                            <li><span>0</span>campanhas</li>
                            <li><span>0</span>seguidores</li>
                        </ul>

                        <div class="content">
                            <p>
                               ONG fundada em 2008;<br>
                               4 Representantes;<br>
                                mais de mil famílias auxiliadas ao longo do tempo!
                            </p>

                            <ul>
                                <li><i class="fab fa-twitter"></i></li>
                                <li><i class="fab fa-instagram"></i></li>
                                <li><i class="fab fa-facebook"></i></li>
                                <li><i class="fa fa-qrcode" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div><!--left__col-->

                    <div class="right__col">
                <nav>
                    <ul>
                        <li><a href="#" data-target="causas" class="active">Causas</a></li>
                        <li><a href="#" data-target="campanhas" class="link">Campanhas</a></li>
                        <li><a href="#" data-target="configuracoes" class="link">Configurações</a></li>
                    </ul>
                </nav>

                <!-- Container de Causas -->
                <div id="causas" class="content-container">
                    <div class="photos">
                        <img src="/img/feed1.jpeg" alt="">
                        <img src="/img/feed2.jpg" alt="">
                        <img src="/img/feed3.jpeg" alt="">
                        <img src="/img/feed4.jpg" alt="">
                        <img src="/img/feed5.jpg" alt="">
                    </div>
                </div>

                <!-- Container de Campanhas -->
                <div id="campanhas" class="content-container" style="display:none;">
                    <div class="photos">
                        <img src="/img/campanha exemplo.jpg" alt="">
                        <img src="/img/campanha exemplo2.jpg" alt="">
                        <img src="/img/campanha exemplo3.jpg" alt="">
                        <img src="/img/campanha exemplo4.jpg" alt="">
                        <img src="/img/campanha exemplo5.jpg" alt="">
                    </div>
                </div>

                <!-- Container de Configurações -->
                <div id="configuracoes" class="content-container" style="display:none;">
                    <button id="btn-excluir-conta">Excluir Conta</button>
                    <p>Ação permanente! Ao excluir sua conta, todos os dados serão perdidos.</p>
                </div>
            </div><!--right__col-->

                </div><!--cols__container-->
            </div><!--header__wrapper-->


    <!-- Modal de confirmação de exclusão de conta -->
    <div id="modal-confirmacao" class="modal" style="display:none;">
        <div class="modal-content">
            <p>Tem certeza de que deseja excluir sua conta?</p>
            <button id="cancelar-exclusao">Cancelar</button>
            <button id="confirmar-exclusao">Confirmar</button>
        </div>
    </div>

            <script>
        // Exibe o modal de confirmação
        $('#btn-excluir-conta').click(function(){
            $('#modal-confirmacao').show();
        });

        // Fecha o modal ao cancelar
        $('#cancelar-exclusao').click(function(){
            $('#modal-confirmacao').hide();
        });

        // Exclui a conta (a ação de exclusão pode ser implementada aqui)
        $('#confirmar-exclusao').click(function(){
            alert('Conta excluída!');
            $('#modal-confirmacao').hide();
        });
    </script>
</body>
</html>