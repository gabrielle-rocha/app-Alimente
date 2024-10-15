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

            <div class="header-campanhas">
                <h3>Suas Campanhas</h3>
                <button><i class="fa fa-plus" aria-hidden="true"></i>Adicionar Uma Nova Campanha</button>
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
            </div>

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