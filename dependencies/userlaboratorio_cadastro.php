<?php
// cadastros_laboratorios.php

// Incluir arquivo de configuração
include "../dependencies/config.php";

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar dados do formulário
    $nome_laboratorio = $_POST["nome_laboratorio"];
    $departamento = $_POST["departamento"];
    $coordenador = $_POST["coordenador"];
    $universidade = $_POST["universidade"];

    // Inserir dados no banco de dados
    $stmt = $conn->prepare("INSERT INTO laboratorios (nome_labarotorio, departamento, nome_coordenador, universidade) VALUES (:nome_laboratorio, :departamento, :coordenador, :universidade)");
    $stmt->bindParam(":nome_laboratorio", $nome_laboratorio);
    $stmt->bindParam(":departamento", $departamento);
    $stmt->bindParam(":coordenador", $coordenador);
    $stmt->bindParam(":universidade", $universidade);
    $stmt->execute();

    // Redirecionar para página de sucesso
    header("Location: ../itens_navbar_funcional_index/confirmacao_laboratorio.php");
    exit;
}
