<?php

    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM customers WHERE correo = '$correo' AND contrasena = '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header ("Location: ../inicio.php");
        exit;
    } else{
        echo '<script>
        alert("Error al ingresar");
        window.location = "../index.php";
        </script>';
        exit();
    }



?>