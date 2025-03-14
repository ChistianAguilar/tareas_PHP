<?php
session_start();
include "conexion.php";
?>

<?php
    if(isset($POST['user'])){
        $user = $_POST['user'];
        $_SESSION['user'] = $user;
        print("Bienvenido" . $user);
        print("<a href='logout.php'>Cerrar sesión</a>");
    }else{
        print("Bienvenido Invitado");
        print("<a href='login.php'>Iniciar sesión</a>");    
    }
?>