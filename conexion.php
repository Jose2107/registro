<?php
$hostname = "127.0.0.1";
$username = "user";
$password = "Jose2107";
$dbname = "registro";

// Conectar a la base de datos
$con = mysqli_connect($hostname, $username, $password, $dbname);
if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa";
}
?>