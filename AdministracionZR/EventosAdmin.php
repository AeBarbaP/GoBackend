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
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>


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

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calendario de Eventos</title>
<link href="bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="../Calendar/datatables/datatables.min.css" rel="stylesheet">
<link href="../Calendar/clockpicker/bootstrap-clockpicker.css" rel="stylesheet">
<link href="../Calendar/fullcalendar-3.8.2/packages/core/main.css" rel="stylesheet">
<link href="../Calendar/fullcalendar-3.8.2/packages/daygrid/main.css" rel="stylesheet">
<link href="../Calendar/fullcalendar-3.8.2/packages/timegrid/main.css" rel="stylesheet">
<link href="../Calendar/fullcalendar-3.8.2/packages/list/main.css" rel="stylesheet">
<link href="../Calendar/fullcalendar-3.8.2/packages/bootstrap/main.css" rel="stylesheet">

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script src="datatables/datatables.min.js"></script>
<script src="clockpicker/bootstrap-clockpicker.js"></script>
<script src='js/moment-with-locales.js'></script>
<script src='fullcalendar-4.3.1/packages/core/main.js'></script>
<script src='fullcalendar-4.3.1/packages/daygrid/main.js'></script>
<script src='fullcalendar-4.3.1/packages/timegrid/main.js'></script>
<script src='fullcalendar-4.3.1/packages/interaction/main.js'></script>
<script src='fullcalendar-4.3.1/packages/list/main.js'></script>
<script src='fullcalendar-4.3.1/packages/core/locales/es.js'></script>
<script src='fullcalendar-4.3.1/packages/bootstrap/main.js'></script>

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
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
                            <a class="nav-link" href="PropietariosAdmin.html">
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
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Eventos</h1>
                    <a href="#ConfiguracionEventos" class="nav-link" data-bs-toggle="modal">
                        <i class="bi bi-gear h4"></i>
                    </a>
                </div>

                <!-- Modal --->
                <div class="modal fade" id="ConfiguracionEventos" tabindex="-1" aria-labelledby="ConfiguracionEventos" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-dark">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-geo-alt"></i>  Agregar Espacio para Eventos</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-dark">

                                <form class="">
                                    <div class="form-floating mb-3">
                                        <input type="NombreEspacioEvento" class="form-control rounded-4" id="floatingInput" placeholder="Nombre del Espacio">
                                        <label for="floatingInput">Nombre del Espacio para Eventos</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="Capacidad" class="form-control rounded-4" id="floatingPassword" placeholder="Capacidad">
                                        <label for="floatingPassword">Capacidad</label>
                                    </div>
                                    <a href="/AdministracionSaldos.html" class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit"><i class="bi bi-box-arrow-in-down"></i> Guardar</a>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Termina Modal -->

                <!-- Custom styles for this template -->
                <link href="features.css" rel="stylesheet">
                </head>

