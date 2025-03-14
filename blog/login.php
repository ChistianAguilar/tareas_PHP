<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charsest="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
</head>
<body>

<?php
if(isset($_SESSION['user'])){
    echo "<p> Bienvenido: " . $_SESSION['nombre'] . "!";
    echo "<p><a href='logout.php'> Cerrar Sesion</a></p>";
}else{
    print("<from methol = 'POST' action = 'panel.php'>
    <input typy = 'text' name = 'user' placeholder = 'Tu ususario'>
    <button type = 'submit'> Acceder </button>
    </form>");
}
    
?>

</body>
</html>