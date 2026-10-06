<?php
require_once "db.php";

$dados = json_decode(file_get_contents("php://input"), true);

if (!empty($dados["id_contato"]) && !empty($dados["rua"])) {
    $sql = "INSERT INTO endereco (id_contato, rua, cidade, estado, cep) VALUES (:id_contato, :rua, :cidade, :estado, :cep)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":id_contato" => $dados["id_contato"],
        ":rua"        => $dados["rua"],
        ":cidade"     => $dados["cidade"] ?? null,
        ":estado"     => $dados["estado"] ?? null,
        ":cep"        => $dados["cep"] ?? null
    ]);

    http_response_code(201);
    echo json_encode(["mensagem" => "Endereço cadastrado com sucesso!"]);
} else {
    http_response_code(400);
    echo json_encode(["erro" => "Os campos id_contato e rua são obrigatórios."]);
}