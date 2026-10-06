<?php
header("Content-Type: application/json; charset=UTF-8");

$metodo = $_SERVER["REQUEST_METHOD"];

switch ($metodo) {
    case "POST":
        require_once "endereco_criar.php";
        break;

    case "GET":
        if (isset($_GET["id"])) {
            require_once "endereco_buscar.php";
        } else {
            require_once "endereco_listar.php";
        }
        break;

    case "PUT":
        require_once "endereco_atualizar.php";
        break;

    case "DELETE":
        require_once "endereco_excluir.php";
        break;

    default:
        http_response_code(405);
        echo json_encode(["erro" => "Método não permitido."]);
        break;
}