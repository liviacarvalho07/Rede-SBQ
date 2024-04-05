<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Cadfuncional.css">
    <title>Cadastro Funcional</title>
</head>
<body>
    <!-- Barra de navegação -->
    <div class="navbar">
      <div class="logo">
        <img src="../Imagens/logo.png" alt="">
      </div>
      <button class="inicio" id="inicio">Início</button>
        
    </div>
    <!-- Linha abaixo do navbar -->
    <div class="l1"></div>
    <!-- Área do Formulário -->
    <div class="container">
        <div class="login">
            <!-- Título -->
            <div class="cadastro">
                <div id="cadastro">Cadastro funcional</div></div>
            <!-- Formulário -->
            <div class="form">
              <!-- LINHA 1 DO FORMULÁRIO -->
              <form action="arquivo" method="post">
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Nome completo:</label>
                    <input type="text" class="form-control" name="nome" />
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">E-mail (institucional):</label>
                    <input type="email" class="form-control" name="e-mail" />
                  </div>
                </div>

                <!-- LINHA 2 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Grupo de pesquisa:</label>
                    <div class="form-group">
                    <input type="text" class="form-control" id="grupo_de_pesquisa" name="grupo_de_pesquisa">
                  </div>
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">Equipamentos e técnicas disponíveis:</label>
                    <input type="text" class="form-control" id="equipamentos" name="equipamentos" />
                  </div>
                </div>

                <!-- LINHA 3 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Nome do coordenador:</label>
                    <input type="text" class="form-control" id="nome_coordenador" name="nome_coordenador">
                  </div>
                  <!-- 2ª Coluna  -->
                  <div class="col-sm">
                    <label for="">Área de atuação:</label>
                    <input type="text" class="form-control" id="área_atuação" name="área_atuação">
                  </div>
                </div>

                <!-- LINHA 4 DO FORMULÁRIO-->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Posição:</label>
                    <input type="text" class="form-control" id="posição" name="posição">
                  </div>
                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">Senha:</label>
                    <input type="text" class="form-control" id="senha" name="senha">
                  </div>
                </div>

                <!-- LINHA 5 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">E-mail do coordenador (institucional):</label>
                    <input type="email" class="form-control" id="e-mail_coordenador" name="e-mail_coordenador" />
                  </div>

                  <!-- 2ª Coluna -->
                  <div class="col-sm">
                    <label for="">Confirmar senha:</label>
                    <input type="text" class="form-control" id="confirmar_senha" name="confirmar_senha" />
                  </div>
                </div>

                <!-- LINHA 6 DO FORMULÁRIO -->
                <div class="row">
                  <!-- 1ª Coluna -->
                  <div class="col-sm">
                    <label for="">Informações do laboratótio (formas de contato):</label>
                    <input type="text" class="form-control" id="informações_laboratótio" name="informações_laboratótio" />
                  </div>
                 <!-- 2ª Coluna -->
                 <div class="col-sm" id="recaptcha">
                    <div class="recaptcha"></div>
                  </div>
                  
                <!-- LINHA 7 DO FORMULÁRIO -->
                <div class="row">
                   <!-- 2ª Coluna -->
                  <div class="col-sm" id="recaptcha">
                    <button type="button" class="btn btn-warning" id="voltar">Voltar</button>
                    <button type="submit" class="btn btn-info" id="registrar" name="submit">Registrar-se</button>
                  </div>
  
                    
                </div>
              </form>
          </div>
      </div>
      <!-- Rodapé -->   
      <?php include "../includes_padroes/footer.php"?>
    

</body>
</html>
