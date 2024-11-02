// Obter referências ao modal e seus elementos
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
  if (event.target === postModal) {
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

// Botão de cancelar
document.querySelector('.post-cancel-btn').onclick = function() {
  postModal.style.display = "none";
  postTextarea.value = ''; // Limpar a textarea ao cancelar
  imagePreview.innerHTML = ''; // Limpar a pré-visualização da imagem
};

// Botão de enviar
document.querySelector('.post-send-btn').onclick = function() {
  var formData = new FormData();
  var conteudo = postTextarea.value.trim(); // Obter o valor do textarea e remover espaços em branco
  var idOng = document.getElementById('idOng').value; // Obter o ID da ONG

  if (!conteudo) {
      alert('Por favor, insira um conteúdo para a postagem.');
      return;
  }

  formData.append('conteudo', conteudo);
  formData.append('hashtags', conteudo.match(/#\w+/g)?.join(', ')); // Extrai hashtags da textarea
  formData.append('idOng', idOng); // Adiciona o ID da ONG ao FormData

  var fileInput = document.getElementById('postUploadImage');
  if (fileInput.files[0]) {
      formData.append('imagem', fileInput.files[0]);
  }

  // Enviar a postagem via fetch
  fetch('/postagem', {
      method: 'POST',
      body: formData,
      headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          'Accept': 'application/json'
      }
  })
  .then(response => {
      if (!response.ok) {
          throw new Error('Network response was not ok');
      }
      return response.json();
  })
  .then(data => {
      alert(data.message);
      postModal.style.display = "none"; // Fechar o modal após o envio
      postTextarea.value = ''; // Limpar a textarea após o envio
      imagePreview.innerHTML = ''; // Limpar a pré-visualização da imagem
      // Aqui você pode adicionar código para atualizar a interface com a nova postagem, se necessário
  })
  .catch(error => {
      console.error('Erro:', error);
      alert('Erro ao enviar a publicação. Tente novamente.');
  });
};
