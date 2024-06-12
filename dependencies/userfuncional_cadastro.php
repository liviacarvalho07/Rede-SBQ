

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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome_funcional = $_POST['nome'];
            $email_funcional = $_POST['e-mail'];
            $posicao = $_POST['posicao'];
            $senha_inserida = $_POST['senha'];
            $confirmar_senha = $_POST['confirmar_senha'];
            $area_atuacao = $_POST['area_atuacao'];
            $grupo_pesquisa = $_POST['grupo_pesquisa'];
            $nome_coordenador = $_POST['nome_coordenador'];
            $email_coordenador = $_POST['e-mail_coordenador'];
            $informacoes_laboratorio = $_POST['informacoes_laboratorio'];
        
            if ($senha_inserida === $confirmar_senha) {
                $stmt = $conn->prepare("INSERT INTO cad_funcional (nome_funcional, email_funcional, posicao, senha, area_atuacao, grupo_pesquisa, nome_coordenador, email_coordenador, informacoes_laboratorio) VALUES (:nome_funcional, :email_funcional, :posicao, :senha, :area_atuacao, :grupo_pesquisa, :nome_coordenador, :email_coordenador, :informacoes_laboratorio)");
                $stmt->bindParam(':nome_funcional', $nome_funcional);
                $stmt->bindParam(':email_funcional', $email_funcional);
                $stmt->bindParam(':posicao', $posicao);
                $stmt->bindParam(':senha', $senha_inserida);
                $stmt->bindParam(':area_atuacao', $area_atuacao);
                $stmt->bindParam(':grupo_pesquisa', $grupo_pesquisa);
                $stmt->bindParam(':nome_coordenador', $nome_coordenador);
                $stmt->bindParam(':email_coordenador', $email_coordenador);
                $stmt->bindParam(':informacoes_laboratorio', $informacoes_laboratorio);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='../Index/acessar_funcional.php';</script>";
                    exit();
                } else {
                    echo "Error: ". $conn->error;
                }
            } else {
                echo "Senhas não coincidem.";
            }
        }

        $conn = null;
    }

    cadastro_funcional();
}
} else {
    echo "Você precisa marcar a validação do recaptcha.";
} ?>




