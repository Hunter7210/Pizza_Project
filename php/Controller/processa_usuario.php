<?php
require_once './Connection/ConexaoDB.php';
// Definir o BD (e a tabela)
// Conectar ao BD (com o PHP)

if (!empty($_POST)) {
    // Está chegando dados por POST e então posso tentar inserir no banco
    // Obter as informações do formulário ($_POST)
    try {
        // Preparar as informações
        // Montar a SQL (pgsql)
        $sql = "INSERT INTO clientes (cpf_cliente, nome, idade) VALUES (:cpf_clientes, :nome, :idade); INSERT INTO endereco (id_endere, , complemento, rua, numero) VALUES  (:id_endere, , :complemento, :rua, :numero)";

        // Preparar a SQL (pdo)
        $stmt = $pdo->prepare($sql);
        // Definir/organizar os dados p/ SQL
        $dados = array(
            ':cpf_clientes' => $_POST['cpf'],
            ':nome' => $_POST['nome'],
            ':endereco' => $_POST['endereco'],
            ':idade' => $_POST['idade']
        );
        // Tentar Executar a SQL (INSERT)
        // Realizar a inserção das informações no BD (com o PHP)
        if ($stmt->execute($dados)) {
            header("Location: index.php?msgSucesso=Cadastro realizado com sucesso!");
        }
    } catch (PDOException $e) {
        //die($e->getMessage());
        header("Location: index.php?msgErro=Falha ao cadastrar...");
    }
} else {
    header("Location: index.php?msgErro=Erro de acesso.");
}
die();
// Redirecionar para a página inicial (login) c/ mensagem erro/sucesso
