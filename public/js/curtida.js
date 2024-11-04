
    // Variável para controlar o estado da curtida
    let liked = false;

    // Função para gerenciar a ação de curtir
    function likeButton() {
        const heartImage = event.target; // Obtém o elemento da imagem que foi clicado
        const likesCountElement = heartImage.closest('.card-postagem').querySelector('.likes'); // Seleciona o elemento que exibe a contagem de curtidas
        let currentLikes = parseInt(likesCountElement.textContent); // Obtém a contagem atual de curtidas

        if (!liked) {
            liked = true; // Marca como curtido
            heartImage.src = "/img/coracao-vermelho.png"; // Altera a imagem para a versão cheia do coração
            currentLikes++; // Incrementa a contagem de curtidas
        } else {
            liked = false; // Marca como não curtido
            heartImage.src = "/img/coracao.png"; // Altera a imagem para a versão vazia do coração
            if (currentLikes > 0) { // Verifica se a contagem de curtidas é maior que zero
                currentLikes--; // Decrementa a contagem de curtidas se for positivo
            }
        }

        likesCountElement.textContent = `${currentLikes} curtidas`; // Atualiza a contagem de curtidas
    }


