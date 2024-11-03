// Obter referências ao modal e seus elementos
var postModal = document.getElementById("postModal");
var postBtn = document.getElementById("openPostModalBtn");
var postSpan = document.getElementsByClassName("post-close")[0];
var postUploadInput = document.getElementById('postUploadImage');
var imagePreview = document.getElementById('imagePreview');
var postTextarea = document.getElementById('postDescription');
var hashtagsContainer = document.getElementById('hashtagsContainer'); // Container para exibir as hashtags

// Array para armazenar as hashtags separadamente
let hashtags = [];

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

// Função para adicionar hashtags sem exibir na textarea
function insertHashtag(hashtag) {
  // Verificar se a hashtag já foi adicionada
  if (!hashtags.includes(hashtag)) {
    hashtags.push(hashtag); // Adiciona ao array de hashtags
    displayHashtags(); // Atualiza a exibição das hashtags
  }
}

// Função para exibir as hashtags no container
function displayHashtags() {
  hashtagsContainer.innerHTML = hashtags.map(tag => `#${tag}`).join(' ');
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
  hashtags = []; // Limpar o array de hashtags
  displayHashtags(); // Limpar a exibição das hashtags
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
  formData.append('hashtags', hashtags.join(', ')); // Adiciona as hashtags do array ao FormData
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
  .then(response => response.json()) // Extrair o JSON diretamente
  .then(data => {
    if (data.success) { // Verifica se o backend envia uma chave "success" indicando sucesso
      alert(data.message); // Exibe a mensagem de sucesso
      postModal.style.display = "none";
      postTextarea.value = ''; // Limpa a textarea
      imagePreview.innerHTML = ''; // Limpa a pré-visualização da imagem
      hashtags = []; // Limpa o array de hashtags
      displayHashtags(); // Limpa a exibição das hashtags
      // Atualizar a interface com a nova postagem, se necessário
    } else {
      // Se o backend indicar falha, lança o erro com a mensagem do backend
      throw new Error(data.message || 'Erro desconhecido ao criar a postagem.');
    }
  })
  .catch(error => {
    console.error('Erro:', error);
    alert(error.message); // Mostra a mensagem de erro do backend (se houver)
  });
};