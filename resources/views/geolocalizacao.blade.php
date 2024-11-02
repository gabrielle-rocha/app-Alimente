<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doador | Alimente</title>

    <link rel="stylesheet" href="/css/doador.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(function(){
            $(".hamburguer").click(function(){
                $(".wrapper").toggleClass("collapse");
            });

            $(".search a").click(function(e){
                e.preventDefault();
                $(this).parent().toggleClass("expanded");
                $(this).siblings('input[type="search"]').focus();
            });

            $(".filter a").click(function(e){
                e.preventDefault();
                $(this).parent().toggleClass("expanded");
            });
        });
    </script>

        
    <!-- Icon -->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
    
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
        .container {
            max-width: 800px;
            margin: auto;
            margin-top: 20px;
        }
    </style>
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
                <li class="filter">
                    <a href="#"><i class="fa-solid fa-hashtag"></i></a>
                    <div class="filter-buttons">
                        <button>Doenças</button>
                        <button>Alimentação</button>
                        <button>Vestimenta</button>
                        <button>Animais</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="sidebar">
        <ul>
            <li><a href="/feedDoador">
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
        <br>
        <br>
    <div class="container">
        <h1>Encontre ONGs Próximas</h1>
        <input type="text" id="cep" placeholder="Digite o CEP" />
        <button onclick="buscarOngs()">Buscar ONGs</button>
        <div id="map"></div>
    </div>
</div>

<!-- Carrega a API do Google Maps com async e defer -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4gF8YUPbDJr50pgrAZ7M-Z_S7WJkltVE&callback=initMap" async defer></script>
<script>
    let map;
    let markers = [];

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: -23.5505, lng: -46.6333 },
            zoom: 12
        });
    }

    function colocarMarcadores(ongs) {
        markers.forEach(marker => marker.setMap(null));
        markers = [];
        
        ongs.forEach(ong => {
            const marker = new google.maps.Marker({
                position: { lat: parseFloat(ong.latitude), lng: parseFloat(ong.longitude) },
                map: map,
                title: ong.nome
            });
            markers.push(marker);
        });
    }

    function buscarOngs() {
        const cep = document.getElementById('cep').value;
        
        fetch(`/geolocalizacao/buscar?cep=${cep}`)
            .then(response => response.json())
            .then(data => {
                colocarMarcadores(data);
                
                if (data.length > 0) {
                    map.setCenter({ lat: parseFloat(data[0].latitude), lng: parseFloat(data[0].longitude) });
                } else {
                    alert('Nenhuma ONG encontrada para esse CEP.');
                }
            })
            .catch(error => console.error('Erro ao buscar ONGs:', error));
    }
</script>
</body>
</html>
