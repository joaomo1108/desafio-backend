<?php
require_once "db.php";

$sql = "SELECT * FROM endereco";
$stmt = $pdo->query($sql);
$enderecos = $stmt->fetchAll();

echo json_encode($enderecos);