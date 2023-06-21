<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale conosco</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="shortcut icon" href="imgtop3.png" />
    <link rel="stylesheet" href="./css/Faleconosco.css">
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
                        <a href="Home.php"><button  class="boton-menu boton-categoria">
                            <i class="bi bi-house-fill"></i>Home</button></a>
                    </li>

                    <li>
                        <a href="index.php"><button  class="boton-menu boton-categoria ">
                            <i class="bi bi-bag-fill"></i>Produtos</button></a>
                    </li>

                    <li>
                        <a href="Login.php"><button  class="boton-menu boton-categoria">
                            <i class="bi bi-box-arrow-in-right"></i>Login</button></a>
                    </li>

                    <li>
                        <a href="##"><button  class="boton-menu boton-categoria active">
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
            <footer class="Rodape">
                <div class="row">
                    <div class="col">
                        <img src="imgtop3.png" class="footer_logo">
                        
                    </div>
                    <div class="col">
                        <h3>Email's <div class="bottom_line"><span></span></div></h3>
                        <p>Jairfernandes06@gmail.com (CEO)</p><br>
                        <p>Josecorreia42@gmail.com (CEO)</p><br>
                        <p>AgroVendas_01@gmail.com</p><br>
                    </div>
                    
                    <div class="col">
                        <h3>Contactos <div class="bottom_line"><span></span></div></h3>
                        <ul>
                            <li><a href="">+244 937 545 769 (Apoio Cliente)</a></li><br>
                            <li><a href="">+244 943 234 321 (Jair-Ceo)</a></li><br>
                            <li><a href="">+244 923 547 832 (Jose-Ceo)</a></li><br>
                        </ul>
                    </div>
                    
                    <div class="col">
                        <h3>Mídias Sociais <div class="bottom_line"></div></h3>
                        <ul>
                            <li><a href="">Jairfernandescampox</a></li><br>
                            <li><a href=""> Xaxacorreia_</a></li><br>
                            <li><a href="">AgroVendas_Online</a></li>
                        </ul>
                        <div class="social_icons">
                            <!--- Icons Whatsapp -->
                            <a href="##" class="social_links">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                            <!--- Icons Google -->
                            <a href="##" class="social_links">
                                <i class="bi bi-google"></i>
                            </a>
                            <!--- Icons  Instagram -->
                            <a href="##" class="social_links">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <!--- Icons Telephone -->
                            <a href="##" class="social_links">
                                <i class="bi bi-telephone-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <p class="copyright">AgroVendas Ⓒ 2023 - All Rights Reserved</p>
             </footer>  
        </main>
    </div>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/menu.js"></script>
</body>
</html>