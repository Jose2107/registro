<?php
$hostname = "localhost";
$username = "user";
$password = "Jose2107";
$dbname = "registro";

// Conectar a la base de datos
$con = mysqli_connect($hostname, $username, $password);
if (!$con) {
    die("Conexión fallida: " . mysqli_connect_error());
}else
{
    echo "Conexión exitosa";
}
// Seleccionar la base de datos
mysqli_select_db($con, $dbname);

// Cerrar la conexión
mysqli_close($con);
?>