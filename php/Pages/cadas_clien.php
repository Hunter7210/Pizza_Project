<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cadastrar Novo(a) Usuário(a)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <!--
Nome Completo
Data de Nascimento
Telefone
E-mail
Senha
-->

    <div class="container">
        <h1>Cadastre-se</h1>
        <form action="../Controller/processa_usuario.php" method="post">
            <div class="col-4">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="col-4">
                <label for="idade">Idade:</label>
                <input type="number" name="idade" id="idade" class="form-control">
            </div>
            <div class="col-4">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control">
            </div>

            <h2>Endereço</h2>
            <hr>
            <div class="col-4">
                <label for="endereco">Rua: </label>
                <input type="text" name="rua" id="endereco" class="form-control">
            </div>
            <div class="col-4">
                <label for="numero">N°: </label>
                <input type="text" name="numero" id="numero" class="form-control">
            </div>
            <div class="col-4">
                <label for="complemento">Complemento:  </label>
                <input type="text" name="complemento" id="complemento" placeholder="(opcional)" class="form-control">
            </div>
         
        
            <button type="submit" name="enviarDados" class="btn btn-primary">Cadastrar</button>

            <a href="index.php" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</body>

</html>