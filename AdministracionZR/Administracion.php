<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>GO - Administración de Zona Residencial</title>

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

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="../Images/LogoGO.png" width="45px" style="margin-right: 7px;"> Administración de ZR</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link active" aria-current="page" href="Home_AdminZR.html">
                                <span data-feather="home"></span>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="InfoZR.html">
                                <i class="bi bi-card-list" style="margin-right: 7px;"></i>
                                Información de Zona Residencial
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="DatosContacto.html">
                                <i class="bi bi-person-rolodex" style="margin-right: 7px;"></i>
                                Datos de Contacto
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Administracion.html">
                                <i class="bi bi-clipboard-data" style="margin-right: 7px;"></i>
                                Administración
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="PropietariosAdmin.html">
                                <i class="bi bi-people-fill" style="margin-right: 7px;"></i>
                                Propietarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="VigilantesAdmin.html">
                                <span data-feather="users"></span>
                                Vigilantes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ProveedoresAdmin.html">
                                <span data-feather="users"></span>
                                Poveedores
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AccesosAdmin.html">
                                <i class="bi bi-upc-scan" style="margin-right: 7px;"></i>
                                Accesos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="NoticiasAdmin.html">
                                <i class="bi bi-journals" style="margin-right: 7px;"></i>
                                Noticias
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="EventosAdmin.html">
                                <span data-feather="calendar"></span>
                                Eventos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="VotacionesAdmin.html">
                                <span data-feather="layers"></span>
                                Votaciones
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Administración</h1>
                </div>

                <!-- Custom styles for this template -->
                <link href="features.css" rel="stylesheet">
                </head>

                <nav>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Administracion.html">Cuotas de Colonos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AdministracionIngresos.html">Ingresos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Egresos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Saldos</a>
                        </li>
                    </ul>

                </nav>

                <body>

                    <main>

                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h4">Cuotas de Colonos</h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">
                                    <i class="bi bi-gear h4"></i>
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Configuración Global <img src="../Images/Config.png" width="auto" alt=""></button> -->
                                </div>
                            </div>
                        </div>
                        <!-- Poner filtro en los títuos de las columnas de la tabla para la búsqueda por cualquiera de las columnas -->

                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre del Propietario</th>
                                    <th scope="col">No. Casa / Lote</th>
                                    <th scope="col">Fecha de Ingreso</th>
                                    <th scope="col">Estatus de Cuota Mensual</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-success">
                                    <th scope="row">1</th>
                                    <td><a href="Administracion.php?id=1" id="click1">Luis Fernando González Álvarez</a></td>
                                    <td>81</td>
                                    <td>28/04/2021</td>
                                    <td>Pagado</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">2</th>
                                    <td> <a href="#">Mariana González Barba</a></td>
                                    <td>114</td>
                                    <td>15/02/2021</td>
                                    <td>Pendiente</td>
                                </tr>
                                <tr class="table-danger">
                                    <th scope="row">3</th>
                                    <td> <a href="#">Héctor Mario Mendoza Bañuelos</a></td>
                                    <td>83</td>
                                    <td>12/09/2020</td>
                                    <td>Vencido</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- On tables
  <table class="table-primary"></table>
  <table class="table-secondary"></table>
  <table class="table-success"></table>
  <table class="table-danger"></table>
  <table class="table-warning"></table>
  <table class="table-info"></table>
  <table class="table-light"></table>
  <table class="table-dark"></table>

  On rows 
  <tr class="table-primary"></tr>
  <tr class="table-secondary"></tr>
  <tr class="table-success"></tr>
  <tr class="table-danger"></tr>
  <tr class="table-warning"></tr>
  <tr class="table-info"></tr>
  <tr class="table-light"></tr>
  <tr class="table-dark"></tr>

  On cells (`td` or `th`) 
  <tr>
    <td class="table-primary"></td>
    <td class="table-secondary"></td>
    <td class="table-success"></td>
    <td class="table-danger"></td>
    <td class="table-warning"></td>
    <td class="table-info"></td>
    <td class="table-light"></td>
    <td class="table-dark"></td>
  </tr>
  -->
                        <hr class="mt-5 mb-5">
                        <div class="">
                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                                <h1 class="h4">Detalle de Pagos</h1>
                                <div class="btn-toolbar mb-2 mb-md-0">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Agregar Pago <img src="" alt=""></button>
                                </div>
                            </div>
                            <p class="border-bottom" style="margin-top: -14px;">Luis Fernando González Álvarez</p>
                            <?php
                            if (isset($_REQUEST['id'])) {
                                echo '<!-- en la etiqueta aparece el nombre del propietario seleccionado en la tabla de arriba -->
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th scope="col">Mes</th>
                                                <th scope="col">Fecha de Pago</th>
                                                <th scope="col">Modo de Pago</th>
                                                <th scope="col">Detalles</th>
                                                <th scope="col">Estatus de Pago</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-light">
                                                <td>Enero</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="table-light">
                                                <td>Febrero</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="table-light">
                                                <td>Marzo</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="table-light">
                                                <td>Abril</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Mayo</td>
                                                <td>01-05-2021</td>
                                                <td>Efectivo</td>
                                                <td>-</td>
                                                <td><button class="btn btn-success btn-sm">Pagado</button></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Junio</td>
                                                <td>01-06-2021</td>
                                                <td>PayPal</td>
                                                <td>-</td>
                                                <td><button class="btn btn-success btn-sm">Pagado</button></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Julio</td>
                                                <td>01-07-2021</td>
                                                <td>PayPal</td>
                                                <td>-</td>
                                                <td><button class="btn btn-success btn-sm">Pagado</button></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Agosto</td>
                                                <td>01-08-2021</td>
                                                <td>PayPal</td>
                                                <td>-</td>
                                                <td><button class="btn btn-success btn-sm">Pagado</button></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Septiembre</td>
                                                <td>01-08-2021</td>
                                                <td>PayPal</td>
                                                <td>-</td>
                                                <td><button class="btn btn-success btn-sm">Pagado</button></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Octubre</td>
                                                <td>01-10-2021</td>
                                                <td>PayPal</td>
                                                <td>-</td>
                                                <td><button class="btn btn-success btn-sm">Pagado</button></td>
                                            </tr>
                                            <tr class="table-warning">
                                                <td>Noviembre</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td><button class="btn btn-warning btn-sm">Pendiente</button></td>
                                            </tr>
                                            <tr class="table-warning">
                                                <td>Diciembre</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td><button class="btn btn-warning btn-sm">Pendiente</button></td>
                                            </tr>
                                        </tbody>
                                    </table>';
                            }
                            ?>
                        </div>

                    </main>
        </div>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>
</body>

</html>