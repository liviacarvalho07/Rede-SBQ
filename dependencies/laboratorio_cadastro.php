<?php
require_once "config.php";

// Get form data
$nome_laboratorio = $_POST['nome_laboratorio'];
$departamento = $_POST['departamento'];
$coordenador = $_POST['coordenador'];
$universidade = $_POST['universidade'];

try {
    // Begin the transaction
    $conn->beginTransaction();

    // Insert into the database
    $stmt = $conn->prepare("
        INSERT INTO laboratorios (
            nome_laboratorio,
            departamento,
            nome_coordenador,
            universidade
        ) VALUES (
            :nome_laboratorio,
            :departamento,
            :coordenador,
            :universidade
        )
    ");

    $stmt->bindParam(':nome_laboratorio', $nome_laboratorio);
    $stmt->bindParam(':departamento', $departamento);
    $stmt->bindParam(':coordenador', $coordenador);
    $stmt->bindParam(':universidade', $universidade);

    $stmt->execute();

    // Commit the transaction
    $conn->commit();

    // Redirect to success page
    header('Location: ../success.php');
    exit;
} catch (PDOException $e) {
    // Revert changes
    $conn->rollBack();

    // Display error message
    echo "Error: " . $e->getMessage();
}

?>