<!--                 <nav>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="EventosAdmin.html">Eventos Públicos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="EventosPrivAdmin.html">Eventos Privados</a>
                        </li>
                    </ul>
                </nav> -->

                <body>

                    <main>

                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                            <h5>Eventos</h5>
                            <div class="btn-toolbar mb-2 mb-md-0">
                            </div>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#RegistrarEvento">+ Evento Público</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#RegistrarEvento">+ Evento Privado</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#RegistrarEvento">Buscar</button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Agregar EVENTO -->

                        <div class="modal fade" id="RegistrarEvento" tabindex="-1"
                        aria-labelledby="RegistrarEvento" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="AgregarEvento"><i class="bi bi-calendar-plus"></i></i> Registrar Evento</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate>
                                        <h4>Datos del Evento</h4>
                                        
                                        <!-- Inicia Calendario -->
                                        <div class="container-fluid">
                                            <section class="content-header">
                                              <h1>
                                                Calendario
                                                <small>Panel de control</small>
                                              </h1>
                                            </section>
                                        
                                            <div class="row">
                                        
                                                <div class="col-10">
                                                    <div id="Calendario1" style="border: 1px solid #000;padding:2px"></div>
                                                </div>
                                        
                                                <div class="col-2">
                                                    <div id='external-events' style="margin-bottom:1em; height: 350px; border: 1px solid #000; overflow: auto;padding:1em">
                                                        <h4 class="text-center">Eventos predefinidos</h4>
                                                        <div id='listaeventospredefinidos'>
                                                
                                                            <?php
                                                            require("conexion.php");
                                                            $conexion = retornarConexion();
                                                            $datos = mysqli_query($conexion, "SELECT codigo,titulo,horainicio,horafin,colortexto,colorfondo FROM eventospredefinidos");
                                                            $ep = mysqli_fetch_all($datos, MYSQLI_ASSOC);
                                                            foreach ($ep as $fila)
                                                            echo "<div class='fc-event' data-titulo='$fila[titulo]' data-horafin='$fila[horafin]' data-horainicio='$fila[horainicio]' 
                                                                    data-colorfondo='$fila[colorfondo]' data-colortexto='$fila[colortexto]' data-codigo='$fila[codigo]'
                                                                    style='border-color:$fila[colorfondo];color:$fila[colortexto];background-color:$fila[colorfondo];margin:10px'>
                                                                    $fila[titulo]  [" . substr($fila['horainicio'], 0, 5) . " a " . substr($fila['horafin'], 0, 5) . "]</div>";
                                                
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div style="text-align:center"><button type="button" id="BotonEventosPredefinidos" class="btn btn-success">Administrar eventos predefinidos</button>
                                                    </div>
                                                </div>
                                        
                                            </div>
                                        </div>
                                        <!-- Termina Calendario -->

                                        <!-- FormularioEventos -->
                                        <div class="modal fade" id="FormularioEventos" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                <input type="hidden" id="Codigo">
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                    <label>Título del evento:</label>
                                                    <input type="text" id="Titulo" class="form-control" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label>Fecha de inicio:</label>

                                                    <div class="input-group" data-autoclose="true">
                                                        <input type="date" id="FechaInicio" value="" class="form-control" />
                                                    </div>
                                                    </div>
                                                    <div class="form-group col-md-6" id="TituloHoraInicio">
                                                    <label>Hora de inicio:</label>

                                                    <div class="input-group clockpicker" data-autoclose="true">
                                                        <input type="text" id="HoraInicio" value="" class="form-control" autocomplete="off" />
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label>Fecha de fin:</label>

                                                    <div class="input-group" data-autoclose="true">
                                                        <input type="date" id="FechaFin" value="" class="form-control" />
                                                    </div>
                                                    </div>
                                                    <div class="form-group col-md-6" id="TituloHoraFin">
                                                    <label>Hora de fin:</label>

                                                    <div class="input-group clockpicker" data-autoclose="true">
                                                        <input type="text" id="HoraFin" value="" class="form-control" autocomplete="off" />
                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Descripción:</label>
                                                    <textarea id="Descripcion" rows="3" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Color de fondo:</label>
                                                    <input type="color" value="#3788D8" id="ColorFondo" class="form-control" style="height:36px;">
                                                </div>
                                                <div class="form-group">
                                                    <label>Color de texto:</label>
                                                    <input type="color" value="#ffffff" id="ColorTexto" class="form-control" style="height:36px;">
                                                </div>

                                                </div>
                                                <div class="modal-footer">

                                                <button type="button" id="BotonAgregar" class="btn btn-success">Agregar</button>
                                                <button type="button" id="BotonModificar" class="btn btn-success">Modificar</button>
                                                <button type="button" id="BotonBorrar" class="btn btn-success">Borrar</button>
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>

                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                        <!-- Termina Formulario -->

                                        <div class="row g-3">
                                            <div class="col-sm-12">
                                                <label for="Fecha" class="form-label">Fecha del Evento</label>
                                                <input type="date" class="form-control" id="firstName"
                                                    placeholder="Fecha del Evento" value="" required>
                                                <div class="invalid-feedback">
                                                    El nombre del evento es obligatorio.
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="firstName" class="form-label">Nombre del Evento</label>
                                                <input type="text" class="form-control" id="firstName"
                                                    placeholder="Nombre del Evento" value=""
                                                    required>
                                                <div class="invalid-feedback">
                                                    El nombre del evento es obligatorio.
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Lugar" class="form-label">Lugar del Evento</label>
                                                <select class="form-select" id="Lugar" required>
                                                    <option value="">Elige...</option>
                                                    <option>Club de Golf</option>
                                                    <option>Lobby del Club de Golf</option>
                                                    <option>Capilla</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Selecciona el Lugar del Evento.
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Tipo" class="form-label">Tipo de Evento</label>
                                                <select class="form-select" id="Tipo" required>
                                                    <option value="">Elige...</option>
                                                    <option>Público</option>
                                                    <option>Privado</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Selecciona el Tipo de Evento.
                                                </div>
                                            </div>
                                            
