# Desafio Back-End - API PHP & Firebird

## Descricao
API RESTful desenvolvida em PHP integrada com base de dados Firebird para gestao de contatos e enderecos.

## Requisitos
- PHP 8.1+ com extensao pdo_firebird habilitada
- Servidor Firebird configurado

## Configuracao do Banco
1. O script de criacao da tabela ENDERECO esta disponivel no arquivo schema.sql.
2. Ajuste o caminho do arquivo .fdb no arquivo db.php, se necessario.

## Como Executar
No terminal, dentro da pasta do projeto, execute:
```cmd
php -S localhost:8000
```

## Endpoints de Endereco
- POST /endereco.php - Cadastra um novo endereco vinculado a um ID_CONTATO
- GET /endereco.php - Lista todos os enderecos
- GET /endereco.php?id=1 - Busca endereco por ID
- PUT /endereco.php - Atualiza os dados de um endereco existente
- DELETE /endereco.php?id=1 - Remove um endereco por ID

## Testes
Os endpoints foram validados e testados via Postman.
