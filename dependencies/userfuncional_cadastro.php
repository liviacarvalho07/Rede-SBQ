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
      function cadastro_funcional()
      {
        global $conn;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $nome_funcional = $conn->quote($_POST['nome']);
          $email_funcional = $conn->quote($_POST['e-mail']);
          $posicao = $conn->quote($_POST['posicao']);
          $senha_inserida = $conn->quote($_POST['senha']);
          $confirmar_senha = $conn->quote($_POST['confirmar_senha']);
          $area_atuacao = $conn->quote($_POST['area_atuacao']);
          $grupo_pesquisa = $conn->quote($_POST['grupo_pesquisa']);
          $nome_coordenador = $conn->quote($_POST['nome_coordenador']);
          $email_coordenador = $conn->quote($_POST['e-mail_coordenador']);
          $informacoes_laboratorio = $conn->quote($_POST['informacoes_laboratorio']);
          $instituicao = $conn->quote($_POST['instituicao']);

          if ($senha_inserida === $confirmar_senha) {
            $senha_hash = password_hash($senha_inserida, PASSWORD_DEFAULT);

            $sql = "INSERT INTO cad_funcional (nome_funcional, email_funcional, posicao, senha, area_atuacao, grupo_pesquisa, nome_coordenador, email_coordenador, informacoes_laboratorio, instituicao)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->execute([$nome_funcional, $email_funcional, $posicao, $senha_hash, $area_atuacao, $grupo_pesquisa, $nome_coordenador, $email_coordenador, $informacoes_laboratorio, $instituicao]);

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

      cadastro_funcional();
    }
  }
}
?>
