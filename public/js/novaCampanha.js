document.getElementById('openModalBtn').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'flex';
});

document.getElementById('cancelBtn').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'none';
});

// Close modal when clicking outside the modal content
window.onclick = function(event) {
    const modal = document.getElementById('modal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
};


// Função para exibir a imagem selecionada
document.getElementById('file-upload').addEventListener('change', function(event) {
    const imagePreview = document.getElementById('image-preview');
    const file = event.target.files[0];
    const reader = new FileReader();

    if (file) {
        reader.readAsDataURL(file);
    }

    reader.onload = function(e) {
        // Cria um elemento de imagem e exibe no container
        const img = document.createElement('img');
        img.src = e.target.result;
        imagePreview.innerHTML = ''; // Limpa o preview anterior
        imagePreview.appendChild(img); // Adiciona a imagem selecionada
    };
});