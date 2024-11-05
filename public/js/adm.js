const isAdmin = true; // Este valor deve ser definido pelo servidor

// Mostrar o botão se o usuário for administrador
if (isAdmin) {
    document.getElementById("admin-button").style.display = "block";
}

// Função para o clique no botão
function adminAccess() {
    alert("Acesso de administrador!");
    // Coloque aqui o redirecionamento ou função para o acesso admin
    window.location.href = "/loginAdm"; // Exemplo de redirecionamento
}