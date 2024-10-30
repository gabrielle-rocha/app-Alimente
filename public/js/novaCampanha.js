// Abre o modal
document.getElementById('openModalBtn').addEventListener('click', function() {
    // Limpa os campos do modal
    document.getElementById('idCampanha').value = '';
    document.getElementById('campaign-name').value = '';
    document.getElementById('campaign-subject').value = '';
    document.getElementById('campaign-description').value = '';
    document.getElementById('start-date').value = '';
    document.getElementById('end-date').value = '';
    document.getElementById('image-preview').innerHTML = '';

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

// Exibe a imagem selecionada
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
        imagePreview.innerHTML = '';
        imagePreview.appendChild(img);
    };
});

// Abre o modal com dados para edição
document.querySelectorAll('.edit-button').forEach(button => {
    button.addEventListener('click', function() {
        const campanhaId = this.dataset.id;

        fetch(`/campanha/${campanhaId}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('idCampanha').value = data.idCampanha;
                document.getElementById('campaign-name').value = data.nomeCampanha;
                document.getElementById('campaign-subject').value = data.assuntoCampanha;
                document.getElementById('campaign-description').value = data.descricaoCampanha;
                document.getElementById('start-date').value = data.dataInicioCampanha;
                document.getElementById('end-date').value = data.dataFimCampanha;

                if (data.imagemCampanha) {
                    const img = document.createElement('img');
                    img.src = `/storage/${data.imagemCampanha}`;
                    document.getElementById('image-preview').innerHTML = '';
                    document.getElementById('image-preview').appendChild(img);
                }

                document.getElementById('modal').style.display = 'flex';
            })
            .catch(error => console.error('Erro:', error));
    });
});

// Envio do formulário
document.getElementById('campanhaForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    const campanhaId = document.getElementById('idCampanha').value;
    const url = campanhaId ? `/campanha/${campanhaId}` : `/campanha`;
    const method = campanhaId ? 'PUT' : 'POST';

    // Incluindo o CSRF Token
    const csrfMetaTag = document.querySelector('meta[name="csrf-token"]');
    const csrfToken = csrfMetaTag ? csrfMetaTag.getAttribute('content') : '';
    formData.append('_token', csrfToken);
    if (csrfMetaTag) {
        const csrfToken = csrfMetaTag.getAttribute('content');
        formData.append('_token', csrfToken); // Adicionando o token ao FormData
    } else {
        console.error('CSRF Token não encontrado.');
    }

    fetch(url, {
        method: method,
        body: formData,
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        }
        throw new Error('Network response was not ok.');
    })
    .then(data => {
        console.log('Success:', data);
        const container = document.querySelector('.campanhas');
        const existingCard = document.querySelector(`.card[data-id="${data.idCampanha}"]`);
        const newCard = document.createElement('div');
        newCard.classList.add('card');
        newCard.dataset.id = data.idCampanha;

        newCard.innerHTML = `
            <div class="image"><img src="/storage/${data.imagemCampanha}" alt="${data.nomeCampanha}"></div>
            <div class="content">
                <div class="title">${data.nomeCampanha}</div>
                <div class="sub-title">${data.assuntoCampanha}</div>
                <div class="bottom"><p>${data.descricaoCampanha}</p><button class="edit-button">Ver campanha</button></div>
            </div>`;

        if (existingCard) {
            container.replaceChild(newCard, existingCard);
        } else {
            container.prepend(newCard);
        }

        document.getElementById('no-campaigns-message').style.display = 'none';
        document.getElementById('modal').style.display = 'none';
    })
    .catch(error => console.error('Erro:', error));
});
