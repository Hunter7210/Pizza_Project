<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtragem de Sabores de Pizza</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 50px auto;
        }
        h1 {
            text-align: center;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="container">
        
    <h1>Filtragem de Funcionarios</h1>
        <h3>Fique por dentro dos nossos Funcionarios!</h3>
        <form action="" method="POST">
            <label for="valor_buscado">Buscar por nome ou função:</label>
            <input type="text" id="valor_buscado" name="valor_buscado">
            <input type="submit" name="submit" value="Buscar">
        </form>
        <?php
        include("../Controller/buscar_func_controller.php");
        ?>
    </div>
</body>
</html>
