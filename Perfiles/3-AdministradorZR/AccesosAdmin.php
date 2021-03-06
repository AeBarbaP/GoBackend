<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>GO - Administración de Zona Residencial</title>
    <link rel="icon" type="image/png" href="../../Images/LogoGO.png" />

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->

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

    <header class="navbar navbar-dark sticky-top text-light bg-primary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="../Images/LogoGO.png" width="45px"
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
                            <a class="nav-link active" aria-current="page" href="Home_AdminZR.html">
                                <span data-feather="home"></span>
                                Inicio
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="../QR/QR/">
                                <i class="bi bi-upc-scan" style="margin-right: 7px;"></i>
                                Accesos
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link" href="AdministracionResidenciales.php">
                                <i class="bi bi-card-list" style="margin-right: 7px;"></i>
                                Zonas Residenciales
                            </a>
                        </li>
                        <!--                         <li class="nav-item">
                            <a class="nav-link" href="DatosContacto.html">
                                <i class="bi bi-person-rolodex" style="margin-right: 7px;"></i>
                                Datos de Contacto
                            </a>
                        </li> -->
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
                    <h1 class="h2">Accesos</h1>
                    <a href="#ConfiguracionEventos" class="nav-link" data-bs-toggle="modal">
                        <i class="bi bi-gear h4"></i>
                    </a>
                </div>

                <!-- Modal --->
                <div class="modal fade" id="ConfiguracionEventos" tabindex="-1" aria-labelledby="ConfiguracionEventos"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-dark">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-geo-alt"></i> Agregar
                                    Espacio para Eventos</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-dark">

                                <form class="">
                                    <div class="form-floating mb-3">
                                        <input type="NombreEspacioEvento" class="form-control rounded-4"
                                            id="floatingInput" placeholder="Nombre del Espacio">
                                        <label for="floatingInput">Nombre del Espacio para Eventos</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="Capacidad" class="form-control rounded-4" id="floatingPassword"
                                            placeholder="Capacidad">
                                        <label for="floatingPassword">Capacidad</label>
                                    </div>
                                    <a href="/AdministracionSaldos.html"
                                        class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit"><i
                                            class="bi bi-box-arrow-in-down"></i> Guardar</a>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Termina Modal -->

                <!-- Custom styles for this template -->
                <link href="features.css" rel="stylesheet">
                </head>

                <nav>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="AccesosAdmin.html">Programados y
                                Frecuentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../QR/QR/AccesosAdminQR.php">Individuales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../QR/QR/AccesosEmergentes.php">Emergentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../QR/QR/AccesosLimitados.php">Limitados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AccesosAdminHistorial.php">Historial</a>
                        </li>
                    </ul>
                </nav>

                <body>

                    <main>

                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                            <!--                             <h5>Accesos</h5>
                            <div class="btn-toolbar mb-2 mb-md-0">
                            </div>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#RegistrarPagoModal">+ </button>
                                </div>
                            </div> -->
                        </div>
                        <div class="row align-items-md-stretch">
                            <div class="col-md-12">
                                <div class="h-100 p-5 text-dark bg-light border rounded-3">
                                    <i class="fas fa-search h2 mb-3"></i>
                                    <div class="form-floating mb-3">
                                        <input type="Buscar" class="form-control rounded-4" id="floatingInput"
                                            placeholder="Buscar">
                                        <label for="floatingInput">Buscar</label>
                                    </div>
                                    <i class="far fa-address-card h2"></i>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-floating mb-3 ">
                                                <input type="Nombre" class="form-control rounded-4"
                                                    id="floatingPassword" placeholder="Nombre">
                                                <label for="floatingPassword">Nombre</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating mb-3">
                                                <input type="Tel" class="form-control rounded-4" id="floatingPassword"
                                                    placeholder="Teléfono">
                                                <label for="floatingPassword">Teléfono</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- OJO! Cuando se habilita uno se deshabilita el otro -->
                                    <div class="row mt-2">

                                        <div class="col-1">
                                            <div class="form-check">
                                                <div class="form-check form-switch" style="vertical-align: middle;">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        onchange="deshabilita()" id="flexSwitchCheckF1">
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckF1"><strong>Frecuente</strong></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-11" style="vertical-align: middle;">
                                            <script>
                                            function toggle2(source) {
                                                var checkboxes = document.querySelectorAll(
                                                    'input[id="Semanacompleta2"]');
                                                for (var i = 0; i < checkboxes.length; i++) {
                                                    if (checkboxes[i] != source)
                                                        checkboxes[i].checked = source.checked;
                                                }
                                            }
                                            </script>
                                            <div class="form-check form-check-inline ms-5">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option1" onclick="toggle2(this);">
                                                <label class="form-check-label" for="inlineCheckbox2">Seleccionar
                                                    todos</label>
                                            </div>
                                            <div class="form-check form-check-inline ms-5">
                                                <input class="form-check-input" type="checkbox" id="Semanacompleta2"
                                                    value="option1">
                                                <label class="form-check-label" for="Semanacompleta2">Lunes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Semanacompleta2"
                                                    value="option2">
                                                <label class="form-check-label" for="Semanacompleta2">Mártes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Semanacompleta2"
                                                    value="option3">
                                                <label class="form-check-label" for="Semanacompleta2">Miércoles</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Semanacompleta2"
                                                    value="option4">
                                                <label class="form-check-label" for="Semanacompleta2">Jueves</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Semanacompleta2"
                                                    value="option5">
                                                <label class="form-check-label" for="Semanacompleta2">Viernes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Semanacompleta2"
                                                    value="option6">
                                                <label class="form-check-label" for="Semanacompleta2">Sábado</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Semanacompleta2"
                                                    value="option7">
                                                <label class="form-check-label" for="Semanacompleta2">Domingo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-1">
                                            <div class="form-check">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        onchange="deshabilita2()" id="flexSwitchCheckP1" checked>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckP1"><strong>Programado</strong></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-11">
                                        </div>
                                        <!-- SCRIPT para deshabilitar switches -->
                                        <script>
                                        function deshabilita() {
                                            if (document.getElementById('flexSwitchCheckF1').checked) {
                                                document.getElementById('flexSwitchCheckP1').disabled = true;
                                                document.getElementById('HoraEntrada').readOnly = true;
                                                document.getElementById('HoraSalida').readOnly = true;
                                            } else {
                                                document.getElementById('flexSwitchCheckF1').disabled = false;
                                                document.getElementById('flexSwitchCheckP1').disabled = false;
                                                document.getElementById('HoraEntrada').readOnly = false;
                                                document.getElementById('HoraSalida').readOnly = false;
                                                document.getElementById('Semanacompleta2').disabled = true;
                                            }
                                        }

                                        function deshabilita2() {
                                            if (document.getElementById('flexSwitchCheckP1').checked) {
                                                document.getElementById('flexSwitchCheckF1').disabled = true;
                                                document.getElementById('inlineCheckbox2').disabled = true;
                                                document.querySelectorAll('input[id="Semanacompleta2"]').forEach(
                                                    element => element.disabled = true);
                                            } else {
                                                document.getElementById('flexSwitchCheckP1').disabled = false;
                                                document.getElementById('flexSwitchCheckF1').disabled = false;
                                                document.getElementById('inlineCheckbox2').disabled = false;
                                                document.getElementById('Semanacompleta2').disabled = false;
                                                document.querySelectorAll('input[id="Semanacompleta2"]').forEach(
                                                    element => element.disabled = false);
                                            }
                                        }
                                        </script>
                                        <!-- End SCRIPT -->
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <div class="form-floating mb-3 ">
                                                <input type="date" class="form-control rounded-4" id="floatingPassword"
                                                    placeholder="Nombre">
                                                <label for="floatingPassword">Fecha</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="time" class="form-control rounded-4" id="HoraEntrada"
                                                    placeholder="Hora Salida">
                                                <label for="HoraEntrada">Hora de entrada</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating mb-3">
                                                <input type="time" class="form-control rounded-4" id="HoraSalida"
                                                    placeholder="Hora Salida">
                                                <label for="HoraSalida">Hora de salida</label>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="text-end"><button class="btn btn-outline-secondary mt-3"
                                            onclick="AbrirCuteSwalAXs()" type="button">Crear</button></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="h-100 p-5 text-dark bg-light border rounded-3">
                                    <h2>Programaciones activas: </h2>
                                    <hr>
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">Nombre</th>
                                                <th class="text-center" scope="col">Tipo</th>
                                                <th class="text-center" scope="col">Estatus</th>
                                                <th class="text-center" scope="col">Editar</th>
                                                <th class="text-center" scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-light">
                                                <th scope="col">Roberto González</th>
                                                <th class="text-center" scope="row">P</th>
                                                <td class="text-center"><i class="bi bi-lightbulb"
                                                        style="color: green;"></i></td>
                                                <td class="text-center"><a href="#EditarAx" class="nav-link"
                                                        data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></a>
                                                </td>
                                                <td class="text-center"><a href="#" onclick="AbrirCuteSwal()"><i
                                                            class="bi bi-trash"></i></a></td>

                                            </tr>
                                            <tr class="table-light">
                                                <th scope="col">Camión de la basura</th>
                                                <th class="text-center" scope="row text-center">P</th>
                                                <td class="text-center"><i class="bi bi-lightbulb"
                                                        style="color: green;"></i></td>
                                                <td class="text-center"><a href="#EditarAx" class="nav-link"
                                                        data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></a>
                                                </td>
                                                <td class="text-center"><a href="#" onclick="AbrirCuteSwal()"><i
                                                            class="bi bi-trash"></i></a></td>
                                            </tr>
                                            <tr class="table-light">
                                                <th scope="col">Rosa María Juárez</th>
                                                <th scope="row" class="text-center">F</th>
                                                <td class="text-center"><i class="bi bi-lightbulb"
                                                        style="color: green;"></i></td>
                                                <td class="text-center"><a href="#EditarAx" class="nav-link"
                                                        data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></a>
                                                </td>
                                                <td class="text-center"><a href="#" onclick="AbrirCuteSwal()"><i
                                                            class="bi bi-trash"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <!-- Comienza Modal para Editar AXs programados y fecuentes -->
                            <div class="modal fade" id="EditarAx" tabindex="-1" aria-labelledby="Editar Acceso"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header text-dark">
                                            <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-geo-alt"></i>
                                                Editar Acceso</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-dark">

                                            <form class="">
                                                <i class="far fa-address-card h2"></i>
                                                <div class="row">
                                                    <div class="col-8">
                                                        <div class="form-floating mb-3 ">
                                                            <input type="Nombre" class="form-control rounded-4"
                                                                id="floatingPassword" placeholder="Nombre">
                                                            <label for="floatingPassword">Nombre</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-floating mb-3">
                                                            <input type="Tel" class="form-control rounded-4"
                                                                id="floatingPassword" placeholder="Teléfono">
                                                            <label for="floatingPassword">Teléfono</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <!-- OJO! Cuando se habilita uno se deshabilita el otro -->
                                                            <div class="row mt-2">
                                                                <div class="col-1">
                                                                    <div class="form-check">
                                                                        <div class="form-check form-switch"
                                                                            style="vertical-align: middle;">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                onchange="deshabilita3()"
                                                                                id="flexSwitchCheckF">
                                                                            <label class="form-check-label"
                                                                                for="flexSwitchCheckF"><strong>Frecuente</strong></label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-11" style="vertical-align: middle;">
                                                                    <script>
                                                                    function toggle(source) {
                                                                        var checkboxes = document.querySelectorAll(
                                                                            'input[id="Semanacompleta"]');
                                                                        for (var i = 0; i < checkboxes.length; i++) {
                                                                            if (checkboxes[i] != source)
                                                                                checkboxes[i].checked = source.checked;
                                                                        }
                                                                    }
                                                                    </script>
                                                                    <div class="form-check form-check-inline ms-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="inlineCheckbox1" value="option1"
                                                                            onclick="toggle(this);">
                                                                        <label class="form-check-label"
                                                                            for="inlineCheckbox1">Seleccionar
                                                                            todos</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline ms-5">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="Semanacompleta" value="option1">
                                                                        <label class="form-check-label"
                                                                            for="Semanacompleta">Lunes</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="Semanacompleta" value="option2">
                                                                        <label class="form-check-label"
                                                                            for="Semanacompleta">Mártes</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="Semanacompleta" value="option3">
                                                                        <label class="form-check-label"
                                                                            for="Semanacompleta">Miércoles</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="Semanacompleta" value="option2">
                                                                        <label class="form-check-label"
                                                                            for="Semanacompleta">Jueves</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="Semanacompleta" value="option2">
                                                                        <label class="form-check-label"
                                                                            for="Semanacompleta">Viernes</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="Semanacompleta" value="option2">
                                                                        <label class="form-check-label"
                                                                            for="Semanacompleta">Sábado</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="Semanacompleta" value="option2">
                                                                        <label class="form-check-label"
                                                                            for="Semanacompleta">Domingo</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="list-group-item">
                                                            <div class="row mt-2">
                                                                <div class="col-1">
                                                                    <div class="form-check">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" role="switch"
                                                                                onchange="deshabilita4()"
                                                                                id="flexSwitchCheckP" checked>
                                                                            <label class="form-check-label"
                                                                                for="flexSwitchCheckP"><strong>Programado</strong></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="row mt-2">
                                                                <div class="col-auto">
                                                                    <div class="form-check">
                                                                        <div class="form-check form-switch">
                                                                            <input
                                                                                class="form-check-input text-secondary"
                                                                                type="checkbox" role="switch"
                                                                                id="flexSwitchCheck"
                                                                                onchange="EstatusLabel(this.value)">
                                                                            <label class="form-check-label"
                                                                                for="flexSwitchCheck"><strong><span
                                                                                        id="Estatus">Estatus
                                                                                        BD</span></strong></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- SCRIPT Etiqueta dinámica de estatus -->
                                                <script>
                                                function EstatusLabel(value) {
                                                    var id = document.getElementById("flexSwitchCheck").value;
                                                    if (document.getElementById('flexSwitchCheck').checked) {
                                                        document.getElementById('Estatus').innerHTML = "";
                                                        document.getElementById('Estatus').innerHTML += 'Activado';
                                                    } else {
                                                        document.getElementById('Estatus').innerHTML = "";
                                                        document.getElementById('Estatus').innerHTML += 'Desactivado';
                                                    }
                                                }
                                                </script>
                                                <!-- Termina SCRIPT de Etiqueta dinámica -->
                                                <!-- SCRIPT para deshabilitar switches en Modal -->
                                                <script>
                                                function deshabilita3() {
                                                    if (document.getElementById('flexSwitchCheckF').checked) {
                                                        document.getElementById('flexSwitchCheckP').disabled = true;
                                                        document.getElementById('Hentrada').readOnly = true;
                                                        document.getElementById('Hsalida').readOnly = true;
                                                    } else {
                                                        document.getElementById('flexSwitchCheckF').disabled = false;
                                                        document.getElementById('flexSwitchCheckP').disabled = false;
                                                        document.getElementById('Hentrada').readOnly = false;
                                                        document.getElementById('Hsalida').readOnly = false;
                                                        document.getElementById('Semanacompleta').disabled = true;
                                                    }
                                                }

                                                function deshabilita4() {
                                                    if (document.getElementById('flexSwitchCheckP').checked) {
                                                        document.getElementById('flexSwitchCheckF').disabled = true;
                                                        document.getElementById('inlineCheckbox1').disabled = true;
                                                        document.querySelectorAll('input[id="Semanacompleta"]').forEach(
                                                            element => element.disabled = true);
                                                    } else {
                                                        document.getElementById('flexSwitchCheckP').disabled = false;
                                                        document.getElementById('flexSwitchCheckF').disabled = false;
                                                        document.getElementById('inlineCheckbox1').disabled = false;
                                                        document.getElementById('Semanacompleta').disabled = false;
                                                        document.querySelectorAll('input[id="Semanacompleta"]').forEach(
                                                            element => element.disabled = false);
                                                    }
                                                }
                                                </script>
                                                <!-- End SCRIPT -->

                                                <div class="row mt-3">
                                                    <div class="col-12">
                                                        <div class="form-floating mb-3 ">
                                                            <input type="date" class="form-control rounded-4"
                                                                id="floatingPassword" placeholder="Nombre">
                                                            <label for="floatingPassword">Fecha</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="time" class="form-control rounded-4"
                                                                id="Hentrada" placeholder="Hora de Entrada">
                                                            <label for="Hentrada">Hora de entrada</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="time" class="form-control rounded-4"
                                                                id="Hsalida" placeholder="Hora de Salida">
                                                            <label for="Hsalida">Hora de salida</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="AccesosAdmin.html"
                                                    class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit"><i
                                                        class="bi bi-box-arrow-in-down"></i> Guardar</a>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Termina modal para Editar AXs programados y frecuentes -->
                            <!-- Inicia CuteAlert (SWAL) -->
                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                            function AbrirCuteSwal() {
                                Swal.fire({
                                    title: 'Deseas Eliminar definitivamente el Acceso?',
                                    showDenyButton: true,
                                    showCancelButton: false,
                                    confirmButtonText: 'Aceptar',
                                    denyButtonText: `Cancelar`,
                                }).then((result) => {
                                    /* Read more about isConfirmed, isDenied below */
                                    if (result.isConfirmed) {
                                        Swal.fire('Acceso eliminado con éxito!', '', 'success')
                                    } else if (result.isDenied) {
                                        Swal.fire('No se guardaron los cambios', '', 'info')
                                    }
                                })
                            }

                            function AbrirCuteSwalAXs() {
                                Swal.fire({
                                    title: 'Acceso creado con éxito!',
                                    showDenyButton: false,
                                    showCancelButton: false,
                                    confirmButtonText: 'Aceptar',
                                    denyButtonText: `Cancelar`,
                                })
                            }
                            </script>
                            <!-- Termina CuteAlert -->
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