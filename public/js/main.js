/* Dropdown */
var elemDrop = document.querySelectorAll('.dropdown-trigger');
var instanceDrop = M.Dropdown.init(elemDrop, {
    coverTrigger: false,
    constrainWidth: false
});


/* SideNav */
var elemSideNav = document.querySelectorAll('.sidenav');
var instanceSideNav = M.Sidenav.init(elemSideNav);


/* Modal */
var elemsModal = document.querySelectorAll('.modal');
var instanceModal = M.Modal.init(elemsModal);

/* Select */
var elems = document.querySelectorAll('select');
var instances = M.FormSelect.init(elems);

/* Fullscreen */
function fullScreen() {        
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen();
        } else {
            document.exitFullscreen();
        }
}
/* Gráfico 01 - Paleta Azul Escura */
var ctx1 = document.getElementById('myChart');
var myChart1 = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril'],
        datasets: [{
            label: '2020',
            data: [12, 19, 3, 5],
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

/* Gráfico 02 - Paleta Verde Escura */
var ctx2 = document.getElementById('myChart2');
var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril'],
        datasets: [{
            label: '2020',
            data: [12, 19, 3, 5],
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
