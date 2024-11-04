document.addEventListener('DOMContentLoaded', function() {
    const searchButton = document.getElementById('search-button');
    const searchInput = document.getElementById('search-input');
    const resultsContainer = document.getElementById('ong-results');

    // Controle para expandir/recolher a barra de pesquisa
    searchButton.addEventListener('click', function(event) {
        event.preventDefault();
        this.parentElement.classList.toggle('expanded');
        searchInput.focus();
        
        // Se a barra de pesquisa for recolhida, esconde o contêiner de resultados
        if (!this.parentElement.classList.contains('expanded')) {
            resultsContainer.style.display = 'none';
            searchInput.value = ''; // Limpa o valor do campo de pesquisa
        }
    });

    // Executa a busca quando o usuário digitar
    searchInput.addEventListener('input', function() {
        let searchValue = searchInput.value.trim();

        if (searchValue) {
            fetch(`/search-ongs?search=${searchValue}`)
                .then(response => response.json())
                .then(data => {
                    resultsContainer.innerHTML = ''; // Limpa resultados anteriores

                    let matchedOngs = data.filter(ong => 
                        ong.nomeOng.toLowerCase().includes(searchValue.toLowerCase())
                    );

                    if (matchedOngs.length > 0) {
                        matchedOngs.forEach(ong => {
                            resultsContainer.innerHTML += `
                                <div class="ong-card">
                                    <img src="${baseUrl}/${ong.fotoOng}" alt="Imagem da ONG" class="ong-photo">
                                    <div>
                                        <h5>${ong.nomeUsuarioOng}</h5>
                                        <p>${ong.nomeOng}</p>
                                    </div>
                                </div>
                            `;
                        });
                        resultsContainer.style.display = 'block'; // Exibe o contêiner com resultados
                    } else {
                        resultsContainer.style.display = 'none'; // Oculta se não houver resultados
                    }
                })
                .catch(error => console.error('Erro:', error));
        } else {
            resultsContainer.style.display = 'none'; // Oculta o contêiner se o campo estiver vazio
        }
    });
});
