<?php
require_once "db.php";

$dados = json_decode(file_get_contents("php://input"), true);
$id = $_GET["id"] ?? ($dados["id"] ?? null);

if ($id && !empty($dados["rua"])) {
    $sql = "UPDATE endereco SET rua = :rua, cidade = :cidade, estado = :estado, cep = :cep WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":id"     => $id,
        ":rua"    => $dados["rua"],
        ":cidade" => $dados["cidade"] ?? null,
        ":estado" => $dados["estado"] ?? null,
        ":cep"    => $dados["cep"] ?? null
    ]);

    echo json_encode(["mensagem" => "Endereço atualizado com sucesso!"]);
} else {
    http_response_code(400);
    echo json_encode(["erro" => "ID ou campos obrigatórios não fornecidos."]);
}