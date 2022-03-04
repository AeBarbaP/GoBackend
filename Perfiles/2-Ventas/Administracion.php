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
                            <a class="nav-link active" aria-current="page" href="Home_AdminZR.html">
                                <span data-feather="home"></span>
                                Inicio
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="AccesosAdmin.html">
                                <i class="bi bi-upc-scan" style="margin-right: 7px;"></i>
                                Accesos
                            </a>
                        </li>
                        <hr>
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
                            <a class="nav-link" href="AccesosAdmin.html">
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
                            <a class="nav-link active" aria-current="page" href="Administracion.php">Cuotas de
                                Colonos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AdministracionIngresos.html">Ingresos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AdministracionEgresos.html">Egresos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AdministracionSaldos.html">Saldos</a>
                        </li>
                    </ul>

                </nav>

                <body>

                    <main>

                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h4">Cuotas de Colonos</h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">

                                    <a href="#ConfiguracionCuotas" class="nav-link" data-bs-toggle="modal">
                                        <i class="bi bi-gear h4"></i>
                                    </a>
                                    <!-- Acommodar modal para configurar cuota mensual y fechas de pago -->
                                    <div class="modal fade" id="ConfiguracionCuotas" tabindex="-1"
                                        aria-labelledby="ConfiguracionCuotas" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header text-dark">
                                                    <h5 class="modal-title" id="exampleModalLabel"><i
                                                            class="bi bi-gear"></i> Configuración de Cuotas Mensuales
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-dark">

                                                    <form class="">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control rounded-4"
                                                                id="floatingInput" placeholder="Monto">
                                                            <label for="floatingInput">Monto de la Cuota Mensual</label>
                                                        </div>
                                                        <p>Selecciona el rango de fechas para pago de cuotas</p>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-floating mb-3">
                                                                    <input type="date" class="form-control rounded-4"
                                                                        id="floatingPassword" placeholder="Password">
                                                                    <label for="floatingPassword">Fecha Inicial</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-floating mb-3">
                                                                    <input type="date" class="form-control rounded-4"
                                                                        id="floatingPassword" placeholder="Password">
                                                                    <label for="floatingPassword">Fecha Final</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <p>Ingresa los siguientes datos:</p>
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control rounded-4"
                                                                id="floatingInput" placeholder="No.Cta">
                                                            <label for="floatingInput">Número de Cuenta</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control rounded-4"
                                                                id="floatingInput" placeholder="CLABE">
                                                            <label for="floatingInput">CLABE Interbancaria</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control rounded-4"
                                                                id="floatingInput" placeholder="CtaPayPal">
                                                            <label for="floatingInput">Cuenta de PayPal</label>
                                                        </div>
                                                        <a href="AdministracionZR/Administracion.php"
                                                            class="w-100 mb-2 btn btn-lg rounded-4 btn-primary"
                                                            type="submit"><i class="bi bi-box-arrow-in-down"></i>
                                                            Guardar</a>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                    <td><a href="Administracion.php?id=1" id="click1">Luis Fernando González Álvarez</a>
                                    </td>
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
                        <hr class="mt-5 mb-5">
                        <div class="">
                            <?php
                            if (isset($_REQUEST['id'])) {
                                echo '<!-- en la etiqueta aparece el nombre del propietario seleccionado en la tabla de arriba -->
                                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                                        <h1 class="h4">Detalle de Pagos</h1>
                                        <div class="btn-toolbar mb-2 mb-md-0">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#RegistrarPagoModal">Agregar Pago</button>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="RegistrarPagoModal" tabindex="-1" aria-labelledby="RegistrarPagoModal" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="RegistrarPagoModal"><i class="bi bi-wallet2"></i> Registrar Pago de Cuota</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form>
                                                    <div class="row mb-3">
                                                        <label for="NoFolio" class="col-sm-2 col-form-label">No. Folio</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" id="NoFolio" >
                                                        </div>
                                                        <label for="IDPropietario" class="col-sm-2 col-form-label">ID Propietario</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" id="IDPropietario" >
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="NombrePropietario" class="col-sm-2 col-form-label">Nombre Propietario</label>
                                                        <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="NombrePropietario">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3"> 
                                                        <label for="FechaPago" class="col-sm-2 col-form-label">Fecha de Pago</label>
                                                        <div class="col-sm-10">
                                                        <input type="date" class="form-control" id="FechaPago">
                                                        </div>
                                                    </div>
                                                    <fieldset class="row mb-3">
                                                        <legend class="col-form-label col-sm-2 pt-0">Modo de Pago</legend>
                                                        <div class="col-sm-10">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gridRadios" id="PEfectivo" value="1" checked>
                                                                <label class="form-check-label" for="PEfectivo">
                                                                Efectivo
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gridRadios" id="PTransferencia" value="2">
                                                                <label class="form-check-label" for="PTransferencia">
                                                                Transferencia
                                                                </label>
                                                            </div>                              
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gridRadios" id="PTarjetaDC" value="3">
                                                                <label class="form-check-label" for="PTarjetaDC">
                                                                Tarjeta Débito/Crédito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="row mb-3"> 
                                                        <label for="TipoPago" class="col-sm-2 col-form-label">Tipo de Pago</label>
                                                        <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Selecciona el tipo de pago</option>
                                                            <option value="1">Mensual</option>
                                                            <option value="2">Bimestral</option>
                                                            <option value="3">Trimestral</option>
                                                            <option value="4">Semestral</option>
                                                            <option value="5">Anual</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3 ml-3"> 
                                                        <div class="form-check" style="margin-left: 18%">
                                                            <input class="form-check-input" type="checkbox" id="Descuento">
                                                            <label class="form-check-label" for="Descuento">
                                                            Aplicar Descuento
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <fieldset class="row mb-3">
                                                        <legend class="col-form-label col-sm-2 pt-0"></legend>
                                                        <div class="col-sm-10">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gridRadios" id="DPorcentaje" value="1" checked>
                                                                <label class="form-check-label" for="PEfectivo">
                                                                Porcentaje
                                                                </label>
                                                                <input type="text" class="form-input w-25" style="margin-left: 5px;" id="Porcentaje">
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="gridRadios" id="PTransferencia" value="2">
                                                                <label class="form-check-label" for="PTransferencia">
                                                                Monto
                                                                </label>
                                                                <input type="text" class="form-input w-25" style="margin-left: 26px;" id="Monto">
                                                            </div>                              
                                                        </div>
                                                    </fieldset>
                                                    <div class="container">
                                                    <div class="row">
                                                        <div class="col"></div>
                                                            <div class="col">
                                                                <p style="text-align: right"> <span> <strong>SUBTOTAL: </strong> $0.00 </span> </p>
                                                                <p style="text-align: right"> <span> <strong>DESCUENTO: </strong> $0.00 </span> </p>
                                                                <p style="text-align: right"> <span> <strong>TOTAL: </strong> $0.00 </span> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cancelar </button>
                                                    <button type="button" class="btn btn-primary"><i class="bi bi-check2-circle"></i> Registrar</button>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 style="margin-top: -20px">Luis Fernando González Álvarez</h5>    
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
                                                <td><button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#RegistrarPagoModal">Pagado</button></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Junio</td>
                                                <td>01-06-2021</td>
                                                <td>PayPal</td>
                                                <td>-</td>
                                                <td><button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#RegistrarPagoModal">Pagado</button></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Julio</td>
                                                <td>01-07-2021</td>
                                                <td>PayPal</td>
                                                <td>-</td>
                                                <td><button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#RegistrarPagoModal">Pagado</button></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Agosto</td>
                                                <td>01-08-2021</td>
                                                <td>PayPal</td>
                                                <td>-</td>
                                                <td><button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#RegistrarPagoModal">Pagado</button></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Septiembre</td>
                                                <td>01-08-2021</td>
                                                <td>PayPal</td>
                                                <td>-</td>
                                                <td><button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#RegistrarPagoModal">Pagado</button></td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>Octubre</td>
                                                <td>01-10-2021</td>
                                                <td>PayPal</td>
                                                <td>-</td>
                                                <td><button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#RegistrarPagoModal">Pagado</button></td>
                                            </tr>
                                            <tr class="table-warning">
                                                <td>Noviembre</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#RegistrarPagoModal">Pendiente</button></td>
                                            </tr>
                                            <tr class="table-warning">
                                                <td>Diciembre</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#RegistrarPagoModal"">Pendiente</button></td>
                                            </tr>
                                        </tbody>
                                    </table>';
                            }
                            ?>
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