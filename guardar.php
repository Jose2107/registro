<?php
// Conexión a la base de datos
 /* $servername = 'localhost';
 $username = 'root';
 $password = 'Jose2107';
 $dbname = 'registro'; */

  $servername = 'bases.dev.uaemex.mx';
  $username = 'uregmex';
  $password = 'uregmex';
  $dbname = 'dbregmex';


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die('Conexión fallida: ' . $conn->connect_error);
}

// Verificar si los datos fueron enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $grado = $_POST['grado'];
    $escolaridad = $_POST['escolaridad'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];
    $fecha_asistencia = date('Y-m-d H:i:s');
    $bandera_asistencia="0";
    // Insertar los datos en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        header('Location: registro.php?success=false');
    } else {
        $sql = "INSERT INTO usuarios (nombre, apellido_p, apellido_m, grado, escolaridad, email, tipo, fecha_asistencia,bandera_asistencia) VALUES ('$nombre', '$apellido_p', '$apellido_m', '$grado', '$escolaridad', '$email', '$tipo', '$fecha_asistencia','$bandera_asistencia')";

        if ($conn->query($sql) === TRUE) {
            // Generar los datos para el QR
            $qrData = "Nombre: $nombre\nApellido Paterno: $apellido_p\nApellido Materno: $apellido_m\nGrado: $grado\nEscolaridad: $escolaridad\nEmail: $email\nTipo: $tipo\nFecha de Asistencia: $fecha_asistencia\nBandera de Asistencia: $bandera_asistencia";

            // URL de la API para generar el QR
            $qrApiUrl = 'https://api.qrserver.com/v1/create-qr-code/?data=' . urlencode($qrData) . '&size=200x200';

            // Redirigir a index.php con los parámetros necesarios
            header('Location: registro.php?qrUrl=' . urlencode($qrApiUrl) . '&success=true');
        } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
        }
    }
}
$conn->close();
?>