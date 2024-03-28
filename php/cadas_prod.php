<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Cadastre o produto no estoque</h1>
        <form action="./Controller/cadas_prod_controller.php" method="post">
            <div class="col-4">
                <label for="nome">Nome do produto:</label>
                <input type="text" name="nome_prod" id="nome_prod" placeholder="Digite o nome do produto" class="form-control">
            </div>
            <div class="col-4">
                <label for="idade">Marca:</label>
                <input type="text" name="marca_prod" id="marca_prod" class="form-control" placeholder="Digite a marca do produto">
            </div>
            <div class="col-4">
                <label for="cpf">Data de validade:</label>
                <input type="date" name="data_vali_prod" id="data_valid_prod" class="form-control" placeholder="Digite a data de validade">
            </div>

            <button type="submit" name="submit" id="submit" class="btn btn-primary">Cadastrar</button>

            <a href="./buscar_prod.php" class="btn btn-danger">Ver Produtos</a>
        </form>
    </div>

</body>

</html>