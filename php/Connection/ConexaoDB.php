<?php
// endereco
// nome do BD
// usuario
// senha
$endereco = 'localhost';
$banco = 'Pizzaria_TurmaA';
$adm = 'postgres';
$senha = 'postgres';

try {
    // sgbd:host;port;dbname
    // usuario
    // senha
    // errmode
    $conexao = new PDO(
        "pgsql:host=$endereco;port=5432;dbname=$banco",
        $adm,
        $senha,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    print("Conectado no banco de dados!!!");
} catch (PDOException $e) {
    echo "Falha ao conectar ao banco de dados.<br\>";
    die($e->getMessage());
}
