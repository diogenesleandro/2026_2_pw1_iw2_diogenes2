
<?php
include("conecta.php");
include("exibe_v.php");
try {
    $sql = "INSERT INTO tb_contato (nm_nome, ds_email) VALUES (:nome, :email)";
    $stmt = $pdo->prepare($sql);

    $nome     = $_POST['nome'] ?? null;
    $gmail    = $_POST['gmail'] ?? null;

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $gmail);

    $stmt->execute();

    exibe();
} catch (PDOException $e) {
    echo "Erro ao inserir: " . $e->getMessage();
}
?>