<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Alimente</title>

    <link rel="stylesheet" href="/css/adm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--icon-->
    <link rel="shortcut icon" href="/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!--Fonte-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand" rel="stylesheet">
</head>
<body>

<div class="sidebar">
    <header>
        <img src="/img/fotoAdm.png" alt="">
    </header>

    <ul>
        <li>
        <a href="{{ route('admin.dashboard') }}">
            <i class="bi bi-columns-gap"></i>
            Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('admin.doadores') }}">
            <i class="bi bi-person"></i>
            Doadores
            </a>
        </li>

        <li>
            <a href="{{route('admin.ongs')}}">
            <i class="bi bi-people"></i>
            Ongs
            </a>

    </ul>
</div>

<div class="feed-dash">
    <div class="dashboard">
        <!-- Cards row -->
        <div class="row cards-row">
            <div class="card-dash"><i class="bi bi-arrow-up-circle-fill"></i><h4>Doadores</h4><h3 class="corDoador">{{$doadores}}</h3></div>
            <div class="card-dash"><i class="bi bi-arrow-down-circle-fill"></i><h4>Ongs</h4><h3 class="corOng">{{$ong}}</h3></div>
            <div class="card-dash"><i class="bi bi-currency-dollar"></i><h4>Doações</h4><h3>0</h3></div>
        </div>

        <!-- Graphics row -->
        <div class="row graphics-row">
            <div class="graphic-doador">
            <h5 class="center">Doadores na plataforma</h5>
            <canvas id="myChart" width="400" height="250"></canvas>
            </div>
            <div class="graphic-ong">
                <h5 class="center">Ongs na plataforma</h5>
                <canvas id="myChart2" width="400" height="250"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="/js/chart.js"></script>
<script src="/js/main.js"></script>

<script>
var ctx1 = document.getElementById('myChart');
var myChart = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: [{{ $doadorAno }}],
        datasets: [{
            label: '{{  $doadorLabel  }}',
            data: [{{ $doadorTotal }}],
            backgroundColor: [
                'rgba(34, 139, 34, 0.8)',   // Verde mais escuro
                'rgba(0, 100, 0, 0.8)',     // Verde musgo escuro
                'rgba(0, 128, 0, 0.8)',     // Verde clássico escuro
                'rgba(46, 139, 87, 0.8)'    // Verde floresta escuro
            ],
            borderColor: [
                'rgba(34, 139, 34, 1)',
                'rgba(0, 100, 0, 1)',
                'rgba(0, 128, 0, 1)',
                'rgba(46, 139, 87, 1)'
            ],
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


 /*Gráfico 02 - Paleta Verde Escura */
var ctx2 = document.getElementById('myChart2');
var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: [{{ $ongAno }}],
        datasets: [{
            label: '{{  $ongLabel  }}',
            data: [{{ $ongTotal }}],
            backgroundColor: [
                'rgba(54, 102, 235, 0.8)',  // Azul mais escuro
                'rgba(75, 142, 192, 0.8)',  // Verde-azulado mais escuro
                'rgba(53, 82, 155, 0.8)',   // Roxo-azulado escuro
                'rgba(33, 92, 155, 0.8)'    // Azul escuro
            ],
            borderColor: [
                'rgba(54, 102, 235, 1)',
                'rgba(75, 142, 192, 1)',
                'rgba(53, 82, 155, 1)',
                'rgba(33, 92, 155, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

</script>
</body>
</html>