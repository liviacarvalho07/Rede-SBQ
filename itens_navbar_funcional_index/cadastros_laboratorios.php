<?php include "navbar_index_itens.php"?>
    <div class="barra">
      <div class="quadrado">
        <div class="diretorio">
            <a href="tela_inicial_funcional.php"><img src="../itens_navbar_funcional_index/assets2/img/casa.png" alt="Home"></a>
            > Cadastrar Laboratórios ou Equipamentos >
        </div>
      </div>
      <div class="triangulo"></div>
    </div>
    <div class="container">
    <!-- Botões-->
    <div class="form">
      <div class="botoes">
        <a href="cadastros_laboratorios.php"><button class="laboratorio">Cadastrar Laboratório</button></a>
        <a href="cadastros_equipamentos.php"><button class="equipamento">Cadastrar Equipamento</button></a>
      </div>

      <!-- Barra 2 -->
      <div class="cad">Cadastre o Labortório</div>
      <div class="linha"></div>

      <!-- LINHA 1 DO FORMULÁRIO -->

      <div class="row">
        <div class="col-sm" id="colunas">
          <label for="">Nome do laboratório:</label>
          <input type="text" class="form-control" name="nome_laboratorio" />
        </div>
        <div class="col-sm" id="colunas">
          <label for="">Departamento:</label>
          <input type="text" class="form-control" name="despartamento" />
        </div>
      </div>

      <!-- LINHA 2 DO FORMULÁRIO -->

      <div class="row">
        <div class="col-sm" id="colunas">
          <label for="">Coordenador:</label>
          <input type="text" class="form-control" name="coordenador" />
        </div>
        <div class="col-sm" id="colunas">
          <label for="">Universidade:</label>
          <input type="text" class="form-control" name="universidade" />
        </div>
      </div>

      <!-- LINHA 3 DO FORMULÁRIO -->
      <!-- botão registrar equipamento -->
      <div class="col-sm" id="colunas">
        <div class="row" id="add">
          <button class="adicionar">Adicionar Laboratório</button>
        </div>
      </div>
    </div>

    </form>
  </div>
    <!-- Cadastros -->

    <!-- Footer -->
    <?php include "../includes_padroes/footer.php"?>