// Seleciona os elementos
const logoutLink = document.getElementById('logoutLink');
const logoutModal = document.getElementById('logoutModal');
const confirmLogout = document.getElementById('confirmLogout');
const cancelLogout = document.getElementById('cancelLogout');

// Mostra o modal ao clicar em "Logout"
logoutLink.addEventListener('click', function(event) {
    event.preventDefault(); // Evita a ação padrão do link
    logoutModal.style.display = 'flex'; // Exibe o modal
});

// Ação para o botão "Sim"
confirmLogout.addEventListener('click', function() {
    window.location.href = '/logout'; // Redireciona para a rota de logout
});

// Ação para o botão "Não"
cancelLogout.addEventListener('click', function() {
    logoutModal.style.display = 'none'; // Oculta o modal
});

// Fecha o modal se clicar fora do conteúdo do modal
window.addEventListener('click', function(event) {
    if (event.target === logoutModal) {
        logoutModal.style.display = 'none';
    }
});
