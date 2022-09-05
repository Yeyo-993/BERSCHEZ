<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
            alert("Inicia secion para acceder a la pagina");
            window.location = "index.php";
        </script>';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERSCHEZ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/9384e3ba9d.js"></script>
</head>
<body>
    <header>
        <section class="azafata_imagen">
            <nav>
                <a href=""  class="menu">
                    <img src="./assets/icons/menu.svg" alt="menu">
                </a>
                <div class="navbar-izquierdo">
                    <a href="./index.html" class="logo">
                        <img src="./assets/icons/BERSCHEZ.svg" alt="Logo">
                    </a>
                    <ul>
                        <li>
                            <a href="./php/catalogo.php">HOMBRE</a>
                        </li>
                        <li>
                            <a href="./php/catalogo.php">MUJER</a>
                        </li>
                        <li>
                            <a href="/">SALE</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-derecho">
                    <ul>
                        <li class="navbar-carrito-compras">
                            <a href="/">
                                <img src="./assets/icons/carrito-compras.svg" alt="carrito de compras">
                            </a>
                        </li>
                        <li class="navbar-perfil">
                            <a href="./php/cerrar_sesion.php">
                                <img src="./assets/icons/perfil.svg" alt="perfil">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header-gender">
                <ul>
                    <li>
                        <a href="./php/catalogo.php" class="header-hombre">HOMBRE</a>
                    </li>
                    <li>
                        <a href="./php/catalogo.php" class="header-mujer">MUJER</a>
                    </li>
                </ul>
                <div class="header-flecha-abajo">
                    <p>
                        CONOCE MAS!
                    </p>
                    <a href="#empresa">
                        <img src="./assets/icons/flechas-abajo.svg" alt="">
                    </a>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section id="empresa" class="uniformes-personalizados-main">
            <div class="uniformes-personalizados-main-imagen"></div>
            <div class="uniformes-personalizados-main-texto">
                <h2>UNIFORMES PERSONALIZADOS</h2>
                <p>Quieres tus uniformes personalizados a tu medida con tu estilo y con bordaos de excelente calidad.</p>
            </div>
            <div>
                <button class="uniformes-personalizados-main-button">
                    <a href="" class="uniformes-personalizados-button">
                        <span>MAS INFORMACIÓN.</span>
                    </a>
                </button>
            </div>
        </section>
        <section class="dotaciones-empresa-imagen">
            <a href="">DOTACIONES PARA EMPRESAS.</a>
        </section>
    </main>
    <footer>
        <div class="fila">
            <div class="column">
                <img src="./assets/icons/BERSCHEZ-blanco.svg" class="logo">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae amet, ab voluptatum dolorum suscipit reiciendis ex corrupti deleniti officia dolore rerum distinctio exercitationem aliquam, praesentium sunt laboriosam dicta quas ad.</p>
            </div>
            <div class="column">
                <h3>Ubicacion <div class="raya-baja"><span></span></div></h3>
                <p>Bertha Sánchez Confeciones</p>
                <p>Engativa, Bogotá D.C</p>
                <p>Carrera 112a bis a #68a-30</p>
                <p class="email-id">berthasanchezconfeciones@gmail.com</p>
                <h4>+57 3133627667</h4>
            </div>
            <div class="column">
                <h3>Sobre la empresa <div class="raya-baja"><span></span></div></h3>
                <ul>
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Servicios</a></li>
                    <li><a href="">Acerca de nosotros</a></li>
                    <li><a href="">Contactanos</a></li>
                    <li><a href="">Terminos y condiciones</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>Escribenos <div class="raya-baja"><span></span></div></h3>
                <form class="formulario_footer">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" placeholder="Ingresa tu correo" required>
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="author">Desarrollado por Sergio Reinoso</p>
    </footer>
</body>
</html>