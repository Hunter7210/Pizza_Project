<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form action="./Controller/buscar_prod_controller.php" method="post">
            <label for="">Pesquise um sabor ou o nome do produto</label>
            <input type="text" id="valor_buscado" nome="valor_buscado" placeholder="Digite aqui">
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Pesquisar</button>
        </form>
    </div>
</body>

</html>