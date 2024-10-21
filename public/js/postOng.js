// Abrir o modal de publicação
var postModal = document.getElementById("postModal");
var postBtn = document.getElementById("openPostModalBtn");
var postSpan = document.getElementsByClassName("post-close")[0];
var postUploadInput = document.getElementById('postUploadImage');
var imagePreview = document.getElementById('imagePreview');
var postTextarea = document.getElementById('postDescription');

// Abrir o modal
postBtn.onclick = function() {
  postModal.style.display = "block";
}

// Fechar o modal
postSpan.onclick = function() {
  postModal.style.display = "none";
}

// Fechar o modal clicando fora dele
window.onclick = function(event) {
  if (event.target == postModal) {
    postModal.style.display = "none";
  }
}

// Exibir a imagem no quadrado ao selecionar um arquivo
postUploadInput.addEventListener('change', function() {
  var file = this.files[0];
  if (file) {
    var reader = new FileReader();
    reader.onload = function(e) {
      imagePreview.innerHTML = '<img src="' + e.target.result + '" alt="Image Preview">';
    }
    reader.readAsDataURL(file);
  }
});

// Função para adicionar hashtags à textarea
function insertHashtag(hashtag) {
  var currentText = postTextarea.value;
  
  // Verificar se a hashtag já existe
  if (!currentText.includes(hashtag)) {
    // Adicionar a hashtag ao final do texto
    postTextarea.value = currentText + (currentText ? ' ' : '') + hashtag;
  }
}

// Listener para os botões de hashtags
document.querySelectorAll('.hashtag-btn').forEach(function(button) {
  button.addEventListener('click', function() {
    var hashtag = this.getAttribute('data-hashtag');
    insertHashtag(hashtag);
  });
});

// Botões de cancelar e enviar no modal de publicação
document.querySelector('.post-cancel-btn').onclick = function() {
  postModal.style.display = "none";
};

document.querySelector('.post-send-btn').onclick = function() {
  // Ação de enviar a publicação
  alert('Publicação enviada!');
  postModal.style.display = "none";
};
