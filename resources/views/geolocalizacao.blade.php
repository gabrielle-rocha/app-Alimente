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
</body>
</html>
