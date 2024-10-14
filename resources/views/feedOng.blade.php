<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ong | Alimente</title>

   <link rel="stylesheet" href="/css/feedOng.css">
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

            </div>
        </div>
        
            <div class="sidebar">
                <ul>
                    <li><a href="#">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="title">Início</span>
                    </a></li>

                    <li><a href="/perfilDoador">
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
                <h3>Suas Campanhas</h3>

                <div class="campanhas">
                    <div class="item">1</div>
                    <div class="item">2</div>
                    <div class="item">3</div>
                    <div class="item">4</div>
                    <div class="item">5</div>
                    <div class="item">6</div>
                    <div class="item">1</div>
                    <div class="item">2</div>
                    <div class="item">3</div>
                    <div class="item">4</div>
                    <div class="item">5</div>
                    <div class="item">6</div>
                </div>
            </div>
</body>
</html>