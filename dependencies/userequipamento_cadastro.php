<?php
// cadastros_equipamentos.php

// Incluir arquivo de configuração
require_once "config.php";

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar dados do formulário
    $nome_equipamento = $_POST["nome_equipamento"];
    $instituicao_proprietaria = $_POST["instituicao_proprietaria"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $tipo_equipamento = $_POST["tipo_equipamento"];
    $descricao = $_POST["descricao"];
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $responsavel = $_POST["responsavel"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $nome_laboratorio = $_POST["nome_laboratorio"];

    // Inserir dados no banco de dados
    $stmt = $conn->prepare("INSERT INTO equipamentos_catalogo (nome_equipamento, instituicao_proprietaria, marca, modelo, tipo_equipamento, descricao, cep, rua, bairro, cidade, responsavel, telefone, email, website, nome_labarotorio) VALUES (:nome_equipamento, :instituicao_proprietaria, :marca, :modelo, :tipo_equipamento, :descricao, :cep, :rua, :bairro, :cidade, :responsavel, :telefone, :email, :website, :nome_laboratorio)");
    $stmt->bindParam(":nome_equipamento", $nome_equipamento);
    $stmt->bindParam(":instituicao_proprietaria", $instituicao_proprietaria);
    $stmt->bindParam(":marca", $marca);
    $stmt->bindParam(":modelo", $modelo);
    $stmt->bindParam(":tipo_equipamento", $tipo_equipamento);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":cep", $cep);
    $stmt->bindParam(":rua", $rua);
    $stmt->bindParam(":bairro", $bairro);
    $stmt->bindParam(":cidade", $cidade);
    $stmt->bindParam(":responsavel", $responsavel);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":website", $website);
    $stmt->bindParam(":nome_laboratorio", $nome_laboratorio);
    $stmt->execute();

    // Redirecionar para página de sucesso
    header("Location: ../itens_navbar_funcional_index/confirmacao_equipamento.php");
    exit;
}
