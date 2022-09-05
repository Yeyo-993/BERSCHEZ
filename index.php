<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header ("Location: inicio.php");
        exit;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIAR SECION | REGISTRARSE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/9384e3ba9d.js"></script>
</head>
<body>
    <header>
        <nav>
            <a href=""  class="menu">
                <img src="../assets/icons/menu.svg" alt="menu">
            </a>
            <div class="navbar-izquierdo">
                <a href="./index.php" class="logo">
                    <img src="./assets/icons/BERSCHEZ.svg" alt="Logo">
                </a>
                <ul>
                    <li>
                        <a href="./categoria-hombre.html">HOMBRE</a>
                    </li>
                    <li>
                        <a href="./categoria-mujer.html">MUJER</a>
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
                        <a href=".">
                            <img src="./assets/icons/perfil.svg" alt="perfil">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="main-login">
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar a la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--Formulario de login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/login_usuario.php" class="formulario__login formulario" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!--Registro-->
                <form action="php/registro_usuario.php" class="formulario__register formulario" method="POST">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre" required>
                    <input type="text" placeholder="Correo Electronico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="text" placeholder="Telefono" name="telefono" required>
                    <input type="text" placeholder="Direccion y Ciudad" name="direccion" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="fila">
            <div class="column">
                <img src="./assets/icons/BERSCHEZ-blanco.svg" class="logo" alt="logo">
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
                <h3>Newsletter <div class="raya-baja"><span></span></div></h3>
                <form class="formulario_footer">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" placeholder="Ingresa tu correo" required>
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-pinterest"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="author">Desarrollado por Sergio Reinoso <a href="https://github.com/Yeyo-993/proyecto-sena-ecommerce"><img src="./assets/icons/github.png" alt="" class="imagen_footer-github"></a></p>
    </footer>
    <script src="./assets/js/script.js"></script>
</body>
</html>