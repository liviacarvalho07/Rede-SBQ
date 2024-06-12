

<?php require 'config.php'; 
global $conn;
if (isset($_POST['submit'])) {
 if (!empty($_POST['g-recaptcha-response']))
  {
   $url = "https://www.google.com/recaptcha/api/siteverify";
   $secret = "6LfHQdspAAAAALH3BnM_sjkrn_ew2keHlmzkjw1H"; 
   $response = $_POST['g-recaptcha-response']; 
   $variaveis = "secret=" . $secret . "&response=" . $response;$ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $variaveis);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $resposta = curl_exec($ch);
    $resultado = json_decode($resposta);
    if ($resultado->success == 1) {
        // Cadastrar usuário
        $nome = $_POST['nome'];
        $email = $_POST['e-mail'];
        $instituicao_titulacao = $_POST['instituicao_titulacao'];
        $ano_conclusao = $_POST['ano_conclusao'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $instituicao_atual = $_POST['instituicao_atual'];
        $nivel_escolaridade = $_POST['nivel_escolaridade'];
        $funcao_cargo = $_POST['funcao_cargo'];
        $senha = $_POST['senha'];
        $confirmar_senha = $_POST['confirmar_senha'];

        $stmt = $conn->prepare("INSERT INTO cad_pessoal (nome_pessoal, email_pessoal, instituicao_formacao, ano_conclusao, estado, cidade, instituicao_atuacao, nivel_formacao, funcao, senha) VALUES (:nome, :email, :instituicao_titulacao, :ano_conclusao, :estado, :cidade, :instituicao_atual, :nivel_escolaridade, :funcao_cargo, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':instituicao_titulacao', $instituicao_titulacao);
        $stmt->bindParam(':ano_conclusao', $ano_conclusao);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':instituicao_atual', $instituicao_atual);
        $stmt->bindParam(':nivel_escolaridade', $nivel_escolaridade);
        $stmt->bindParam(':funcao_cargo', $funcao_cargo);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='../Index/acessar_pessoal.php';</script>";
    exit();
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    } else {
        echo "Erro ao verificar recaptcha.";
    }
} else {
    echo "Você precisa marcar a validação do recaptcha.";
}} ?>