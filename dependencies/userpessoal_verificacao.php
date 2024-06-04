<?php
include "config.php";

if(isset($_POST['submit'])){
    if(!empty($_POST['g-recaptcha-response'])){
      $url ="https://www.google.com/recaptcha/api/siteverify";
      $secret = "6LfHQdspAAAAALH3BnM_sjkrn_ew2keHlmzkjw1H";
      $response = $_POST['g-recaptcha-response'];
      $variaveis = "secret=".$secret."&response".$response;

      $ch = curl_init($url);
      curl_setopt( $ch, CURLOPT_POST, 1);
      curl_setopt( $ch, CURLOPT_POSTFIELDS, $variaveis);
      curl_setopt( $ch, CURLOPT_FOLOOWLOCATION, 1);
      curl_setopt( $ch, CURLOPT_HEADER, 0);
      curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
      $resposta = curl_exec($ch);
      print_r($resposta);
      $resultado = json_decode($resporta);
      if ($resultado-> success == 1){
        echo "foi";
        /* Continuacao do codigo */
        require_once "config.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email_acesso = $_POST['usuario_acesso'];
            $senha_acesso = $_POST['senha_acesso'];

            // Validate user credentials
            $stmt = $conn->prepare("SELECT * FROM cad_pessoal WHERE email_cadastrado = :email AND SENHA = :senha");
            $stmt->bindParam(':email', $email_acesso);
            $stmt->bindParam(':senha', $senha_acesso);
            $stmt->execute();

            // Check if the user exists
            if ($stmt->rowCount() > 0) {
                // Redirect the user to a success page or perform any other action
                header("Location: Cadfuncional.php");
                exit();
            } else {
                // Display an error message
                $error = "Invalid email or password";
            }
        }
      }

    }
  }
?>
