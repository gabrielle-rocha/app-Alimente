<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doador | Alimente</title>

   
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

});

    </script>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #f2f2f2;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
    </style>

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

                    <li><a href="/buscar">
                    <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                    <span class="title">Buscar</span>
                    </a></li>
                </ul>
            </div>
    </div>


    <h1>ONGs Próximas</h1>

    @if ($ongs->isEmpty())
        <p>Nenhuma ONG encontrada nas proximidades.</p>
    @else
        <ul>
            @foreach ($ongs as $ong)
                <li>{{ $ong->nome }} - {{ $ong->descricao }}</li>
            @endforeach
        </ul>
    @endif

    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                alert("Geolocalização não é suportada por este navegador.");
            }
        }

        function showPosition(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            // Redireciona para a rota de busca com as coordenadas
            window.location.href = `/busca-ongs?latitude=${latitude}&longitude=${longitude}`;
        }

        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    alert("Usuário negou a solicitação de geolocalização.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("A localização não está disponível.");
                    break;
                case error.TIMEOUT:
                    alert("A solicitação de geolocalização expirou.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("Um erro desconhecido ocorreu.");
                    break;
            }
        }

        window.onload = getLocation;
    </script>
</body>
</html>