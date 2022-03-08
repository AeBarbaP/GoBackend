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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

    <header class="navbar navbar-dark sticky-top text-light bg-success flex-md-nowrap p-0 shadow">
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
                    <h1 class="h2">Administración de Habitantes</h1>
                </div>

                <!-- Custom styles for this template -->
                <link href="features.css" rel="stylesheet">
                </head>

                <body>

                    <main>
                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                            <h1 class="h4">Habitantes</h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn me-2">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="modal" data-bs-target="#AgregarVigilante">Agregar +</button>
                                </div>
                            </div>
                            <!-- Modal Agregar Vigilante -->
                            <div class="modal fade" id="AgregarVigilante" tabindex="-1"
                                aria-labelledby="AgregarVigilante" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="AgregarVigilante"><i class="bi bi-wallet2"></i>
                                                Registrar Habitante</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate>
                                                <h4>Datos Personales</h4>
                                                <div class="row g-3">
                                                    <div class="col-sm-12">
                                                        <label for="firstName" class="form-label">Nombre
                                                            Completo</label>
                                                        <input type="text" class="form-control" id="firstName"
                                                            placeholder="Nombre completo del Contacto" value=""
                                                            required>
                                                        <div class="invalid-feedback">
                                                            El nombre de contacto es oblitagorio.
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="username" class="form-label">Teléfono
                                                            Celular</label>
                                                        <div class="input-group has-validation">
                                                            <input type="tel" class="form-control" id="username"
                                                                placeholder="Teléfono fijo" required>
                                                            <div class="invalid-feedback">
                                                                Ingresa un teléfono válido.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="username" class="form-label">Teléfono fijo</label>
                                                        <div class="input-group has-validation">
                                                            <input type="tel" class="form-control" id="username"
                                                                placeholder="Teléfono fijo" required>
                                                            <div class="invalid-feedback">
                                                                Ingresa un teléfono válido.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="email" class="form-label">Email <span
                                                                class="text-muted"></span></label>
                                                        <input type="email" class="form-control" id="email"
                                                            placeholder="tu-correo@ejemplo.com">
                                                        <div class="invalid-feedback">
                                                            Por favor ingresa una dirección de correo válido.
                                                        </div>
                                                    </div>

                                                    <h4>Domicilio</h4>
                                                    <div class="col-12">
                                                        <label for="address" class="form-label">Calle</label>
                                                        <input type="text" class="form-control" id="address"
                                                            placeholder="Calle" required>
                                                        <div class="invalid-feedback">
                                                            Campo obligatorio.
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="address2" class="form-label">Número <span
                                                                class="text-muted"></span></label>
                                                        <input type="text" class="form-control" id="address2"
                                                            placeholder="Número">
                                                        <div class="invalid-feedback">
                                                            Campo obligatorio.
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="country" class="form-label">Estado</label>
                                                        <select class="form-select" id="country" required>
                                                            <option value="">Elige...</option>
                                                            <option>Zacatecas</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Selecciona un Estado.
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="state" class="form-label">Municipio</label>
                                                        <select class="form-select" id="state" required>
                                                            <option value="">Elige...</option>
                                                            <option>Zacatecas</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Selecciona un Municipio.
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="state" class="form-label">Ciudad</label>
                                                        <select class="form-select" id="state" required>
                                                            <option value="">Elige...</option>
                                                            <option>Zacatecas</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Selecciona una Ciudad.
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="zip" class="form-label">Código Postal</label>
                                                        <input type="text" class="form-control" id="zip"
                                                            placeholder="C.P." required>
                                                        <div class="invalid-feedback">
                                                            Código Postal requerido.
                                                        </div>
                                                    </div>

                                                    <h4>Referencias</h4>
                                                    <div class="col-12">
                                                        <label for="referencia1" class="form-label">Referencia 1 <span
                                                                class="text-muted"></span></label>
                                                        <input type="referencia1" class="form-control" id="referencia1"
                                                            placeholder="Nombre completo">
                                                        <div class="invalid-feedback">
                                                            Por favor ingresa el nombre de la primera referencia.
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="celref1" class="form-label">Teléfono Celular</label>
                                                        <div class="input-group has-validation">
                                                            <input type="celref1" class="form-control"
                                                                id="celref1 placeholder=" Teléfono Celular" required>
                                                            <div class="invalid-feedback">
                                                                Ingresa un teléfono válido.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="relacionref" class="form-label">Parentesco /
                                                            Relación</label>
                                                        <div class="input-group has-validation">
                                                            <input type="relacionref" class="form-control"
                                                                id="relacionref" placeholder="Parentesco o relación"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Indica el parentesco o relación que tiene con su
                                                                referencia 1
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="referencia1" class="form-label">Referencia 2 <span
                                                                class="text-muted"></span></label>
                                                        <input type="referencia1" class="form-control" id="referencia1"
                                                            placeholder="Nombre completo">
                                                        <div class="invalid-feedback">
                                                            Por favor ingresa el nombre de la primera referencia.
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="celref2" class="form-label">Teléfono Celular</label>
                                                        <div class="input-group has-validation">
                                                            <input type="celref2" class="form-control"
                                                                id="celref2 placeholder=" Teléfono Celular" required>
                                                            <div class="invalid-feedback">
                                                                Ingresa un teléfono válido.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="relacionref" class="form-label">Parentesco /
                                                            Relación</label>
                                                        <div class="input-group has-validation">
                                                            <input type="relacionref" class="form-control"
                                                                id="relacionref" placeholder="Parentesco o relación"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Indica el parentesco o relación que tiene con su
                                                                referencia 1
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cancelar
                                                    </button>
                                                    <button type="button" class="btn btn-primary"><i
                                                            class="bi bi-check2-circle"></i> Guardar</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Poner filtro en los títuos de las columnas de la tabla para la búsqueda por cualquiera de las columnas -->

                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">No. ID</th>
                                    <th scope="col">Nombre Completo</th>
                                    <th scope="col">No. de Celular</th>
                                    <th scope="col">Asignación ZR</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Horario</th>
                                    <th scope="col">Documentos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-light">
                                    <th scope="col">V01-001</th>
                                    <th scope="row"><a href="VigilantesAdmin.php?id=1" id="click1">Armando Luna
                                            Martínez</a></th>
                                    <td>492123456</td>
                                    <td>Coto Bizantino</td>
                                    <td>Activo</td>
                                    <td>Nocturno</td>
                                    <td><input class="form-check-input" type="checkbox" value="" id="defaultCheck1"
                                            data-bs-toggle="modal" data-bs-target="#RegistrarDeudaPrevia"
                                            onchange="warning()"></td>
                                </tr>
                                <tr class="table-light">
                                    <th scope="col">V01-002</th>
                                    <th scope="row"><a href="#">Emmanuel López Gutiérrez</a></th>
                                    <td>492234567</td>
                                    <td>Coto Bizantino</td>
                                    <td>Activo</td>
                                    <td>Matutino</td>
                                    <td><a href="#"><i class="bi bi-person-bounding-box"></i></a><a href="#"><i
                                                class="bi bi-file-earmark-plus"></i></a><a href="#"> <i
                                                class="bi bi-person-lines-fill"></i></a><a href="#"> <i
                                                class="bi bi-file-person"></i></a></td>
                                </tr>
                            </tbody>
                            <!-- Modal Agregar Documentos

                            <div class="modal fade" id="RegistrarDeudaPrevia" tabindex="-1"
                                aria-labelledby="RegistrarDeudaPrevia" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="RegistrarDeudaPrevia"><i
                                                    class="bi bi-wallet2"></i> Registrar Deuda Previa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row mb-3">
                                                    <label for="IDPropietario" class="col-sm-2 col-form-label">ID
                                                        Propietario</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" id="IDPropietario">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="NombrePropietario"
                                                        class="col-sm-2 col-form-label">Nombre del Propietario</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="NombrePropietario">
                                                    </div>
                                                    <label for="MontoDeuda" class="col-sm-2 col-form-label">Monto de la
                                                        Deuda Previa</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" id="MontoDeuda">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cancelar
                                                    </button>
                                                    <button type="button" class="btn btn-primary"><i
                                                            class="bi bi-check2-circle"></i> Guardar</button>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->


                        </table>
                        <hr class="mt-5 mb-5">
                        <div class="">
                            <?php
                            if (isset($_REQUEST['id'])) {
                                echo '
                                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                                        <h1 class="h4">Detalle de Vigilante</h1>
                                        <div class="btn-toolbar mb-2 mb-md-0">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#RegistrarPagoModal">Editar</button>
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
                                    <h5 style="margin-top: -20px">Luis Fernando González Álvarez</h5>';

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