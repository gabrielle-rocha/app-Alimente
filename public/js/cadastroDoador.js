function buscarCep() {
    var cep = document.getElementById('cepDoador').value.replace(/\D/g, '');
    if (cep !== "") {
        var validacep = /^[0-9]{8}$/;
        if(validacep.test(cep)) {
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(dados => {
                    if (!("erro" in dados)) {
                        document.getElementById('enderecoDoador').value = dados.logradouro;
                        document.getElementById('bairroDoador').value = dados.bairro;
                        document.getElementById('cidadeDoador').value = dados.localidade;
                        document.getElementById('estadoDoador').value = dados.uf;
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
