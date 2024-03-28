<?php

//Inclui a pagina de conexãoBD.php, no caso a pagina de conexão com o banco de dados
include("../Connection/ConexaoDB.php");

if (isset($_POST['submit'])) {


    //Codigo SQL para consultar toda a tabela pessoafisica
    $sql =  "SELECT * FROM produto WHERE nome_prod = :valor_buscado OR marca_prod = :valor_buscado";

    $valor_buscado = $_POST['valor_buscado'];

    //Variavel para conter o cod SQL ja preparado para realizar a consulta
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':valor_buscado', $valor_buscado);



    //Variavel para conter o resultado da execução do codigo SQL ou um possivel erro 
    $result = $stmt->execute() or die("Erro na consulta"); //die serve para parar o codigo

    //Para cada consulta ele ira criar uma matriz (fetchAll() = Matriz; fetch= Array simples;) com base na variavel $row
    echo '
<form action="./Controller/cadas_prod_controller.php" method="POST">
<table border=1>
<thead>

    <th>nome</th>
    <th>Sabor</th>
    <th>data de validade</th>
    <th>excluir</th>

    <style>
    thead {
        text-transform: uppercase;
        font-size:20px;
    }
</style>
</thead>';

    foreach ($stmt->fetchAll() as $row) {
        //Printa somente os campos desejados do banco de dados
        echo
        '<tbody>' . '<td>' . $row['nome_prod'] . '</td>' . '<td>' . $row['sabor_prod'] . '</td>' . '<td>' . $row['data_vali_prod'] .  '</td>' .  '<td>' . '<input type="submit" value="Excluir" name="excluir">' . '</td>';
        '</tbody>';
    }
    '</table>
</form>';


    //Fechar a conexão
    $stmt->closeCursor();
    //Limpa a variavel 
    $conexao = null;
}
