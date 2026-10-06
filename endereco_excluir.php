<?php
require_once "db.php";

$id = $_GET["id"] ?? null;

if ($id) {
    $sql = "DELETE FROM endereco WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([":id" => $id]);

    echo json_encode(["mensagem" => "Endereço excluído com sucesso!"]);
} else {
    http_response_code(400);
    echo json_encode(["erro" => "ID não fornecido."]);
}