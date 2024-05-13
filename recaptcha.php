<html>
  <head>
    <title>reCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="?" method="POST">  
        <!-- input -->
      <div class="g-recaptcha" data-sitekey="6LfHQdspAAAAAFguMQLHNje6h8FZp_jy_j4N3PO2"></div>
      <br/> 
      <input type="submit" name="Enviar" onclick="return valida()">

    </form>

    <script type="text/javascript">
      function valida(){
        if (grecaptcha.getResponse() == ""){
          alert("Você precisa marcar a validação")
          return false;
        }
      }
    </script>
    <?php
    if(isset($_POST['enviar'])){
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
        }

      }
    }

  </body>
</html>