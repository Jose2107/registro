<?php
$qrUrl = isset($_GET['qrUrl']) ? urldecode($_GET['qrUrl']) : '';
$success = isset($_GET['success']) && $_GET['success'] == 'true';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="registro.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.slim.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <h2>Registro</h2>
        <div class="row">
            <div class="col-md-6">
                <form action="guardar.php" method="POST" onsubmit="mostrarLoader()">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                        <label for="apellidoP">Apellido Paterno</label>
                        <input type="text" name="apellido_p" id="apellidoP" class="form-control" required>
                        <label for="apellidoM">Apellido Materno</label>
                        <input type="text" name="apellido_m" id="apellidoM" class="form-control" required>
                        <label for="grado">Grado Académico</label>
                        <input type="text" name="grado" id="grado" class="form-control" required>
                        <label for="escolaridad">Escolaridad</label>
                        <select name="escolaridad" id="escolaridad" class="form-select" required>
                            <option selected>Selecciona una opción</option>
                            <option value="edu_b">Educación Básica</option>
                            <option value="nivel_m">Nivel Medio Superior</option>
                            <option value="nivel_s">Nivel Superior</option>
                        </select>
                        <label for="email">Correo electronico</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Loader -->
    <div id="loader" class="" ></div>

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
    function mostrarLoader() {
        document.getElementById('loader').style.display = 'block';
    }

    $(function() {
        <?php if ($qrUrl): ?>
        $('#exampleModal').modal('show');
        <?php endif; ?>

        <?php if ($success): ?>
        Swal.fire({
            icon: 'success',
            title: 'Registro guardado exitosamente',
            showConfirmButton: false,
            timer: 1500
        });
        <?php endif; ?>
    });
    </script>

    <script src="app.js"></script>

</body>

</html>