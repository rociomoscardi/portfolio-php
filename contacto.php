<?php 
    $pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once ("menu.php"); ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>

            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control shadow"></textarea>
                    </div>
                    <div>
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn" class="form-control">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="container mt-auto py-4">
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3">
                <p>Sponsor <a href="https://depcsuite.com" target="_blank" class="white-link">DePC Suite</a></p>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:rocioabrilmoscardi@gmail.com" class="white-link">rocioabrilmoscardi@gmail.com</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="https://api.whatsapp.com/send?phone=+541133802402" target="_blank"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>