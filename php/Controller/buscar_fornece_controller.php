<?php

// Inclui a página de conexão com o banco de dados
require_once("../Connection/ConexaoDB.php"); 

if (isset($_POST['submit'])) {
    // Evite injeção de SQL usando prepared statements
    $sql =  "SELECT * FROM fornecedores WHERE nome_fornec = :valor_buscado OR prod_forneci_fornec = :valor_buscado";
    $valor_buscado = $_POST['valor_buscado'];

    // Prepara e executa a consulta
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':valor_buscado', $valor_buscado);
    $stmt->execute();

    // Verifica se houve resultados
    if ($stmt->rowCount() > 0) {
        echo '
        <form action="./Controller/cadas_prod_controller.php" method="POST">
        <table border=1>
        <thead>
            <th>Fornecedor</th>
            <th>Produto Fornecido</th>
            <th>Endereço</th>
            <th>excluir</th>
        </thead>';

        // Exibe os resultados
        foreach ($stmt->fetchAll() as $row) {
            echo '
            <tr>
                <td>' . $row['nome_fornec'] . '</td>
                <td>' . $row['prod_forneci_fornec'] . '</td>
                <td>' . $row['endereco_fornec'] . '</td>

                <td>
                    <input type="submit" value="Excluir" name="excluir">
                </td>
            </tr>';
        }

        echo '</table></form>';
    } else {
        echo 'Nenhum resultado encontrado.';
    }

    // Fecha a conexão e limpa a variável
    $stmt->closeCursor();
    $conexao = null;
}
?>
