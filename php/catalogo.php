<?php
// Incluir el archivo de conexión a la base de datos
include 'dbConfig.php';
session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
            alert("Inicia secion para acceder a la pagina");
            window.location = "../index.php";
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
    <title>CATALOGO DE PRODUCTOS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 50px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    </style>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/9384e3ba9d.js"></script>
</head>
<body>
    <header>
        <nav>
            <a href=""  class="menu">
                <img src="../assets/icons/menu.svg" alt="menu">
            </a>
            <div class="navbar-izquierdo">
                <a href="../inicio.php" class="logo">
                    <img src="../assets/icons/BERSCHEZ.svg" alt="Logo">
                </a>
                <ul>
                    <li>
                        <a href="./catalogo.php">HOMBRE</a>
                    </li>
                    <li>
                        <a href="./catalogo.php">MUJER</a>
                    </li>
                    <li>
                        <a href="./catalogo.php">SALE</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-derecho">
                <ul>
                    <li class="navbar-carrito-compras">
                        <a href="viewCart.php" class="cart-link" title="View Cart">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                            <img src="../assets/icons/carrito-compras.svg" alt="carrito de compras">
                        </a>
                    </li>
                    <li class="navbar-perfil">
                        <a href="./cerrar_sesion.php">
                            <img src="../assets/icons/perfil.svg" alt="perfil">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Productos</h1>
            <!--<a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>-->
            <div id="products" class="row list-group">
                <?php
                //get rows query
                $query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                ?>
                <div class="item col-lg-3">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="<?php echo $row["imagen"]; ?>" alt="<?php echo $row["name"]; ?>" />
                        <div class="caption">
                            <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                            <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                            <div class="row">
                                <div class="col-md-5">
                                    <p class="lead"><?php echo '$'.$row["price"].' COP'; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Añadir al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                }else{ ?>
                <p>Product(s) not found.....</p>
                <?php } ?>
            </div>
        </div>
    </main>
    <footer>
    <div class="fila">
            <div class="column">
                <img src="../assets/icons/BERSCHEZ-blanco.svg" class="logo" alt="logo">
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
    <script src="../assets/js/script.js"></script>
    </footer>

</body>
</html>