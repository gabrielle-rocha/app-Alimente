<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doador | Alimente</title>

    <link rel="stylesheet" href="/css/doadorPerfil.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <script>
        $(document).ready(function(){
            // Esconde a tela de Configurações inicialmente
            $(".account-settings").hide();

            // Ao clicar em "Configurações", oculta a tela de conta e exibe as configurações
            $("#configLink").click(function(event){
                event.preventDefault(); // Previne o comportamento padrão do link
                $(".account").hide(); // Esconde configurações de conta
                $(".account-settings").show(); // Mostra as configurações
            });

            // Opção para retornar à tela de conta, se quiser adicionar
            $(".btn-cancel").click(function(event){
                event.preventDefault(); // Previne o comportamento padrão do botão
                $(".account-settings").hide(); // Esconde configurações
                $(".account").show(); // Mostra configurações de conta
            });

            $(".hamburguer").click(function(){
                $(".wrapper").toggleClass("collapse");
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
            <li><a href="/feedDoador">
                <span class="icon"><i class="fa-solid fa-house"></i></span>
                <span class="title">Início</span>
            </a></li>
            <li><a href="#">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <span class="title">Perfil</span>
            </a></li>
            <li><a href="#">
                <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                <span class="title">Buscar</span>
            </a></li>
        </ul>
    </div>

    <div class="container">
        <!-- Seção de Perfil -->
        <div class="profile">
            <div class="profile-header">
                <img src="/img/perfil-exemplo.enc" alt="" class="profile-img">
                <div class="profile-text-container">
                    <h1 class="profle-title">Isabel</h1>
                    <p class="profile-email">isabelenicavalcantedasilva@gmail.com</p>
                    <p class="status">Doador</p>
                </div>
            </div>
            
            <div class="menu">
                <a href="" class="menu-link">
                    <i class="fa-solid fa-circle-user menu-icon"></i> Conta
                </a>
                <a href="" id="configLink" class="menu-link">
                    <i class="fa-solid fa-gear menu-icon"></i> Configurações
                </a>
                <a href="" class="menu-link">
                    <i class="fa-solid fa-right-from-bracket menu-icon"></i> Logout
                </a>
            </div>
        </div>

        <!-- Tela de Configurações de Conta (visível inicialmente) -->
        <form class="account">
            <div class="account-header">
                <h1 class="account-tittle">Configurações de conta</h1>
                <div class="btn-container">
                    <button class="btn-cancel">Cancelar</button>
                    <button class="btn-save">Salvar</button>
                </div>
            </div>

            <div class="account-edit">
                <div class="input-container">
                    <label>Nome:</label>
                    <input type="text" placeholder="Nome">
                </div>
                <div class="input-container">
                    <label>Nome de usuário:</label>
                    <input type="text" placeholder="Nome de usuário">
                </div>
                <div class="input-container">
                    <label>Email:</label>
                    <input type="email" placeholder="Email">
                </div>
            </div>

            <div class="account-edit">
                <div class="input-container">
                    <label>Bio:</label>
                    <textarea name="" id="" placeholder="Biografia"></textarea>
                </div>
            </div>
        </form>

        <!-- Tela de Configurações (inicialmente oculta) -->
        <form class="account-settings">
            <div class="account-header">
                <h1 class="account-tittle">Configurações</h1>
            </div>

            <div class="account-edit">
                <div class="input-container">
                    <label>Excluir Conta:</label>
                    <p class="warning-text">Ao excluir sua conta, todos os seus dados serão permanentemente removidos. Esta ação não pode ser desfeita.</p>
                    <button class="btn-excluir">Excluir Conta</button>
                </div>
            </div>
        </form>

    </div>
</div>

</body>
</html>
