function buscarCep() {
    var cep = document.getElementById('cep').value.replace(/\D/g, '');
    if (cep !== "") {
        var validacep = /^[0-9]{8}$/;
        if(validacep.test(cep)) {
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(dados => {
                    if (!("erro" in dados)) {
                        document.getElementById('endereco').value = dados.logradouro;
                        document.getElementById('bairro').value = dados.bairro;
                        document.getElementById('cidade').value = dados.localidade;
                        document.getElementById('estado').value = dados.uf;
                    } else {
                        alert("CEP não encontrado.");
                    }
                })
                .catch(error => {
                    console.error("Erro ao buscar o CEP: ", error);
                });
        } else {
            alert("Formato de CEP inválido.");
        }
    }
}
