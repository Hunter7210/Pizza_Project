<?php


if (isset($_POST['submit'])) {
    //Incluindo a conexão somente se o btn dubmit for apertador
    include("../Connection/ConexaoDB.php");

    //Criando minha consulta sql
    $sql = "INSERT INTO produto (marca_prod, nome_prod, data_vali_prod) VALUES (:marca_prod, :nome_prod, :data_vali_prod)";

    //Inserindo dados
    if (isset($_POST['marca_prod']) && isset($_POST['marca_prod'])) {

        $nome_prod = $_POST['nome_prod'];
        $marca_prod = $_POST['marca_prod'];
        $data_vali_prod = $_POST['data_vali_prod'];


        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome_prod', $nome_prod);
        $stmt->bindValue(':marca_prod', $marca_prod);
        $stmt->bindValue(':data_vali_prod', $data_vali_prod);

        $stmt->execute();

        echo "<h2> Produto cadastrado com sucesso</h2>";

       echo '<a href="./buscar_prod.php" class="btn btn-danger">Ver Produtos</a>';

    } else {
        echo "<h2> Implementar novos dados falhou </h2>";
    }
    //Fechar a conexão 
    $conexao = null;
}
