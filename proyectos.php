<?php 
    $pg = "proyectos";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once ("menu.php"); ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-4">
                <div class="proyecto">
                    <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    <h2 class="px-3 py-2">ABM CLIENTES</h2>
                    <p class="px-3 py-1">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                    <a class="btn btn-rojo m-3" href="#">Ver Online</a>
                    <a class="codigo-fuente m-3" href="#">Código fuente</a>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="proyecto">
                    <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                    <h2 class="px-3 py-2">SISTEMA DE GESTIÓN DE VENTAS</h2>
                    <p class="px-3 py-1">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    <a class="btn btn-rojo m-3" href="#">Ver Online</a>
                    <a class="codigo-fuente m-3" href="#">Código fuente</a>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="proyecto">
                    <img src="images/proyecto-integrador.png" alt="Proyecto Integrador" class="img-fluid">
                    <h2 class="px-3 py-2">PROYECTO INTEGRADOR</h2>
                    <p class="px-3 py-1">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    <a class="btn btn-rojo m-3" href="#">Ver Online</a>
                    <a class="codigo-fuente m-3" href="#">Código fuente</a>
                </div>
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
                <p>Sponsor <a href="https://depcsuite.com" target="_blank">DePC Suite</a></p>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:rocioabrilmoscardi@gmail.com">rocioabrilmoscardi@gmail.com</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="https://api.whatsapp.com/send?phone=+541133802402" target="_blank"><i
                        class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
            </div>
        </div>
    </footer>
</body>



</html>