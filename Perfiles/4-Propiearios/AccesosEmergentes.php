<!doctype html>
<html lang="en">

<head>
    <!-- <meta charset="utf-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <!-- <script src="../QR/QR/ajax_generate_code.js"></script> -->
    <!--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->

    <title>GO - Administración de Zona Residencial</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->

    <script src="ajax_generate_code.js"></script>

    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b2e301b71f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../../AdministracionZR/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top text-light bg-secondary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="../../Images/LogoGO.png" width="45px"
                style="margin-right: 7px;"> Accesos Administrador</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Buscar">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Salir</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="../../AdministracionZR/Home_AdminZR.html">
                                <span data-feather="home"></span>
                                Inicio
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/AccesosAdmin.html">
                                <i class="bi bi-upc-scan" style="margin-right: 7px;"></i>
                                Accesos
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/InfoZR.html">
                                <i class="bi bi-card-list" style="margin-right: 7px;"></i>
                                Información de Zona Residencial
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/DatosContacto.html">
                                <i class="bi bi-person-rolodex" style="margin-right: 7px;"></i>
                                Datos de Contacto
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/Administracion.php">
                                <i class="bi bi-clipboard-data" style="margin-right: 7px;"></i>
                                Administración
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/PropietariosAdmin.html">
                                <i class="bi bi-people-fill" style="margin-right: 7px;"></i>
                                Propietarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/VigilantesAdmin.php">
                                <span data-feather="users"></span>
                                Vigilantes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/ProveedoresAdmin.php">
                                <span data-feather="users"></span>
                                Poveedores
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/AccesosAdmin.html">
                                <i class="bi bi-upc-scan" style="margin-right: 7px;"></i>
                                Accesos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/NoticiasAdmin.php">
                                <i class="bi bi-journals" style="margin-right: 7px;"></i>
                                Noticias
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/EventosAdmin.php">
                                <span data-feather="calendar"></span>
                                Eventos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/VotacionesAdmin.php">
                                <span data-feather="layers"></span>
                                Votaciones
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Accesos</h1>
                    <a href="#ConfiguracionEventos" class="nav-link" data-bs-toggle="modal">
                        <i class="bi bi-gear h4"></i>
                    </a>
                </div>

                <!-- Custom styles for this template -->
                <link href="features.css" rel="stylesheet">
                </head>

                <nav>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/AccesosAdmin.html">Programados y
                                Frecuentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AccesosAdminQR.html">Individuales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="AccesosEmergentes.html">Emergentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AccesosLimitados.html">Limitados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../AdministracionZR/AccesosAdminHistorial.html">Historial</a>
                        </li>
                    </ul>
                </nav>

                <body>

                    <main>

                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                        </div>
                        <div class="row align-items-md-stretch">
                            <div class="col-md-12">
                                <div class="h-100 p-5 text-dark bg-light border rounded-3">

                                    <div class="" style="min-height:500px;">
                                        <div class="">
                                            <div class="row">
                                                <h2>Generar acceso Emergente</h2>
                                            </div>
                                            <br>
                                            <form class="form-horizontal" method="post" id="codeForm"
                                                onsubmit="return false">
                                                <label for="basic-url" class="form-label">Datos para generar QR
                                                    <strong><i class="bi bi-qr-code"></i></strong></label>
                                                <!-- No sale el icono -->
                                                <div class="input-group mb-3 w-50">
                                                    <span class="input-group-text" id="basic-addon3"><i
                                                            class="bi bi-diagram-2"></i></span>
                                                    <input class="form-control" list="datalistOptions"
                                                        id="exampleDataList" placeholder="Corporación...">
                                                    <datalist id="datalistOptions">
                                                        <option value="Ambulancia">
                                                        <option value="Bomberos">
                                                        <option value="Policía Estatal">
                                                        <option value="Policía Municipal">
                                                        <option value="Ejército">
                                                    </datalist>
                                                </div>
                                                <div class="input-group mb-3 w-50">
                                                    <span class="input-group-text" id="basic-addon3"><i
                                                            class="bi bi-house-door"></i></span>
                                                    <input class="form-control" list="datalistOptions"
                                                        id="exampleDataList" placeholder="Domicilio...">
                                                    <datalist id="datalistOptions">
                                                        <option value="Mina Real de Ángeles">
                                                        <option value="Mina el Edén">
                                                        <option value="Mina Villa Real">
                                                    </datalist>
                                                </div>
                                                <div class="input-group mb-3 w-50">
                                                    <label class="input-group-text" for="inputGroupSelect01"><i
                                                            class="bi bi-arrow-left-right"></i></label>
                                                    <select class="form-select" id="inputGroupSelect01">
                                                        <option selected>Tipo</option>
                                                        <option value="1">Entrada</option>
                                                        <option value="2">Salida</option>
                                                    </select>
                                                </div>
                                                <div class="input-group-text bg-light w-25">
                                                    <label class="control-label me-2">No. de Placa : </label>
                                                    <input class="form-control col-xs-1" id="content" type="text"
                                                        required="required">
                                                </div>
                                                <br>
                                                <hr>

                                                <label for="basic-url" class="form-label">Cargar Imágenes</label>
                                                <div class="input-group col-md-3">
                                                    <div class="input-group mb-3 w-50">
                                                        <span class="input-group-text" id="basic-addon3"><i
                                                                class="bi bi-person-bounding-box"></i></span>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="input-group col-md-3">
                                                    <div class="input-group mb-3 w-50">
                                                        <span class="input-group-text" id="basic-addon3"><i
                                                                class="far fa-address-card"></i></span>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <div class="input-group col-md-3">
                                                    <div class="input-group mb-3 w-50">
                                                        <span class="input-group-text" id="basic-addon3"><i
                                                                class="bi bi-card-text"></i></i></span>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label class="control-label"></label>
                                                    <input type="submit" name="submit" id="submit"
                                                        class="btn btn-secondary w-50" value="Guardar Acceso">
                                                </div>
                                            </form>
                                            <!-- Estos accesos no generan QR, solo se almacenan en la base de datos para acceso desde el historial de accesos, se deben guardar también la fecha y hora de manera automática-->
                                            <div class="col-md-6">
                                                <div class="showQRCode"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
        </div>
        </main>
    </div>


    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
    <script src="../../AdministracionZR/dashboard.js"></script>
</body>

</html>