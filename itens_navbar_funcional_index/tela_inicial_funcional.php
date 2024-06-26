<?php include "navbar_index_itens.php"?>
<!----------- Parte de Pesquisa dos Equipamentos e Laboratórios ----------->
<div class="barra">
  <div class="quadrado">
    <div class="diretorio">
        <a href="tela_inicial_funcional.php"><img src="../itens_navbar_funcional_index/assets/img/casa.png" alt="Home"></a>
        > 
    </div>
  </div>
  <div class="triangulo"></div>
</div>
<div class="pesquisa">
    <div class="painel">    
        <h1 class="convite">Venha conhecer a Rede SBQ</h1>
        <div class="digitacao">
            
            <input class="caixa" type="text" id="pesquisa" placeholder="pesquise por laboratórios, equipamentos...">
            <li><a href="#" onclick="pesquisar()"> Pesquisar</a></li>

        </div>
        <ul class="num">
            <li >Instituições<br>2.457</li>
            <li >Laboratórios<br>
                <?php
                // Conecta ao banco de dados
                $conn = mysqli_connect('localhost', 'eeepma26_rede_sbq', 'rede@sbq01', 'eeepma26_rede_sbq');

                // Verifica se a conexão foi estabelecida com sucesso
                if (!$conn) {
                    die("Erro de conexão: ". mysqli_connect_error());
                }

                // Query para contar o total de laboratórios cadastrados
                $query_laboratorios = "SELECT COUNT(*) as total_laboratorios FROM laboratorios";
                $result_laboratorios = mysqli_query($conn, $query_laboratorios);

                // Verifica se a query foi executada com sucesso
                if (!$result_laboratorios) {
                    die("Erro ao executar query: ". mysqli_error($conn));
                }

                // Pega o resultado da query
                $row_laboratorios = mysqli_fetch_assoc($result_laboratorios);
                $total_laboratorios = $row_laboratorios['total_laboratorios'];

                // Query para contar o total de equipamentos cadastrados
                $query_equipamentos = "SELECT COUNT(*) as total_equipamentos FROM equipamentos_catalogo";
                $result_equipamentos = mysqli_query($conn, $query_equipamentos);

                // Verifica se a query foi executada com sucesso
                if (!$result_equipamentos) {
                    die("Erro ao executar query: ". mysqli_error($conn));
                }

                // Pega o resultado da query
                $row_equipamentos = mysqli_fetch_assoc($result_equipamentos);
                $total_equipamentos = $row_equipamentos['total_equipamentos'];

                // Fecha a conexão com o banco de dados
                mysqli_close($conn);

                echo $total_laboratorios;
               ?>
            </li>
            <li >Equipamentos<br><?php echo $total_equipamentos;?></li>
        </ul>
    </div>
    

</div>
<div class="inform">
    
    <div class="titulo">
        <h2><img class="casa" src="assets/img/house.png" alt="">Bem vindo à SBQ</h2>
        <h4>A SBQ, fundada em Julho de 1977, é a principal sociedade de química do país e 
            tem como objetivos o desenvolvimento e consolidação da comunidade química brasileira, 
        a divulgação da Química e de suas importantes relações, aplicações e consequências para o desenvolvimento do país 
    e para a melhoria da qualidade de vida dos codadãos.</h4>
    </div>
    <div class="titulo1">
        <h2>Eleições SBQ 2024 - processo de indicação</h2>
        <h4>Para participar do processo de indicação das Eleições SBQ 2024, acesse o sistema (sistema.sbq.org.br)
        utilize seu login e senha ao qual você utiliza como associado. A busca do indicado poderá ser feita através da digitação do nome. No caso das divisões, o sistema permitirá apenas a indicação de nomes de candidatos filiados às respectivas divisões. Reiteramos que o período de sugestões terá início no dia 27/11/2023 e término às 23h59min do dia 05/01/2024. </h4>
    </div>
    <div class="titulo2">
        <h2>Últimas Notícias e Eventos</h2>
        <h4>Professor Érico Flores da UFSM é o primeiro pesquisador latino-americano a receber a medalha Ioannes Marcus Marci
        SBQast 89 - Química do interior paulista atrai investimentos privados
        Coluna "Onde elas estão?" - Fátima Fontes
        SBQ adere à Conversa Global sobre Sustentabilidade
        Webinários SBQ - "Educação e Divulgação Científica para os ODS da Agenda 2030"
        "O Governo Federal precisa perceber o dano que está causando à Ciência e Tecnologia", alerta presidente da SBPC</h4>
    </div>
    <iframe src="https://www.youtube.com/embed/VLGAnl525qY" frameborder="0" width="400" height="300" style="margin-bottom: 2rem;"></iframe>
</div>
<?php include "../includes_padroes/footer.php"?>
<script src="assets/js/script.js"></script>
<script>
function pesquisar() {
    var pesquisa = document.getElementById('pesquisa').value;
    window.location.href = "pesquisa.php?pesquisa=" + pesquisa;
}
</script>
</body>


</html>
