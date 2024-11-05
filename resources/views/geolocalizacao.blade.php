<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doador | Alimente</title>
    <link rel="stylesheet" href="/css/doador.css">
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        #map {
            height: 600px; /* Altura do mapa */
            width: 100%;   /* Largura do mapa */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
/* Container de Cards */
.info-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-top: 30px;
    justify-content: center;
    padding: 10px;
    max-width: 100%;
}

/* Card Individual */
.info-card {
    background: linear-gradient(135deg, #4b79a1, #283e51);
    color: #fff;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    width: 100%;
    max-width: 600px;
    text-align: center;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Efeito de Hover no Card */
.info-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

/* Ícone no Topo do Card */
.card-icon {
    font-size: 2.5rem;
    margin-bottom: 15px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    padding: 15px;
    display: inline-block;
    color: #ffffff;
}

/* Título e Texto Inicial do Card */
.info-card h3 {
    font-size: 1.75rem;
    margin: 10px 0;
    color: #fffa;
    letter-spacing: 1px;
}

.card-content {
    font-size: 1rem;
    color: #e0e0e0;
    line-height: 1.6;
    transition: opacity 0.3s ease;
}

/* Texto Extra ao Passar o Mouse */
.card-content-hover {
    font-size: 1rem;
    color: #fff;
    line-height: 1.6;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
    padding: 15px;
    border-radius: 10px;
    background-color: rgba(0, 0, 0, 0.7);
    transition: opacity 0.3s ease;
    pointer-events: none; /* Garante que o hover funcione no card */
}

/* Mostrar Texto Extra e Ocultar o Texto Original ao Hover */
.info-card:hover .card-content-hover {
    opacity: 1;
}

.info-card:hover .card-content {
    opacity: 0;
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

<h1>Localização Atual e ONGs</h1>
<div id="map"></div>

<!-- API do Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8YyZUk2tSHm0ON3oPDGWKogkEepg2e00&callback=initMap" async defer></script>
<script>
    let map;
    let userMarker;
    const ongs = [
        { nome: "Amigos da Paz", latitude: -23.561414, longitude: -46.656856, descricao: "Doações para animais" },
        { nome: "Refazendo Histórias", latitude: -23.563312, longitude: -46.660212, descricao: "Proteção infantil" },
        { nome: "ONG Esperança", latitude: -23.557125, longitude: -46.651989, descricao: "Apoio a famílias" },
        { nome: "ONG Reciclar para Viver", latitude: -23.564937, longitude: -46.646228, descricao: "Educação ambiental" },
        { nome: "ONG Saúde para Todos", latitude: -23.551762, longitude: -46.654204, descricao: "Atendimento médico gratuito" }
    ];

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: -23.5505, lng: -46.6333 },
            zoom: 12
        });

        // Obtendo a localização do usuário
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(position => {
                const userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                // Marcando a localização do usuário
                userMarker = new google.maps.Marker({
                    position: userLocation,
                    map: map,
                    title: "Sua localização",
                    icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                });

                // Centralizando o mapa na localização do usuário
                map.setCenter(userLocation);

                // Adicionando marcadores das ONGs
                colocarMarcadores(ongs);
            }, () => {
                alert("Não foi possível obter a sua localização.");
            });
        } else {
            alert("Geolocalização não é suportada pelo seu navegador.");
        }
    }

    function colocarMarcadores(ongs) {
        ongs.forEach(ong => {
            const marker = new google.maps.Marker({
                position: { lat: ong.latitude, lng: ong.longitude },
                map: map,
                title: ong.nome,
                icon: 'https://maps.google.com/mapfiles/ms/icons/green-dot.png'
            });

            const infoWindow = new google.maps.InfoWindow({
                content: `<h3>${ong.nome}</h3><p>${ong.descricao}</p>`
            });

            marker.addListener('click', () => {
                infoWindow.open(map, marker);
            });
        });
    }
</script>
<div class="info-cards">
    <div class="info-card">
        <div class="card-icon"><i class="fa-solid fa-question"></i></div>
        <h3>Como Utilizar</h3>
        <p class="card-content">Aprenda a navegar pelo mapa, localizar informações e utilizar as funções de busca de forma intuitiva e eficaz.</p>
        <div class="card-content-hover">Este mapa é fácil de usar! Para começar, escolha sua região de interesse para encontrar locais específicos. Explore as ferramentas de zoom e filtro para ajustar a visualização conforme sua necessidade.</div>
    </div>
    <div class="info-card">
        <div class="card-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
        <h3>Funcionalidades</h3>
        <p class="card-content">Conheça as principais funcionalidades do sistema, como filtros personalizados e visualizações avançadas.</p>
        <div class="card-content-hover">Aproveite filtros para ajustar resultados de acordo com sua localização e preferências. Com visualizações personalizáveis e atualizações em tempo real, você encontra o que precisa de forma rápida e precisa.</div>
    </div>
    <div class="info-card">
        <div class="card-icon"><i class="fa-solid fa-star"></i></div>
        <h3>Dicas Úteis</h3>
        <p class="card-content">Receba dicas de uso para aproveitar ao máximo o sistema de localização e otimizar sua experiência.</p>
        <div class="card-content-hover">Dica Pro: use o modo de visualização em tela cheia para uma experiência mais imersiva! Se precisar de ajuda, consulte nossa seção de FAQ ou entre em contato com o suporte.</div>
    </div>
</div>
</body>
</html>
