<?php
// Incluir o arquivo de configuração do banco de dados
include "../dependencies/config.php";

// Query para pesquisar os equipamentos
$query = "SELECT * FROM equipamentos_catalogo";

// Preparar a query
$stmt = $conn->prepare($query);

// Executar a query
$stmt->execute();

// Contar o número de resultados
$num_results = $stmt->rowCount();

// Paginação
$pagina_atual = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
$itens_por_pagina = 7;
$inicio = ($pagina_atual - 1) * $itens_por_pagina;

// Query para pesquisar os equipamentos com paginação
$query_paginacao = "SELECT * FROM equipamentos_catalogo LIMIT $inicio, $itens_por_pagina";

// Preparar a query
$stmt_paginacao = $conn->prepare($query_paginacao);

// Executar a query
$stmt_paginacao->execute();

// Resultados
$resultados = $stmt_paginacao->fetchAll(PDO::FETCH_ASSOC);

// Exibir os resultados
foreach ($resultados as $resultado) {
    ?>
    <div class="quad_catalogo">
        <div class="img-equi">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOGFQJIPkbGTmVzKrCxSC8rIq7vmaw3eLO2g&s" alt="Imagem do equipamento">
        </div>
        <div class="infor-equi">
            <div class="nome-equip"><h2><b>Nome:</b> <?php echo $resultado['nome_equipamento']; ?></h2></div>
            <div class="lab-equi"><h4><b>Laboratório:</b> <?php echo $resultado['nome_labarotorio']; ?></h4></div>
            <div class="descr-equi"><h6><b>Descrição:</b> <?php echo $resultado['descricao']; ?></h6></div>
            <div class="mais-detalhes"><a href=""><button>Mais Detalhes</button></a></div>
        </div>
    </div>
    <?php
}

// Paginação
$numero_paginas = ceil($num_results / $itens_por_pagina);
for ($i = 1; $i <= $numero_paginas; $i++) {
    ?>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php
}
?>
