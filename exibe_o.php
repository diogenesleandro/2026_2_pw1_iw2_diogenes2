<?php
include ("conecta.php");
$sql = "SELECT * FROM tb_contato";
$stmt = $pdo->query($sql);

$resultados = $stmt->fetchObject();

foreach ($resultados as $user) {
    echo "Nome: {$user->nm_nome} | E-mail: {$user->ds_email}";
}