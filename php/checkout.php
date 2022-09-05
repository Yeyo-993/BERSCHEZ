<?php
// Incluir el archivo de conexión a la base de datos
include 'dbConfig.php';

// Inicilzar clase cart
include 'Cart.php';
$cart = new Cart;

// Redirigir al catalogo si el carrito esta vacio
if($cart->total_items() <= 0){
    header("Location: catalogo.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 2;



// get customer details by session customer ID
$query = $db->query("SELECT * FROM customers WHERE id = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{width: 100%;padding: 50px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
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
                        <a href=".">
                            <img src="../assets/icons/perfil.svg" alt="perfil">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Vista previa del pedido</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Productos</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
            <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' COP'; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"].' COP'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hay articulos en tu carrito   </p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' COP'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Detalles de envio</h4>
        <p><?php echo $custRow['nombre']; ?></p>
        <p><?php echo $custRow['correo']; ?></p>
        <p><?php echo $custRow['telefono']; ?></p>
        <p><?php echo $custRow['direccion']; ?></p>
    </div>
    <div class="footBtn">
        <a href="./viewCart.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continuar comprando</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">Realizar compra<i class="glyphicon glyphicon-menu-right"></i></a>
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
    </footer>
</body>
</html>