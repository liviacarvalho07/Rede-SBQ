<?php
include "config.php";
session_start(); // Inicializa a sessÃ£o

if(isset($_POST['submit'])){
    if(!empty($_POST['g-recaptcha-response'])){
        $url ="https://www.google.com/recaptcha/api/siteverify";
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

        if ($resultado->success == 1){
            // Verifica se o formul«¡rio foi submetido
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Conecta ao banco de dados
                include "../includes_padroes/config.php";
            
                // Verifica se o usu«¡rio existe no banco de dados
                $email = $_POST["email"];
                $senha = $_POST["senha"];
            
                $stmt = $conn->prepare("SELECT * FROM cad_funcional WHERE email_funcional = :email AND senha = :senha");
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":senha", $senha);
                $stmt->execute();
            
                // Verifica se o usu«¡rio existe
                if ($stmt->rowCount() > 0) {
                    $user = $stmt->fetch();
                    $_SESSION["id"] = $user["id"];
                    $_SESSION["nome"] = $user["nome_funcional"];
                    echo "foi";
                    echo "<script>alert('Login realizado com sucesso!'); window.location.href='../itens_navbar_funcional_index/tela_inicial_funcional.php';</script>"; // Redireciona para a p«¡gina do dashboard ap«Ñs o login
                    exit();
                } else {
                    echo "Usu«¡rio ou senha inv«¡lidos";
                }
            }
            
        }
    }
}
?>