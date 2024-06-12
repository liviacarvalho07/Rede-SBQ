<?php include "navbar_index_itens.php" ?>

<!-- Parte de Pesquisa dos Equipamentos e Laboratórios -->
<div class="barra">
    <div class="quadrado">
        <div class="diretorio">
            <a href="tela_inicial_pessoal.php"><img src="../itens_navbar_pessoal_index/assets/img/casa.png" alt="Home"></a>
            >
        </div>
    </div>
    <div class="triangulo"></div>
</div>
<div class="pesquisa" style="height: 15rem;">
    <div class="painel">
        <h1 class="convite">Pesquisar novamente?</h1>
        <div class="digitacao">
            <input class="caixa" type="text" id="pesquisa" placeholder="pesquise por laboratórios, equipamentos...">
            <li><a href="#" onclick="pesquisar()"> Pesquisar</a></li>
        </div>
    </div>
</div>

<!-- Área de catalogo -->
<div class="catalogo">
    <?php
    // Incluir arquivo de configuração do banco de dados
    include "../dependencies/config.php";

    // Verificar se há uma pesquisa sendo realizada
    if (isset($_GET['pesquisa'])) {
        $pesquisa = $_GET['pesquisa'];
        $sql = "SELECT * FROM equipamentos_catalogo WHERE nome_equipamento LIKE '%$pesquisa%' OR instituicao_proprietaria LIKE '%$pesquisa%' OR nome_labarotorio LIKE '%$pesquisa%'";
    } else {
        $sql = "SELECT * FROM equipamentos_catalogo";
    }

    // Executar consulta e contar número de resultados
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $num_results = $stmt->rowCount();

    // Definir número de itens por página
    $itens_por_pagina = 7;

    // Calcular número de páginas
    $num_paginas = ceil($num_results / $itens_por_pagina);

    // Verificar se há uma página específica sendo solicitada
    if (isset($_GET['pagina'])) {
        $pagina_atual = $_GET['pagina'];
    } else {
        $pagina_atual = 1;
    }

    // Calcular offset para paginação
    $offset = ($pagina_atual - 1) * $itens_por_pagina;

    // Executar consulta com paginação
    $sql .= " LIMIT $itens_por_pagina OFFSET $offset";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

    // Exibir resultados
    foreach ($results as $row) {
    ?>
        <div class="quad_catalogo">
            <div class="img-equi" style="background-image: url(assets/img/decoraçao.jpg);"></div>
            <div class="infor-equi">
                <div class="nome-equip">
                    <h2><b>Nome:</b> <?php echo $row['nome_equipamento']; ?></h2>
                </div>
                <div class="lab-equi">
                    <h4><b>Laboratório:</b> <?php echo $row['nome_labarotorio']; ?></h4>
                </div>
                <div class="descr-equi">
                    <h6><b>Descrição:</b> <?php echo $row['descricao']; ?></h6>
                </div>
                <div class="mais-detalhes"><a href="detalhes.php?id=<?php echo $row['id']; ?>"><button>Mais Detalhes</button></a></div>
            </div>
        </div>
    <?php



    }
    ?>
</div>

<!-- Paginação -->
<div class="paginação">
    <?php
    for ($i = 1; $i <= $num_paginas; $i++) {
    ?>
        <a class="paginacao" href="<?php echo $_SERVER['PHP_SELF']; ?>?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php
    }
    ?>
</div>

<?php include "../includes_padroes/footer.php" ?>
<script>
    function pesquisar() {
        var pesquisa = document.getElementById('pesquisa').value;
        window.location.href = "<?php echo $_SERVER['PHP_SELF']; ?>?pesquisa=" + pesquisa;
    }
</script>
</body>

</html>