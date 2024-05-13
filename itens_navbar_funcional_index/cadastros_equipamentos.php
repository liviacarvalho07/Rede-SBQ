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
        <a href="cadastros_laboratorios.php"><button class="equipamento">Cadastrar Laboratório</button></a>
        <a href="cadastros_equipamentos.php"><button class="laboratorio">Cadastrar Equipamento</button></a>
        </div>
  
        <!-- Barra 2 -->
        <div class="cad">Cadastre o Equipamento</div>
        <div class="linha"></div>
  
        <!-- LINHA 1 DO FORMULÁRIO -->
  
        <div class="row">
          <div class="col-sm" id="colunas">
            <label for="">Nome do equipamento:</label>
            <input type="text" class="form-control" name="nome_equipamento" />
          </div>
          <div class="col-sm" id="colunas">
            <label for="">Descrição:</label>
            <input type="text" class="form-control" name="descricao" />
          </div>
          <div class="col-sm" id="colunas">
            <label for="">Telefone:</label>
            <input type="text" class="form-control" name="telefone" />
          </div>
        </div>
  
        <!-- LINHA 2 DO FORMULÁRIO -->
  
        <div class="row">
          <div class="col-sm" id="colunas">
            <label for="">Instituição Proprietária:</label>
            <input type="text" class="form-control" name="instituicao_proprietaria" />
          </div>
          <div class="col-sm" id="colunas">
            <label for="">CEP:</label>
            <input type="text" class="form-control" name="cep" />
          </div>
          <div class="col-sm" id="colunas">
            <label for="">Email:</label>
            <input type="text" class="form-control" name="email" />
          </div>
        </div>
  
        <!-- LINHA 3 DO FORMULÁRIO -->
  
        <div class="row">
          <div class="col-sm" id="colunas">
            <label for="">Marca:</label>
            <input type="text" class="form-control" name="marca" />
          </div>
          <div class="col-sm-2" id="colunas">
            <label for="">Rua:</label>
            <input type="text" class="form-control" name="rua" />
          </div>
          <div class="col-sm-2" id="colunas">
            <label for="">Bairro:</label>
            <input type="text" class="form-control" name="bairro" />
          </div>
          <div class="col-sm" id="colunas">
            <label for="">Website:</label>
            <input type="text" class="form-control" name="website" />
          </div>
        </div>
  
        <!-- LINHA 4 DO FORMULÁRIO -->
  
        <div class="row">
          <div class="col-sm" id="colunas">
            <label for="">Modelo:</label>
            <input type="text" class="form-control" name="modelo" />
          </div>
          <div class="col-sm" id="colunas">
            <label for="">Cidade:</label>
            <input type="text" class="form-control" name="cidade" />
          </div>
          <div class="col-sm" id="colunas">
            <!--  escolha o arquivo -->
            <label>imagem do equipamento:</label><br>
            <input type="file" id="fileInput" style="display: none;">
            <label for="fileInput" id="fileInput">Selecione um arquivo</label>
  
          </div>
        </div>
  
        <!-- LINHA 5 DO FORMULÁRIO -->
  
        <div class="row">
          <div class="col-sm" id="colunas">
            <label for="">Tipo de equipamento:</label>
            <input type="text" class="form-control" name="tipo_equipamento" />
          </div>
          <div class="col-sm" id="colunas">
            <label for="">Responsavel:</label>
            <input type="text" class="form-control" name="responsavel" />
          </div>
          <!-- botão registrar equipamento -->
          <div class="col-sm" id="add" id="colunas">
            <div class="adicionar">
              <button class="adicionar">Adicionar Equipamento</button>
            </div>
          </div>
        </div>
      </div>
  
  
      </form>
    </div>


    <!-- Footer -->
    <?php include "../includes_padroes/footer.php"?>