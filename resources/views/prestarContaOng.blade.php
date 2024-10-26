<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ong | Alimente</title>
    
    <link rel="stylesheet" href="/css/prestarContaOng.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <script>
        $(document).ready(function(){
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
            <div class="user">
                <img src="/img/exemplo-perfil5.jpg" alt="">
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
            <li><a href="/feedOng"><span class="icon"><i class="fa-solid fa-house"></i></span><span class="title">Início</span></a></li>
            <li><a href="/perfilOng"><span class="icon"><i class="fa-solid fa-users"></i></span><span class="title">Perfil</span></a></li>
            <li><a href="/prestarContaOng"><span class="icon"><i class="fa-solid fa-file-invoice-dollar"></i></span><span class="title">Prestar Conta</span></a></li>
        </ul>
    </div>

    <div class="container">
        <div class="text">
            <h1>Prestação de Contas</h1>
            <p>A plataforma Alimente preza pela segurança de seus doadores e demais usuários, a prestação de contas tem como objetivo comprovar a veracidade de sua organização e nos deixar atualizados sobre as atividades da instituição. Em resposta a uma prestação de contas em dia, a organização recebe um SELO DE VERACIDADE e automáticamente a confiança do público, cumpra sua prestação e garanta sua permanência e veracidade na nossa rede!</p>
        </div>

        <div class="container-content">
            <div class="container-left">
                <h3>Movimentações:</h3>
                <label for="balanco">Balanço Patrimonial:</label>
                <div class="file-upload">
                    <input type="file" id="balanco">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>

                <label for="demonstracao">Demonstração de Resultados:</label>
                <div class="file-upload">
                    <input type="file" id="demonstracao">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
            </div>

            <div class="container-right">
                <h3>Receitas e Despesas:</h3>
                <label for="receitas">Receitas Totais:</label>
                <div class="file-upload">
                    <input type="file" id="receitas">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>

                <label for="despesas">Despesas Totais:</label>
                <div class="file-upload">
                    <input type="file" id="despesas">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
            </div>
        </div>

        <div class="container-fotos">
        <h3>Fotos tiradas referentes à instituição:</h3>
            <div class="row">
                <div class="input-wrapper">
                <input type="file" />
                <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="input-wrapper">
                <input type="file" />
                <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="input-wrapper">
                <input type="file" />
                <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="input-wrapper">
                <input type="file" />
                <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="input-wrapper">
                <input type="file" />
                <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="input-wrapper">
                <input type="file" />
                <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="input-wrapper">
                <input type="file" />
                <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="input-wrapper">
                <input type="file" />
                <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="input-wrapper">
                <input type="file" />
                <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <div class="input-wrapper">
                <input type="file" />
                <i class="fas fa-cloud-upload-alt"></i>
                </div>
            </div>
        </div>

        <div class="buttons">
            <button class="send">Enviar</button>
            <button class="clear">Limpar</button>
        </div>
    </div><!--container-->
</div><!--wrapper-->
</body>
</html>
