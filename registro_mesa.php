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

        </div>
        <div class="col-md-6">
            <form action="procesar.php" method="POST" onsubmit="mostrarLoader()">
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
                    <select name="escolaridad" id="escolaridad2" class="form-control" required>
                        <option value=""></option>
                        <option value="Primaria">Educación Básica</option>
                        <option value="Secundaria">Nivel Medio Superior</option>
                        <option value="Preparatoria">Nivel Superior</option>
                    </select>
                    <label for="email2">Email</label>
                    <input type="email" name="email2" id="email2" class="form-control" required>
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
    function mostrarLoader() {
        document.getElementById('loader').style.display = 'block';
    }

    $(function() {
        if (localStorage.getItem('formSubmitted') === 'true') {
            <?php if ($qrUrl): ?>
            $('#exampleModal').modal('show');
            <?php endif; ?>
            localStorage.removeItem('formSubmitted');
        }
    });
    </script>

    <script src="app.js"></script>

</body>

</html>