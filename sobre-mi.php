<?php 
    $pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once ("menu.php"); ?>
    </header>

    <main>
        <section id="bio" class="container">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h1 class="col-12 py-5">Sobre mí</h1>
                    <p>Estudiante de Desarrollo Full Stack en DePCSuite y Análisis de Datos en la UTN.</p>
                    <a href="contacto.html" class="btn btn-rojo my-5 d-none d-sm-block w-25">Enviar mensaje</a>
                </div>
                <div class="col-10 col-sm-3 py-5 pe-5 d-none d-sm-block">
                    <img src="images/rocio-moscardi.jpeg" alt="Rocio" class="img-fluid">
                </div>
                <div class="col-6 d-sm-block d-sm-none py-3">
                    <img src="images/rocio-moscardi.jpeg" alt="Rocio" class="img-fluid">
                </div>
                <div class="col-6 d-sm-block d-sm-none py-3">
                    <a href="contacto.html" class="btn btn-rojo my-5 d-sm-block d-sm-none">Enviar mensaje</a>
                </div>
            </div>
        </section>

        <section id="stack">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="py-5">Stack tecnológico</h2>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Javascript</h3>
                            <i class="fa-brands fa-js pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">PHP</h3>
                            <i class="fa-brands fa-php pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">HTML</h3>
                            <i class="fa-brands fa-html5 pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">API Rest</h3>
                            <i class="fa-solid fa-gears pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Laravel</h3>
                            <i class="fa-brands fa-laravel pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Bootstrap</h3>
                            <i class="fa-brands fa-bootstrap pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">MySQL</h3>
                            <i class="fa-solid fa-database pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">CSS</h3>
                            <i class="fa-brands fa-css3-alt pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Git</h3>
                            <i class="fa-brands fa-git pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">React.js</h3>
                            <i class="fa-brands fa-react pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Mercadopago</h3>
                            <i class="fa-solid fa-wallet pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Amazon AWS</h3>
                            <i class="fa-brands fa-aws pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Linux</h3>
                            <i class="fa-brands fa-linux pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Apache</h3>
                            <i class="fa-solid fa-server pb-5"></i>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Paypal</h3>
                            <i class="fa-brands fa-paypal pb-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="pt-5 pb-4">Experiencia laboral</h2>
                    </div>
                </div>
                <div class="row shadow rounded">
                    <div class="col-sm-2 d-none d-sm-block p-5">
                        <img src="images/logo-depcsuite.svg" alt="DEPCSUITE" class="img-fluid">
                    </div>
                    <div class="col-sm-10 col-12 my-3">
                        <h3>Lorem</h3>
                        <h4>DEPCSUITE SA</h4>
                        <h5>20XX</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque similique voluptatum
                            doloribus labore asperiores blanditiis nisi enim quo hic voluptas libero quas, esse
                            explicabo quam nostrum fuga. Quas, esse exercitationem?</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="formacion">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="pt-5 pb-4"></i>Formación académica</h2>
                    </div>
                </div>
                <div class="row shadow bg-white rounded">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block text-center">
                                <i class="fa-solid fa-landmark" alt="depcsuite"></i>
                            </div>
                            <div class="col-12- col-sm-10 p-3">
                                <h3>Lorem</h3>
                                <h4>Lorem ipsum</h4>
                                <h5>20XX</h5>
                                <p>https://loremipsum.com/</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block text-center">
                                <i class="fa-solid fa-landmark" alt="depcsuite"></i>
                            </div>
                            <div class="col-12- col-sm-10 p-3">
                                <h3>Lorem</h3>
                                <h4>Lorem ipsum</h4>
                                <h5>20XX</h5>
                                <p>https://loremipsum.com/</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="formacion">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="pt-5 pb-4">Curso de desarrollo profesional</h2>
                    </div>
                </div>
                <div class="row shadow bg-white rounded mb-5">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block text-center">
                                <i class="fa-solid fa-landmark" alt="depcsuite"></i>
                            </div>
                            <div class="col-12- col-sm-10 p-3">
                                <h3>Desarrollo Full Stack</h3>
                                <h4>DePCSuite</h4>
                                <h5>2024</h5>
                                <p>https://depcsuite.com/</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1 rounded">
                            <div class="col-4 text-center card">
                                <i class="fa-regular fa-comments"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Intermediate B2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1 rounded">
                            <div class="col-4 text-center card">
                                <i class="fa-solid fa-table-tennis-paddle-ball"></i>
                            </div>
                            <div class="col-8 pt-5 px-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Leer</li>
                                    <li>Cantar</li>
                                    <li>Entrenar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </section>



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