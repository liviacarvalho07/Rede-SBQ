<?php
require 'config.php';
global $conn;

if (isset($_POST['submit'])) {
    if (!empty($_POST['g-recaptcha-response'])) {
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $secret = "6LfHQdspAAAAALH3BnM_sjkrn_ew2keHlmzkjw1H";
        $response = $_POST['g-recaptcha-response'];
        $variaveis = "secret=" . $secret . "&response" . $response;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $variaveis);
        curl_setopt($ch, CURLOPT_FOLOOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $resposta = curl_exec($ch);
        print_r($resposta);
        $resultado = json_decode($resporta);
        if ($resultado->success == 1) {
            function cadastro_pessoal()
            {

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $nome_pessoal = $conn->quote($_POST['nome']);
                    $email_pessoal = $conn->quote($_POST['e-mail']);
                    $instituicao_formacao = $conn->quote($_POST['instituicao-titulacao']);
                    $ano_conclusao = $conn->quote($_POST['ano_conclusao']);
                    $estado = $conn->quote($_POST['estado']);
                    $cidade = $conn->quote($_POST['cidade']);
                    $instituicao_atual = $conn->quote($_POST['instituicao-atual']);
                    $nivel_escolaridade = $conn->quote($_POST['nivel_escolaridade']);
                    $funcao_cargo = $conn->quote($_POST['funcao_cargo']);
                    $senha_inserida = $conn->quote($_POST['senha']);
                    $confirmar_senha = $conn->quote($_POST['confirmar_senha']);

                    if ($senha_inserida === $confirmar_senha) {
                        $senha_hash = password_hash($senha_inserida, PASSWORD_DEFAULT);

                        $sql = "INSERT INTO cad_pessoal (nome_pessoal, email_pessoal, estado, cidade, funcao, nivel_formacao, instituicao_formacao, instituicao_atuacao, ano_conclusao, senha)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                        $stmt = $conn->prepare($sql);
                        $stmt->execute([$nome_pessoal, $email_pessoal, $estado, $cidade, $funcao_cargo, $nivel_escolaridade, $instituicao_formacao, $instituicao_atual, $ano_conclusao, $senha_hash]);

                        if ($stmt->rowCount() > 0) {
                            header("Location: ../index.php");
                        } else {
                            echo "Error: " . $conn->error;
                        }
                    } else {
                        echo "Senhas não coincidem.";
                    }
                }

                $conn = null;
            }

            cadastro_pessoal();
        }

    }
}
?>
