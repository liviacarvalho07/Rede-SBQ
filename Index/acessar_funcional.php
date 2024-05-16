<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assents/css/style_padrao.css">
    <title>Acessar Conta</title>
</head>
<body>
    <!-- Barra de navegação -->
    <?php
        include "../includes_padroes/navbar_cad.php";
    ?>

    <!-- Área do Formulário -->
    <div class="container">
        <div class="login">
            <!-- Título -->
            <div class="cadastro">
                <div id="cadastro">Cadastro Pessoal</div></div>
            <!-- Formulário -->
            <div class="form">
              <!-- LINHA 1 DO FORMULÁRIO -->
              <!-- INSERÇÃO DA VERIFICAÇÃO DE USUARIO EXISTENTE NO BANCO DE DADOS -->
              <form action="../dependencies/userfuncional_verificacao.php" method="post">
                <div class="row">
                  <div class="col-sm">
                    <label for="">Nome completo:</label>
                    <input type="text" class="form-control" name="nome" />
                  </div>
                </div>

                <!-- LINHA 2 DO FORMULÁRIO -->
                <div class="row">
                  <div class="col-sm">
                    <label for="">Instituição da titulação:</label>
                    <div class="form-group">
                    <input type="text" class="form-control" id="instituicao_titulacao" name="instituicao_titulacao"
                          placeholder="Digite aqui">
                  </div>
                </div>

                <!-- LINHA 3 DO FORMULÁRIO -->
                <div class="row">
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

                <!-- LINHA 4 DO FORMULÁRIO -->
                <div class="row">
                    <div class="col-sm" id="recaptcha">
                        <a href="../index.php"><button type="button" class="btn btn-warning" id="voltar">Voltar</button></a>
                        <button type="submit" class="btn btn-info" id="registrar" name="submit" onclick="return valida()">Registrar-se</button>
                      </div>
                  </div>

                
                  <!-- 2ª Coluna -->
                  
                </div>
              </form>
          </div>
      </div>
    </div>
  </div>

      <!-- Rodapé -->
        <?php include "../includes_padroes/footer.php"?>
    
        
    

</body>
</html>