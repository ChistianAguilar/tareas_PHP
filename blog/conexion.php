<?php
include "vars.php";
// ruta del sqlite
$databasePath = __DIR__ . '/bd_blog.db';

// para verificar si la base de datos existe y si no encuentra la base de datos, termina el programa
if (!file_exists($database)) {
    die("La base de datos no existe");
}
try{
    // para conectar la base de datos
    $db = new SQLite3($databasePath);
    echo "Conectado a la base de datos";
}catch(Exception $e){
    die("No se pudo conectar a la base de datos: " . $e->getMessage());
}

?>