<!--                                             <div class="col-sm-4">
                                                <label for="NoPax" class="form-label">No. Personas</label>
                                                <div class="input-group has-validation">
                                                    <input type="number" class="form-control" id="NoPax"
                                                        placeholder="Número de Personas" required>
                                                    <div class="invalid-feedback">
                                                        Ingresa el número de personas para el evento.
                                                    </div>
                                                </div>
                                            </div> -->
                                            <h4>Datos de Organizador</h4>
                                            <div class="col-sm-12">
                                                <label for="Name" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="Name"
                                                    placeholder="Nombre del Organizador" value="" required>
                                                <div class="invalid-feedback">
                                                    El nombre del Organizador es obligatorio.
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

                        <!-- Termina Modal -->

                        <div class="row align-items-md-stretch">
                            <div class="col-md-4">
                                <div class="h-100 p-5 text-dark bg-light border rounded-3">
                                    <h2>Abierto Invernal de Golf 2021</h2>
                                    <hr>
                                    <p>Fecha: 17 de Diciembre de 2021</p>
                                    <p>Hora: 18:00hrs</p>
                                    <p>Organizador: Epica</p>
                                    <p>Lugar: Club de Golf</p>
                                    <p>Tipo de Evento: Público</p>
                                    <button class="btn btn-outline-secondary" type="button">Detalles</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="h-100 p-5 bg-light border rounded-3">
                                    <h2>Cumpleaños Annely</h2>
                                    <hr>
                                    <p>Fecha: 12 de Diciembre de 2021</p>
                                    <p>Hora: 20:00hrs</p>
                                    <p>Organizador: N/A</p>
                                    <p>Lugar: Lobby Club de Golf</p>
                                    <p>Tipo de Evento: Privado</p>
                                    <button class="btn btn-outline-secondary" type="button">Detalles</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="h-100 p-5 bg-light border rounded-3">
                                    <h2>El Cascanueces </h2>
                                    <hr>
                                    <p>Fecha: 10 de Diciembre de 2021</p>
                                    <p>Hora: 20:00hrs</p>
                                    <p>Organizador: C&M</p>
                                    <p>Lugar: Lobby Club de Golf</p>
                                    <p>Tipo de Evento: Público</p>
                                    <button class="btn btn-outline-secondary" type="button">Detalles</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </main>
        </div>

