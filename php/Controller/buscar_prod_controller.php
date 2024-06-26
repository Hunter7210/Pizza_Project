<?php

// Inclui a página de conexão com o banco de dados
include("../Connection/ConexaoDB.php");
    
if (isset($_POST['submit'])) {
    // Evite injeção de SQL usando prepared statements
    $sql =  "SELECT * FROM produto WHERE nome_prod = :valor_buscado OR marca_prod = :valor_buscado";
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
        <th>Nome</th>
        <th>Marca Produto</th>
        <th>data de validade</th>
        <th>excluir</th>
        </thead>';

        // Exibe os resultados
        foreach ($stmt->fetchAll() as $row) {
            echo '
            <tr>
                <td>' . $row['nome_prod'] . '</td>
                <td>' . $row['marca_prod'] . '</td>
                <td>' . $row['data_vali_prod'] . '</td>
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
