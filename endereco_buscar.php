<?php
require_once "db.php";

$id = $_GET["id"] ?? null;

if ($id) {
    $sql = "SELECT * FROM endereco WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([":id" => $id]);
    $endereco = $stmt->fetch();

    if ($endereco) {
        echo json_encode($endereco);
    } else {
        http_response_code(404);
        echo json_encode(["erro" => "Endereço não encontrado."]);
    }
} else {
    http_response_code(400);
    echo json_encode(["erro" => "ID não fornecido."]);
}