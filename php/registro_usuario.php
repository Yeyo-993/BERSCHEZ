<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO customers (nombre, correo, usuario, telefono, direccion, contrasena)
                VALUES ('$nombre', '$correo', '$usuario', '$telefono', '$direccion', '$contrasena')";

    //Verificacion correo no se repita
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM customers WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("El correo ya esta registrado");
            window.location.href="../login.php";
        </script>';
        exit();
    }

    //Verificar nombre de usuario no se repita
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM customers WHERE usuario = '$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
            alert("El usuario ya esta registrado");
            window.location.href="../index.php";
        </script>';
        exit();
    }


    //Ejecutar consulta del registro
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '<script>
        alert("Usuario registrado con éxito");
        window.location = "../index.php";
        </script>';
    } else{
        echo
        '<script>
            alert("Error al registrar el usuario");
            window.location = "../index.php";
        </script>';
    }

    mysqli_close($conexion);
?>