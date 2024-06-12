<?php
include "config.php";

// Inicializa a sessão aqui
session_start();

if(isset($_POST['submit'])){
    if(!empty($_POST['g-recaptcha-response'])){
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $secret = "6LfHQdspAAAAALH3BnM_sjkrn_ew2keHlmzkjw1H";
        $response = $_POST['g-recaptcha-response'];
        $variaveis = "secret=".$secret."&response=".$response;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $variaveis);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $resposta = curl_exec($ch);
        $resultado = json_decode($resposta);

        if ($resultado->success == 1) {
            // Continua������o do c���digo
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $usuario = $_POST["usuario_acesso"];
              $senha = $_POST["senha_acesso"];

              $sql = "SELECT id, nome_pessoal FROM cad_pessoal WHERE email_pessoal = :usuario AND senha = :senha";
              $stmt = $conn->prepare($sql);
              $stmt->bindParam(':usuario', $usuario);
              $stmt->bindParam(':senha', $senha);
              $stmt->execute();

              $result = $stmt->fetch(PDO::FETCH_ASSOC);

              if ($result) {
                $_SESSION["id"] = $result["id"];
                $_SESSION["nome"] = $result["nome_pessoal"];
                echo "<script>alert('Login realizado com sucesso!'); window.location.href='../itens_navbar_pessoal_index/tela_inicial_pessoal.php';</script>"; // Redireciona para a página do dashboard após o login
                exit();
              } else {
                echo "Usuário ou senha incorretos.";
              }
            }
 
            
        }
    }
}
?>