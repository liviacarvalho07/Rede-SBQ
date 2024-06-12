function buscaCep(cep) {
  var url = "https://viacep.com.br/ws/" + cep + "/json/";
  fetch(url)
    .then(response => response.json())
    .then(data => {
      document.querySelector("input[name='rua']").value = data.logradouro;
      document.querySelector("input[name='bairro']").value = data.bairro;
      document.querySelector("input[name='cidade']").value = data.localidade;
    })
    .catch(error => console.error("Erro ao buscar CEP:", error));
}