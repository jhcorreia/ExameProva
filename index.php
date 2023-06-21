<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="shortcut icon" href="imgtop3.png" />
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="wrapper">
        <header class="header-mobile">
            <h1 class="logo">AgroVendas</h1>
            <button class="open-menu" id="open-menu">
                <i class="bi bi-list"></i>
            </button>
        </header>
        <aside>
            <button class="close-menu" id="close-menu">
                <i class="bi bi-x"></i>
            </button>
            <header>
                <h1 class="logo">AgroVendas</h1>
            </header>
            <nav>
                <ul class="menu">
                    <li>
                        <a href="Home.php"><button  class="boton-menu boton-categoria ">
                            <i class="bi bi-house-fill"></i>Home</button></a>
                    </li>

                    <li>
                        <a href="##"><button  class="boton-menu boton-categoria active">
                            <i class="bi bi-bag-fill"></i>Produtos</button></a>
                    </li>

                    <li>
                        <a href="Login.php"><button  class="boton-menu boton-categoria">
                            <i class="bi bi-box-arrow-in-right"></i>Login</button></a>
                    </li>

                    <li>
                        <a href="Faleconosco.php"><button  class="boton-menu boton-categoria">
                            <i class="bi bi-info-circle-fill"></i>Fale conosco</button></a>
                    </li>

                    <li>
                        <a class="boton-menu boton-carrito" href="Carrinho.php">
                            <i class="bi bi-cart-fill"></i> Carrinho <span id="numerito" class="numerito">0</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">© Copyright 2023</p>
            </footer>
        </aside>
        <main>
            <h2 class="titulo-principal" id="titulo-principal">Todos Produtos</h2>
            <div id="contenedor-productos" class="contenedor-productos">
                <!-- Esto se va a rellenar con JS -->
                
            </div>
        </main>
    </div>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/menu.js"></script>
</body>
</html>