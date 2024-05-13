<?php
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
?>
