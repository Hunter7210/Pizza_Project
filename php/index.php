<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Header e Navbar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .header {
            height: 5vh;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 20vh;
            background-color: #666;
            color: white;
            padding: 10px;
        }
        .logo {
            width: 100px;
            height: auto;
            margin-left: 10px;
        }
        .right-section {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: end;
            padding-right: 20px;
        }
        .right-section img {
            width: 50px;
            height: auto;
        }
        .links-nav {
            display: flex;
            flex-direction:row;
            align-items: center;
            justify-content: space-around;
            width: 80%;

        }
        .links-nav a {
            color: white;
            text-decoration: none;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .image-container {
            width: 50%;
        }
        .image-container img {
            width: 100%;
            height: auto;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
        }
        .grid-container img {
            width: 100%;
            height: auto;
        }
        .cards-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            margin-top: 20px;
        }
        .card {
            width: 150px;
            height: 200px;
            background-color: #ccc;
            margin: 0 10px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }
        .footer img {
            width: 50px;
            height: auto;
            margin-right: 10px;
            float: left; /* Posiciona a imagem à esquerda */
        }
        .footer .links {
            float: right; /* Posiciona os links à direita */
        }
        .footer .links a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <header class="header">
        <p>Aproveite nossas promoções Utilize o cupom: PIZZA00</p>
    </header>
    <nav class="navbar">
        <div class="left-section">
            <img src="../img/PIZZA ITALIC/3.png" alt="Logo" class="logo">
        </div>
        <div class="right-section">
            <img src="" alt="Imagem direita">
            <a href="#" alt="Usuario"><img src="" alt=""></a>
            <div class="links-nav">
                <a href="#">Produtos</a>
                <a href="../php/cadas_clien.php">Cadastre-se</a>
                <a href="#">Faq</a>
                <a href="#">Sobre nós</a>
                <p>Tel:</p>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="image-container">
            <img src="../img/FIQUE ATENTO!/4.png" alt="Imagem" class="image">
        </div>
        <h2 class="title">Título dos Cards</h2>
        <div class="cards-container">
            <div class="card">
                <div class="img-card">
                    <img src="" alt="">
                </div>
                <div class="stars">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                    <img src="" alt="">
                </div>
                <div class="textos-card">
                    <h1>Nome produto</h1>
                </div>
                <div class="subtitu-card">
                    <p>subtitulo</p>
                </div>
                <div class="btn-card">
                    <button></button>
                </div>
            </div>
            <div class="card">Card 2</div>
            <div class="card">Card 3</div>
            <div class="card">Card 4</div>
            <div class="card">Card 5</div>
            <div class="card">Card 6</div>
        </div>
        <h2 class="title">Outro Título</h2>
        <div class="grid-container">
            <img src="imagem1.jpg" alt="Imagem 1">
            <img src="imagem2.jpg" alt="Imagem 2">
            <img src="imagem3.jpg" alt="Imagem 3">
        </div>
        <h2 class="title">Mais Cards</h2>
        <div class="cards-container">
            <div class="card">Card 7</div>
            <div class="card">Card 8</div>
            <div class="card">Card 9</div>
            <div class="card">Card 10</div>
            <div class="card">Card 11</div>
            <div class="card">Card 12</div>
        </div>
    </div>
    <footer class="footer">
        <img src="../img/PIZZA ITALIC/3.png" alt="Logo">
        <div class="links">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
            <a href="#">Link 4</a>
        </div>
        <p>&copy; 2024 Exemplo de Footer. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
