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
      print_r($resposta)$resultado = json_decode($resporta);
      if ($resultado-> success == 1){
        echo "foi"
        /* Continuacao do codigo */
      }

    }
  }
?>