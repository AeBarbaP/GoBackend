<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>GO - Administración de Zona Residencial</title>
    <link rel="icon" type="image/png" href="../Images/LogoGO.png" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top text-light bg-info flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="../Images/LogoGO.png" width="45px"
                style="margin-right: 7px;"> Administración de ZR</a>
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
                            <a class="nav-link active" aria-current="page" href="Index.php">
                                <span data-feather="home"></span>
                                Inicio
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="AccesosAdmin.php">
                                <i class="bi bi-upc-scan" style="margin-right: 7px;"></i>
                                Accesos
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="InfoZR.php">
                                <i class="bi bi-card-list" style="margin-right: 7px;"></i>
                                Zonas Residenciales
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="DatosContacto.php">
                                <i class="bi bi-person-rolodex" style="margin-right: 7px;"></i>
                                Datos de Contacto
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Administracion.php">
                                <i class="bi bi-clipboard-data" style="margin-right: 7px;"></i>
                                Administración
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="PropietariosAdmin.php">
                                <i class="bi bi-people-fill" style="margin-right: 7px;"></i>
                                Propietarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="VigilantesAdmin.php">
                                <span data-feather="users"></span>
                                Vigilantes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ProveedoresAdmin.php">
                                <span data-feather="users"></span>
                                Poveedores
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AccesosAdmin.php">
                                <i class="bi bi-upc-scan" style="margin-right: 7px;"></i>
                                Accesos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="NoticiasAdmin.php">
                                <i class="bi bi-journals" style="margin-right: 7px;"></i>
                                Noticias
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="EventosAdmin.php">
                                <span data-feather="calendar"></span>
                                Eventos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="VotacionesAdmin.php">
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
                    <h1 class="h2">Administración</h1>
                </div>

                <!-- Custom styles for this template -->
                <link href="features.css" rel="stylesheet">
                </head>

                <nav>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="Administracion.php">Cuotas de Colonos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AdministracionIngresos.html">Ingresos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AdministracionEgresos.html">Egresos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="AdministracionSaldos.html">Saldos</a>
                        </li>
                    </ul>

                </nav>

                <body>

                    <main>

                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h4">Saldos</h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">

                                    <a href="#ConfiguracionSaldos" class="nav-link" data-bs-toggle="modal">
                                        <i class="bi bi-gear h4"></i>
                                    </a>
                                    <!-- Modal - acommodar modal para configurar saldos -->
                                    <div class="modal fade" id="ConfiguracionSaldos" tabindex="-1"
                                        aria-labelledby="ConfiguracionSaldos" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-dark">
                                                    <h5 class="modal-title" id="exampleModalLabel"><i
                                                            class="bi bi-currency-dollar"></i> Editar Saldos</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-dark">

                                                    <form class="">
                                                        <div class="form-floating mb-3">
                                                            <input type="email" class="form-control rounded-4"
                                                                id="floatingInput" placeholder="MontoBancos">
                                                            <label for="floatingInput">Monto en Cuenta Bancaria</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="password" class="form-control rounded-4"
                                                                id="floatingPassword" placeholder="MontoEfe">
                                                            <label for="floatingPassword">Monto en Efectivo</label>
                                                        </div>
                                                        <a href="/AdministracionSaldos.html"
                                                            class="w-100 mb-2 btn btn-lg rounded-4 btn-primary"
                                                            type="submit"><i class="bi bi-box-arrow-in-down"></i>
                                                            Guardar</a>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Termina Modal -->

                                </div>
                            </div>
                        </div>
                        <div class="p-5 mb-4 bg-light rounded-3">
                            <div class="container-fluid py-5">
                                <p style="margin-bottom: 36px;">
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected>Mes Actual</option>
                                        <option value="2">Mes Anterior</option>
                                    </select>
                                </p>
                                <p class="display-6 fw-bold">Cuenta Bancaria: $ 000.00</p>
                                <p class="display-6 fw-bold col-md-8 ">Efectivo: $ 00.00</p>
                            </div>
                        </div>

                        <div class="row align-items-md-stretch">
                            <div class="col-md-4">
                                <div class="h-100 p-4 bg-light border rounded-3">
                                    <h2>Cuotas Mensuales</h2>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected>Mes Actual</option>
                                        <option value="2">Mes Anterior</option>
                                    </select>
                                    <p></p>
                                    <p class="display-6 fw-bold">$ 000.00</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="h-100 p-4 bg-light border rounded-3">
                                    <h2>Aportaciones</h2>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected>Mes Actual</option>
                                        <option value="2">Mes Anterior</option>
                                    </select>
                                    <p></p>
                                    <p class="display-6 fw-bold">$ 000.00</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="h-100 p-4 bg-light border rounded-3">
                                    <h2>Eventos</h2>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="1" selected>Mes Actual</option>
                                        <option value="2">Mes Anterior</option>
                                    </select>
                                    <p></p>
                                    <p class="display-6 fw-bold">$ 000.00</p>
                                </div>
                            </div>
                        </div>
                    </main>
        </div>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
            integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
            integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
        </script>
        <script src="dashboard.js"></script>
</body>

</html>