<!-- Inicia Script Calendario -->
<script>
    document.addEventListener("DOMContentLoaded", function() {

      $('.clockpicker').clockpicker();

      let calendario1 = new FullCalendar.Calendar(document.getElementById('Calendario1'), {
        plugins: ['dayGrid', 'timeGrid', 'interaction'],
        height: 800,
        droppable: true,
        locale: 'es',
        showNonCurrentDates: false,
        header: {
          left: 'today,prev,next',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        editable: true,
        events: 'datoseventos.php?accion=listar',
        dateClick: function(info) {
          limpiarFormulario();
          $('#BotonAgregar').show();
          $('#BotonModificar').hide();
          $('#BotonBorrar').hide();
          if (info.allDay) {
            $('#FechaInicio').val(info.dateStr);
            $('#FechaFin').val(info.dateStr);
          } else {
            let fechaHora = info.dateStr.split("T");
            $('#FechaInicio').val(fechaHora[0]);
            $('#FechaFin').val(fechaHora[0]);
            $('#HoraInicio').val(fechaHora[1].substring(0, 5));
          }
          $("#FormularioEventos").modal();
        },
        eventClick: function(info) {
          $('#BotonModificar').show();
          $('#BotonBorrar').show();
          $('#BotonAgregar').hide();
          $('#Codigo').val(info.event.id);
          $('#Titulo').val(info.event.title);
          $('#Descripcion').val(info.event.extendedProps.descripcion);
          $('#FechaInicio').val(moment(info.event.start).format("YYYY-MM-DD"));
          $('#FechaFin').val(moment(info.event.end).format("YYYY-MM-DD"));
          $('#HoraInicio').val(moment(info.event.start).format("HH:mm"));
          $('#HoraFin').val(moment(info.event.end).format("HH:mm"));
          $('#ColorFondo').val(info.event.backgroundColor);
          $('#ColorTexto').val(info.event.textColor);
          $("#FormularioEventos").modal();
        },
        eventResize: function(info) {
          $('#Codigo').val(info.event.id);
          $('#Titulo').val(info.event.title);
          $('#FechaInicio').val(moment(info.event.start).format("YYYY-MM-DD"));
          $('#FechaFin').val(moment(info.event.end).format("YYYY-MM-DD"));
          $('#HoraInicio').val(moment(info.event.start).format("HH:mm"));
          $('#HoraFin').val(moment(info.event.end).format("HH:mm"));
          $('#ColorFondo').val(info.event.backgroundColor);
          $('#ColorTexto').val(info.event.textColor);
          $('#Descripcion').val(info.event.extendedProps.descripcion);
          let registro = recuperarDatosFormulario();
          modificarRegistro(registro);
        },
        eventDrop: function(info) {
          $('#Codigo').val(info.event.id);
          $('#Titulo').val(info.event.title);
          $('#FechaInicio').val(moment(info.event.start).format("YYYY-MM-DD"));
          $('#FechaFin').val(moment(info.event.end).format("YYYY-MM-DD"));
          $('#HoraInicio').val(moment(info.event.start).format("HH:mm"));
          $('#HoraFin').val(moment(info.event.end).format("HH:mm"));
          $('#ColorFondo').val(info.event.backgroundColor);
          $('#ColorTexto').val(info.event.textColor);
          $('#Descripcion').val(info.event.extendedProps.descripcion);
          let registro = recuperarDatosFormulario();
          modificarRegistro(registro);
        },
        drop: function(info) {
          limpiarFormulario();
          $('#ColorFondo').val(info.draggedEl.dataset.colorfondo);
          $('#ColorTexto').val(info.draggedEl.dataset.colortexto);
          $('#Titulo').val(info.draggedEl.dataset.titulo);
          let fechaHora = info.dateStr.split("T");
          $('#FechaInicio').val(fechaHora[0]);
          $('#FechaFin').val(fechaHora[0]);
          if (info.allDay) { //verdadero si el calendario esta en vista de mes
            $('#HoraInicio').val(info.draggedEl.dataset.horainicio);
            $('#HoraFin').val(info.draggedEl.dataset.horafin);
          } else {
            $('#HoraInicio').val(fechaHora[1].substring(0, 5));
            $('#HoraFin').val(moment(fechaHora[1].substring(0, 5)).add(1, 'hours'));
          }
          let registro = recuperarDatosFormulario();
          agregarEventoPredefinido(registro);
        }
      });

      calendario1.render();


      new FullCalendarInteraction.Draggable(document.getElementById('listaeventospredefinidos'), {
        itemSelector: '.fc-event',
        eventData: function(eventEl) {
          return {
            title: eventEl.innerText.trim()
          }
        }
      });

      //Eventos de botones de la aplicación
      $('#BotonAgregar').click(function() {
        let registro = recuperarDatosFormulario();
        agregarRegistro(registro);
        $("#FormularioEventos").modal('hide');
      });

      $('#BotonModificar').click(function() {
        let registro = recuperarDatosFormulario();
        modificarRegistro(registro);
        $("#FormularioEventos").modal('hide');
      });

      $('#BotonBorrar').click(function() {
        let registro = recuperarDatosFormulario();
        borrarRegistro(registro);
        $("#FormularioEventos").modal('hide');
      });

      $('#BotonEventosPredefinidos').click(function() {
        window.location = "eventospredefinidos.html";
      });


      // funciones para comunicarse con el servidor via ajax
      function agregarRegistro(registro) {
        $.ajax({
          type: 'POST',
          url: 'datoseventos.php?accion=agregar',
          data: registro,
          success: function(msg) {
            calendario1.refetchEvents();
          },
          error: function(error) {
            alert("Hay un problema:" + error);
          }
        });
      }

      function modificarRegistro(registro) {
        $.ajax({
          type: 'POST',
          url: 'datoseventos.php?accion=modificar',
          data: registro,
          success: function(msg) {
            calendario1.refetchEvents();
          },
          error: function(error) {
            alert("Hay un problema:" + error);
          }
        });
      }

      function borrarRegistro(registro) {
        $.ajax({
          type: 'POST',
          url: 'datoseventos.php?accion=borrar',
          data: registro,
          success: function(msg) {
            calendario1.refetchEvents();
          },
          error: function(error) {
            alert("Hay un problema:" + error);
          }
        });
      }

      function agregarEventoPredefinido(registro) {
        $.ajax({
          type: 'POST',
          url: 'datoseventos.php?accion=agregar',
          data: registro,
          success: function(msg) {
            calendario1.removeAllEvents();
            calendario1.refetchEvents();
          },
          error: function(error) {
            alert("Hay un problema:" + error);
          }
        });
      }

      // funciones que interactuan con el formulario de entrada de datos
      function limpiarFormulario() {
        $('#Codigo').val('');
        $('#Titulo').val('');
        $('#Descripcion').val('');
        $('#FechaInicio').val('');
        $('#FechaFin').val('');
        $('#HoraInicio').val('');
        $('#HoraFin').val('');
        $('#ColorFondo').val('#3788D8');
        $('#ColorTexto').val('#ffffff');
      }

      function recuperarDatosFormulario() {
        let registro = {
          codigo: $('#Codigo').val(),
          titulo: $('#Titulo').val(),
          descripcion: $('#Descripcion').val(),
          inicio: $('#FechaInicio').val() + ' ' + $('#HoraInicio').val(),
          fin: $('#FechaFin').val() + ' ' + $('#HoraFin').val(),
          colorfondo: $('#ColorFondo').val(),
          colortexto: $('#ColorTexto').val()
        };
        return registro;
      }

    });
  </script>
<!-- Termina Script Calendario -->

        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
            integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
            integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
            crossorigin="anonymous"></script>
        <script src="dashboard.js"></script>
</body>

</html>
