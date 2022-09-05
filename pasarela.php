<?php
    include 'php/conexion.php';

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
    <title>PAGO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/9384e3ba9d.js"></script>
</head>
<body>
    <header>
        <nav>
            <a href=""  class="menu">
                <img src="./assets/icons/menu.svg" alt="menu">
            </a>
            <div class="navbar-izquierdo">
                <a href="./inicio.php" class="logo">
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
                        <a href="./php/cerrar_sesion.php">
                            <img src="./assets/icons/perfil.svg" alt="perfil">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <br>
            <div class="alert alert-success">
                pantalla de mensaje...
                <a href="#" class="badge badge-success">Ver carrito</a>
            </div>
            <div class="row">

            <?php
                $sentencia = mysqli_query($conexion, "SELECT * FROM `products`");
            ?>
            <?php
                foreach($sentencia as $producto){
            ?>
                <div class="col-3">
                    <div class="card">
                        <img title="<?php echo $producto['name']?>" alt="<?php echo $producto['name']?>" class="card-img-top" src="<?php echo $producto['imagen']?>">
                        <div class="card-body">
                            <span><?php echo $producto['name']?></span>
                            <h5 class="card-title">$<?php echo $producto['price']?></h5>
                            <p class="card-text"><?php echo $producto['description']?></p>
                            <form action="" method="POST">
                                <input type="text" name="id" id="id" value="<?php echo $producto['id']?>">
                                <input type="text" name="nombre" id="nombre" value="<?php echo $producto['name']?>">
                                <input type="text" name="precio" id="precio" value="<?php echo $producto['price']?>">
                                <input type="text" name="cantidad" id="cantidad" value="<?php echo 1?>">
                                <br>
                                <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!--
                <div class="col-3">
                    <div class="card">
                        <img title="Titulo del producto" class="card-img-top" src="./assets/imgs/chef.jpg" alt="">
                        <div class="card-body">
                            <span>Titulo del producto</span>
                            <h5 class="card-title">$120000.00</h5>
                            <p class="card-text">Descripcion</p>
                            <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
                        </div>
                    </div>
                </div>-->

            </div>
        </div>
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
                    <i class="fa-brands fa-pinterest"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="author">Desarrollado por Sergio Reinoso</p>
    </footer>
</body>
</html>