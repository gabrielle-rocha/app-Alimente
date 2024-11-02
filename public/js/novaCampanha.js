// Abre o modal
document.getElementById('openModalBtn').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'flex';
});

// Fecha o modal ao clicar no botão de cancelar
document.getElementById('cancelBtn').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'none';
});

// Fecha o modal ao clicar fora do conteúdo
window.onclick = function(event) {
    const modal = document.getElementById('modal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
};

// Função para exibir a imagem selecionada
document.getElementById('imagemCampanha').addEventListener('change', function(event) {
    const imagePreview = document.getElementById('image-preview');
    const file = event.target.files[0];
    const reader = new FileReader();

    if (file) {
        reader.readAsDataURL(file);
    }

    reader.onload = function(e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        imagePreview.innerHTML = ''; // Limpa o preview anterior
        imagePreview.appendChild(img); // Adiciona a imagem selecionada
    };
});

// Envio do formulário via Fetch API
document.getElementById('campanhaForm').addEventListener('submit', function(event) {
    const imageInput = document.getElementById('imagemCampanha');
    const formData = new FormData(this);

    if (imageInput.files.length > 0) {
        formData.append('imagemCampanha', imageInput.files[0]);
    }

    event.preventDefault(); // Previne o envio padrão do formulário

    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => {
        if (response.ok) {
            return response.json(); // Espera-se que o servidor retorne os dados da nova campanha
        }
        throw new Error('Network response was not ok.');
    })
    .then(data => {
        console.log('Success:', data); // Verifique se a resposta está correta

        const container = document.querySelector('.campanhas');

            // Cria um novo card para a campanha
        const newCard = document.createElement('div');
        newCard.classList.add('card', 'card-initial');
        newCard.innerHTML = `
            <div class="image">
                <img src="/storage/${data.imagemCampanha}" alt="${data.nomeCampanha}">
            </div>
            <div class="content">
                <div class="title">${data.nomeCampanha}</div>
                <div class="sub-title">${data.assuntoCampanha}</div>
                <div class="bottom">
                    <p>${data.descricaoCampanha}</p>
                    <button>Ver campanha</button>
                </div>
            </div>
        `;
        
        // Adiciona o novo card ao container
        container.prepend(newCard);
        //newCard.classList.add('active');

       // Aplica a classe active para ativar a animação
        setTimeout(() => {
            newCard.classList.remove('card-initial');
            newCard.classList.add('active');
        }, 10); // Pequeno atraso para garantir que a transição seja aplicada

        // Remove a classe active após a animação
        setTimeout(() => {
            newCard.classList.remove('active');
        }, 400); // Coincide com o tempo da transição em CSS

        // Oculta a mensagem "Não há campanhas disponíveis" se houver
        const noCampaignsMessage = document.getElementById('no-campaigns-message');
        if (noCampaignsMessage) {
            noCampaignsMessage.style.display = 'none';
        }

        // Fecha o modal após o envio
        document.getElementById('modal').style.display = 'none';
    })
    .catch(error => {
        console.error('Error:', error);
    });
});