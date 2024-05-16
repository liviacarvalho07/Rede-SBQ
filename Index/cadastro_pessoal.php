<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assents/css/style_padrao.css">
  <title>Cadastro Pessoal</title>

  <!-- Barra de Navegação -->
  <?php
  include "../includes_padroes/navbar_cad.php";
  ?>
  <!-- Área do Formulário -->
  <div class="container">
    <div class="login">
      <!-- Título -->
      <div class="cadastro">
        <div id="cadastro">Cadastro Pessoal</div>
      </div>
      <!-- Formulário -->
      <div class="form">
        <!-- LINHA 1 DO FORMULÁRIO -->
        <form action="../dependencies/userpessoal_cadastro.php" method="post">
          <div class="row">
            <!-- 1ª Coluna -->
            <div class="col-sm">
              <label for="">Nome completo:</label>
              <input type="text" class="form-control" id="nome" name="nome" />
            </div>
            <!-- 2ª Coluna -->
            <div class="col-sm">
              <label for="">E-mail (institucional):</label>
              <input type="email" class="form-control" id="e-mail" name="e-mail" />
            </div>
          </div>

          <!-- LINHA 2 DO FORMULÁRIO -->
          <div class="row">
            <div class="col-sm">
              <label for="">Instituição da titulação:</label>
              <div class="form-group">
                <select id="seletores-titulacao" class="form-select form-select-sm" name="instituicao_titulacao">
                  <option selected></option>
                </select>
              </div>
            </div>

            <!-- 2ª Coluna -->
            <div class="col-sm">
              <label for="">Ano de conclusão:</label>
              <input type="text" class="form-control" id="ano_conclusao" name="ano_conclusao" />
            </div>
          </div>

          <!-- LINHA 3 DO FORMULÁRIO -->


          <div class="row">

            <div class="col-sm-3">
              <label for="">Estado:</label>
              <select id="estado" class="form-select form-select-sm" name="estado">
                <option value="">Selecione um estado</option>
              </select>
            </div>
            <!-- 1ª Coluna -->
            <div class="col-sm-3">
              <label for="">Cidade:</label>
              <select id="cidade" class="form-select form-select-sm" name="cidade">
                <option value="">Selecione uma cidade</option>
              </select>
            </div>
            <!-- 2ª Coluna  -->
            <div class="col-sm">
              <label for="">Instituição Atual:</label>
              <div class="form-group">
                <select id="seletores-atual" class="form-select form-select-sm" name="instituicao_atual">
                  <option selected></option>
                </select>
              </div>
            </div>

          </div>

          <!-- LINHA 4 DO FORMULÁRIO-->
          <div class="row">
            <!-- 1ª Coluna -->
            <div class="col-sm">
              <label for="">Nível de escolaridade:</label>
              <select id="seletores" class="form-select form-select-sm" name="nivel_escolaridade">
                <option selected></option>
                <option value="1">Graduação</option>
                <option value="2">Mestrado</option>
                <option value="3">Doutorado</option>
              </select>
            </div>
            <!-- 2ª Coluna -->
            <div class="col-sm">
              <label for="">Função/cargo:</label>"
              <select id="seletores" class="form-select form-select-sm" name="funcao_cargo">
                <option selected></option>
                <option value="1">Aluno</option>
                <option value="2">Professor</option>
                <option value="3">Direto</option>
              </select>
            </div>
          </div>

          <!-- LINHA 5 DO FORMULÁRIO -->
          <div class="row">
            <!-- 1ª Coluna -->
            <div class="col-sm">
              <label for="">Senha:</label>
              <input type="text" class="form-control" id="senha" name="senha" />
            </div>
            <!-- 2ª Coluna -->
            <div class="col-sm" id="recaptcha">
              <div class="g-recaptcha" data-sitekey="6LfHQdspAAAAAFguMQLHNje6h8FZp_jy_j4N3PO2"></div>
              <!-- Função para verificar o recaptcha -->
              <script type="text/javascript">
                function valida(){
                if (grecaptcha.getResponse() == ""){
                  alert("Você precisa marcar a validação")
                return false;
                  }
                }
              </script>
            </div>
          </div>

          <!-- LINHA 6 DO FORMULÁRIO -->
          <div class="row">
            <!-- 1ª Coluna -->
            <div class="col-sm">
              <label for="">Confirmar senha:</label>
              <input type="text" class="form-control" id="confirmar_senha" name="confirmar_senha" />
            </div>
            <!-- 2ª Coluna -->
            <div class="col-sm" id="recaptcha">
            <a href="../index.php"><button type="button" class="btn btn-warning" id="voltar">Voltar</button></a>
              <button type="submit" class="btn btn-info" id="registrar" name="submit" onclick="return valida()">Registrar-se</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- Rodapé -->

  </div>
  <?php include "../includes_padroes/footer.php" ?>

  <script>
    const estadoPath = '../cidades_estados/Estados.json';
    const cidadePath = '../cidades_estados/Cidades.json';

    // Load JSON data from files
    fetch(estadoPath)
      .then((response) => response.json())
      .then((data) => {
        const estadoSelect = document.getElementById('estado');
        data.forEach((estado) => {
          const option = document.createElement('option');
          option.value = estado.ID;
          option.text = estado.Nome;
          estadoSelect.appendChild(option);
        });

        // Populate cidade select based on initial estado selection
        const initialEstadoId = '1'; // Set the initial estado ID here
        fetch(cidadePath)
          .then((response) => response.json())
          .then((cidadesData) => {
            const cidadeSelect = document.getElementById('cidade');
            const initialCidades = cidadesData.filter(
              (cidade) => cidade.Estado === initialEstadoId
            );
            initialCidades.forEach((cidade) => {
              const option = document.createElement('option');
              option.value = cidade.ID;
              option.text = cidade.Nome;
              cidadeSelect.appendChild(option);
            });
          });

        // Add event listener to estado select
        estadoSelect.addEventListener('change', (e) => {
          const selectedEstadoId = e.target.value;
          const cidadeSelect = document.getElementById('cidade');
          cidadeSelect.innerHTML = '<option selected></option>';

          fetch(cidadePath)
            .then((response) => response.json())
            .then((cidadesData) => {
              const filteredCidades = cidadesData.filter(
                (cidade) => cidade.Estado === selectedEstadoId
              );
              filteredCidades.forEach((cidade) => {
                const option = document.createElement('option');
                option.value = cidade.ID;
                option.text = cidade.Nome;
                cidadeSelect.appendChild(option);
              });
            });
        });

        // Add event listener to cidade select
        cidadeSelect.addEventListener('change', (e) => {
          const selectedCidadeId = e.target.value;
          const estadoSelect = document.getElementById('estado');
          const selectedEstadoId = estadoSelect.value;

          // Find corresponding estado for selected cidade
          fetch(cidadePath)
            .then((response) => response.json())
            .then((cidadesData) => {
              const cidade = cidadesData.find(
                (cidade) => cidade.ID === selectedCidadeId
              );
              if (cidade && cidade.Estado !== selectedEstadoId) {
                const estado = data.find(
                  (estado) => estado.ID === cidade.Estado
                );
                estadoSelect.value = estado.ID;
              }
            });
        });
      });

    fetch('../instituicoes/instituicoes.json')
      .then(response => response.json())
      .then(data => {
        const instituicoes = data.map(item => item.Instituições);
        const selectTitulacao = document.getElementById('seletores-titulacao');
        const selectAtual = document.getElementById('seletores-atual');

        instituicoes.forEach(instituicao => {
          const option = document.createElement('option');
          option.text = instituicao;
          option.value = instituicao;
          selectTitulacao.appendChild(option);
        });
        instituicoes.forEach(instituicao => {
          const option = document.createElement('option');
          option.text = instituicao;
          option.value = instituicao;
          selectAtual.appendChild(option);
        });

      })
      .catch(error => console.error('Error:', error));


  </script>
  <style>
    option {
    font-family: 'poppins-bold', sans-serif !important;
    font-size: larger;
    text-transform: uppercase;
  }


  </style>

  </body>

</html>