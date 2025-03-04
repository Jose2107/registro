<?php

$qrUrl = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $grado = $_POST['grado'];
    $escolaridad = $_POST['escolaridad'];
    $email = $_POST['email'];
    $curp = $_POST['curp'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];

    // Datos a codificar en el QR
    $data = "Grado: $grado\nEscolaridad: $escolaridad\nEmail: $email\nCURP: $curp\nNombre: $nombre\nApellido Paterno: $apellidoP\nApellido Materno: $apellidoM";

    // URL de la API para generar el QR
    $qrUrl = 'https://api.qrserver.com/v1/create-qr-code/?data=' . urlencode($data) . '&size=250x250';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="registro.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Registro</h2>
        <div class="row">
            <div class="loader-container" id="loader" style="display: none;">
                <div class="loader"></div>
            </div>
            <div class="col-md-6">
                <form action="" method="POST" onsubmit="mostrarLoader()">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="datos-curp-tab" data-toggle="tab" href="#datos-curp"
                                role="tab" aria-controls="datos-curp" aria-selected="true">CURP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="datos-personales-tab" data-toggle="tab" href="#datos-personales" role="tab"
                                aria-controls="datos-personales" aria-selected="false">Datos personales</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="datos-curp" role="tabpanel"
                            aria-labelledby="datos-curp-tab">
                            <div class="form-group">
                                <label for="grado">Grado Académico</label>
                                <input type="text" name="grado" id="grado" class="form-control">
                                <label for="escolaridad">Escolaridad</label>
                                <input type="text" name="escolaridad" id="escolaridad" class="form-control">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                                <label for="curp">CURP</label>
                                <input type="text" class="form-control" id="curp" maxlength="18" oninput="completarNombre()">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" readonly>
                                <label for="apellidoP">Apellido Paterno</label>
                                <input type="text" name="apellidoP" id="apellidoP" class="form-control" readonly>
                                <label for="apellidoM">Apellido Materno</label>
                                <input type="text" name="apellidoM" id="apellidoM" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="datos-personales" role="tabpanel" aria-labelledby="datos-personales-tab">
                            <div class="form-group">
                                <label for="nombre2">Nombre</label>
                                <input type="text" name="nombre2" id="nombre2" class="form-control" required>
                                <label for="apellidoP2">Apellido Paterno</label>
                                <input type="text" name="apellidoP2" id="apellidoP2" class="form-control" required>
                                <label for="apellidoM2">Apellido Materno</label>
                                <input type="text" name="apellidoM2" id="apellidoM2" class="form-control" required>
                                <label for="grado2">Grado Académico</label>
                                <input type="text" name="grado2" id="grado2" class="form-control" required>
                                <label for="escolaridad2">Escolaridad</label>
                                <input type="text" name="escolaridad2" id="escolaridad2" class="form-control" required>
                                <label for="email2">Email</label>
                                <input type="email" name="email2" id="email2" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Código QR</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php if ($qrUrl): ?>
                        <img src="<?php echo $qrUrl; ?>" alt="QR Code" style="display: block; margin: 0 auto;">
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn " data-bs-dismiss="modal">imprimir</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(function() {
        $('#myTab a').on('click', function(e) {
            e.preventDefault();
            $(this).tab('show');
        });

        <?php if ($qrUrl): ?>
            $('#exampleModal').modal('show');
        <?php endif; ?>
    });

    function mostrarLoader() {
        document.getElementById('loader').style.display = 'block';
    }
 
    </script>

    <script src="app.js"></script>

</body>

</html>