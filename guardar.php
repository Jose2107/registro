<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "Jose2107";
$dbname = "registro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si los datos fueron enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $grado = $_POST['grado'];
    $escolaridad = $_POST['escolaridad'];
    $email = $_POST['email'];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre, apellido_p, apellido_m, grado, escolaridad, email) VALUES ('$nombre', '$apellido_p', '$apellido_m', '$grado', '$escolaridad', '$email')";

    if ($conn->query($sql) === TRUE) {
        // Redirigir con un mensaje de éxito
        header("Location: registro.php?success=true");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>