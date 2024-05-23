<?php
// Incluir arquivo de configuração
require_once "../dependencies/config.php";

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recuperar dados do formulário
  $nome_equipamento = $_POST["nome_equipamento"];
  $instituicao_proprietaria = $_POST["instituicao_proprietaria"];
  $marca = $_POST["marca"];
  $modelo = $_POST["modelo"];
  $imagem = $_FILES["imagem"]["name"];
  $tipo_equipamento = $_POST["tipo_equipamento"];
  $descricao = $_POST["descricao"];
  $nome_laboratorio = $_POST["nome_laboratorio"];
  $cep = $_POST["cep"];
  $rua = $_POST["rua"];
  $bairro = $_POST["bairro"];
  $cidade = $_POST["cidade"];
  $responsavel = $_POST["responsavel"];
  $telefone = $_POST["telefone"];
  $email = $_POST["email"];
  $website = $_POST["website"];

  // Verificar se a imagem foi enviada
  if (!empty($_FILES["imagem"]["name"])) {
    $imagem_tmp = $_FILES["imagem"]["tmp_name"];
    $imagem_dir = "../uploads/equipamentos/";
    $imagem_nome = uniqid() . "_" . $imagem;
    move_uploaded_file($imagem_tmp, $imagem_dir . $imagem_nome);
  } else {
    $imagem_nome = "";
  }

  // Inserir dados no banco de dados
  $stmt = $conn->prepare("INSERT INTO equipamentos_catalogo (
    nome_equipamento,
    instituicao_proprietaria,
    marca,
    modelo,
    imagem,
    tipo_equipamento,
    descricao,
    nome_laboratorio,
    cep,
    rua,
    bairro,
    cidade,
    responsavel,
    telefone,
    email,
    website
  ) VALUES (
    :nome_equipamento,
    :instituicao_proprietaria,
    :marca,
    :modelo,
    :imagem,
    :tipo_equipamento,
    :descricao,
    :nome_laboratorio,
    :cep,
    :rua,
    :bairro,
    :cidade,
    :responsavel,
    :telefone,
    :email,
    :website
  )");

  $stmt->bindParam(":nome_equipamento", $nome_equipamento);
  $stmt->bindParam(":instituicao_proprietaria", $instituicao_proprietaria);
  $stmt->bindParam(":marca", $marca);
  $stmt->bindParam(":modelo", $modelo);
  $stmt->bindParam(":imagem", $imagem_nome);
  $stmt->bindParam(":tipo_equipamento", $tipo_equipamento);
  $stmt->bindParam(":descricao", $descricao);
  $stmt->bindParam(":nome_laboratorio", $nome_laboratorio);
  $stmt->bindParam(":cep", $cep);
  $stmt->bindParam(":rua", $rua);
  $stmt->bindParam(":bairro", $bairro);
  $stmt->bindParam(":cidade", $cidade);
  $stmt->bindParam(":responsavel", $responsavel);
  $stmt->bindParam(":telefone", $telefone);
  $stmt->bindParam(":email", $email);
  $stmt->bindParam(":website", $website);

  $stmt->execute();

  // Redirecionar para página de sucesso
  header("Location: sucesso.php");
  exit;
}
?>
