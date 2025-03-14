<?php
include "vars.php";
$conexion = new mysqli($host, $user, $password, $database, $port);
if($conexion -> connect_error){
    print("Error de conexión");
}else{
    print("ok");
}