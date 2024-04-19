<?php

// Inclui a página de conexão com o banco de dados
require_once("../Connection/ConexaoDB.php"); 

if (isset($_POST['submit'])) {
    // Evite injeção de SQL usando prepared statements
    $sql =  "SELECT * FROM pedidos WHERE data_reali_ped = :valor_buscado";
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
            <th>Data Pedido Realizado</th>
            <th>Data de Entrega</th>
            <th>Valor Pedido</th>
            <th>excluir</th>
        </thead>';

        // Exibe os resultados
        foreach ($stmt->fetchAll() as $row) {
            echo '
            <tr>
                <td>' . $row['data_reali_ped'] . '</td>
                <td>' . $row['data_entreg_pedi'] . '</td>
                <td>' . $row['valor_pedi'] . '</td>

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
