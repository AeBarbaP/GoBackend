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
                    <h1 class="h2">Eventos</h1>
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

                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
                            <h5>Próximos Eventos</h5>
                            <div class="btn-toolbar mb-2 mb-md-0">
                            </div>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group me-2">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="modal" data-bs-target="#RegistrarEvento">+ Evento
                                        Público</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="modal" data-bs-target="#RegistrarEvento">+ Evento
                                        Privado</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="modal" data-bs-target="#RegistrarEvento">Buscar</button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Agregar EVENTO -->

                        <div class="modal fade" id="RegistrarEvento" tabindex="-1" aria-labelledby="RegistrarEvento"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="AgregarEvento"><i
                                                class="bi bi-calendar-plus"></i></i> Registrar Evento</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate>
                                            <h4>Datos del Evento</h4>

                                            <div class="container py-4">

                                                <!-- inicia calendar -->

                                                <?php

                        date_default_timezone_set('America/Mexico_City');
                        setlocale(LC_TIME, 'es_MX.UTF-8');
                        $fecha_sistema = strftime("%Y-%m-%d");

                        // $fecha = '2017-04-26'; //Fecha de la que queramos saber el número de días que tiene el mes.

                        // echo date( 't', strtotime( $fecha_sistema ) );
                        $dia = date('t', strtotime($fecha_sistema)); //número de días en el mes

                        if (isset($_REQUEST['m'])) {
                          $m = $_REQUEST['m'];
                          // $mes=date( 'm', strtotime( $fecha_sistema ) ); //muestra el número de mes
                          $mes = $_REQUEST['ma'];
                          $mtotal = $mes + ($m);
                        } else {
                          $mtotal = date('m', strtotime($fecha_sistema)); //muestra el número de mes
                        }

                        // $mes=date( 'm', strtotime( $fecha_sistema ) ); //muestra el número de mes
                        // $mtotal=date( 'm', strtotime( $fecha_sistema ) ); //muestra el número de mes
                        // $mtotal = $mes + ($m);
                        // $mes=date('F', strftime($fecha_sistema)); //muestra el mes actual
                        // $fecha_actual=strftime("%B");
                        echo '<a href="calendar.php?m=-1&ma=' . $mtotal . '"><span class="badge rounded-pill bg-secondary text-light"> << </span></a> <strong>MES</strong>: ';

                        if ($mtotal == 1) {
                          echo '<p>Enero</p>';
                        } elseif ($mtotal == 2) {
                          echo 'Febrero';
                        } elseif ($mtotal == 3) {
                          echo 'Marzo';
                        } elseif ($mtotal == 4) {
                          echo 'Abril';
                        } elseif ($mtotal == 5) {
                          echo 'Mayo';
                        } elseif ($mtotal == 6) {
                          echo 'Junio';
                        } elseif ($mtotal == 7) {
                          echo 'Julio';
                        } elseif ($mtotal == 8) {
                          echo 'Agosto';
                        } elseif ($mtotal == 9) {
                          echo 'Septiembre';
                        } elseif ($mtotal == 10) {
                          echo 'Octubre';
                        } elseif ($mtotal == 11) {
                          echo 'Noviembre';
                        } elseif ($mtotal == 12) {
                          echo 'Diciembre';
                        }
                        echo ' <a href="calendar.php?m=1"><span class="badge rounded-pill bg-secondary text-light"> >> </span></a>';
                        echo '<hr>';


                        // .$fecha_actual.'<hr>'; 


                        // $consulta2 ="SELECT * FROM citas WHERE fecha = '$fecha_sistema' ORDER BY fecha DESC, hora DESC LIMIT 10";
                        // $consulta2 ="SELECT * FROM citas ORDER BY fecha DESC, hora DESC LIMIT 10";
                        // $resultado_consulta2 = $conn->query($consulta2);
                        // $n=0;
                        // while ($dia = 30){
                        echo ' 
            
            <div class="card-group">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">1</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">2</h5>
                  <hr>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">3</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">4</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">5</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">6</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">7</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
            </div>
            
            <div class="card-group">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">8</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">9</h5>
                  <hr>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">10</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">11</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">12</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">13</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">14</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
            </div>
            
            <div class="card-group">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">15</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">16</h5>
                  <hr>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">17</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">18</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">19</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">20</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">21</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
            </div>
            
            <div class="card-group">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">22</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">23</h5>
                  <hr>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">24</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">25</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">26</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">27</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">28</h5>
                  <hr>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
              </div>
            </div>

            <div class="card-group">
              <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">29</h5>
                    <hr>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">30</h5>
                    <hr>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">31</h5>
                    <hr>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  </div>
                </div>
                <div class="card border-light">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <hr>
                    <p class="card-text"></p>
                  </div>
                </div>
                <div class="card border-light">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                  </div>
                </div>
                <div class="card border-light">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                  </div>
                </div>
                <div class="card border-light">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                  </div>
                </div>
            </div>


              ';
                        // }

                        ?>


                                                <!-- termina calendar -->

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                                                        class="bi bi-x-circle"></i> Cancelar
                                                </button>
                                                <button type="button" class="btn btn-primary"><i
                                                        class="bi bi-check2-circle"></i> Guardar</button>
                                            </div>
                                        </form>
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
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>