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
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="../QR/QR/ajax_generate_code.js"></script>
    <link rel="icon" type="image/png" href="../Images/LogoGO.png" />
    <!--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> -->

    <title>GO - Administración de Zona Residencial</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/features/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
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
                    <h1 class="h2">Accesos</h1>


                </div>

                <!-- Custom styles for this template -->
                <link href="features.css" rel="stylesheet">
                </head>

                <nav>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="AccesosAdmin.html">Programados y Frecuentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../1-SuperAdmin/QR/QR/AccesosAdminQR.html">Individuales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../1-SuperAdmin/QR/QR/AccesosEmergentes.html">Emergentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../1-SuperAdmin/QR/QR/AccesosLimitados.html">Limitados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="AccesosAdminHistorial.html">Historial</a>
                        </li>
                    </ul>
                </nav>

                <body>

                    <main>

                        <div class="container-fluid p-3">
                            <h5></h5>
                            <div class="row g-0">
                                <div class="col-6">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                        data-bs-toggle="modal" data-bs-target="#ClaveTemporal"><span><i
                                                class="bi bi-lock"></i></span>
                                        Crear Clave Temporal
                                    </button>
                                </div>
                                <!-- Comienza Modal para Creación de Clave Temporal -->

                                <div class="modal fade" id="ClaveTemporal" tabindex="-1"
                                    aria-labelledby="Crear Clave Temporal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-dark">
                                                <h5 class="modal-title" id="exampleModalLabel"><i
                                                        class="bi bi-shield-lock"></i> Generar Clave Temporal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-dark">
                                                <form class="">

                                                    <div class="input-group mb-2">
                                                        <span class="input-group-text" id="basic-addon3"><i
                                                                class="bi bi-person-rolodex"></i></span>
                                                        <input class="form-control" list="datalistOptions"
                                                            id="exampleDataList" onchange="tablaCambiar(this.value);"
                                                            placeholder="Tipo de Usuario...">
                                                        <datalist id="datalistOptions">
                                                            <option value="Propiearios">
                                                            <option value="Vigilantes">
                                                            <option value="Otro">
                                                        </datalist>
                                                    </div>
                                                    <div class="input-group mb-2">
                                                        <span class="input-group-text" id="basic-addon3"><i
                                                                class="bi bi-person-check-fill"></i></span>
                                                        <input class="form-control" list="datalistOptions"
                                                            id="exampleDataList" onchange="tablaCambiar(this.value);"
                                                            placeholder="Nombre de Usuario...">
                                                        <datalist id="datalistOptions">
                                                            <!-- Aquí se muestran los nombres de la tabla de usuarios que selecciona en el tipo de usuario -->
                                                            <option value="Francisco Guzmán">
                                                            <option value="Roberto Cabral">
                                                            <option value="Iván Rodríguez">
                                                        </datalist>
                                                    </div>

                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control rounded-4" value=""
                                                            onclick="CopyPass()" readonly id="CopyInput"
                                                            placeholder="Clave Temporal">
                                                        <label for="floatingInput">Clave Temporal</label>
                                                    </div>
                                                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                                    <script>
                                                    function CopyPass() {
                                                        var content = document.getElementById('CopyInput');
                                                        content.select();
                                                        document.execCommand('copy');
                                                        Swal.fire(
                                                            'Copiado!',
                                                            'Copiaste la Clave Temporal!',
                                                            'success'
                                                        );
                                                        /* alert("Copiado!"); */
                                                    }
                                                    </script>
                                                    <a class="w-100 mb-2 btn btn-lg rounded-4 btn-secondary"
                                                        type="submit" id="KeyGenHistoryBtn"
                                                        onclick="gfg_Run();DeshabilitaBtn()"><i
                                                            class="bi bi-clock-history"></i>
                                                        Generar Clave</a>
                                                    <a class="w-100 mb-2 btn btn-lg rounded-4 btn-success" type="submit"
                                                        id="SaveBtn" onclick="" style="display: none;"><i
                                                            class="bi bi-share-fill"></i>
                                                        Compartir</a>
                                                    <hr>
                                                    <script>
                                                    document.getElementById("CopyInput").innerHTML = "";
                                                    var el_down = document.getElementById("CopyInput");
                                                    /* Function to generate combination of password */
                                                    function generateP() {
                                                        var pass = '';
                                                        var str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' +
                                                            'abcdefghijklmnopqrstuvwxyz0123456789@#$';
                                                        for (i = 1; i <= 8; i++) {
                                                            var char = Math.floor(Math.random() *
                                                                str.length + 1);
                                                            pass += str.charAt(char)
                                                        }
                                                        return pass;

                                                    }

                                                    function gfg_Run() {
                                                        el_down.value = generateP();
                                                    }

                                                    function DeshabilitaBtn() {
                                                        document.getElementById("KeyGenHistoryBtn").style.display =
                                                            'none';
                                                        document.getElementById("SaveBtn").style.display = 'block';
                                                    }
                                                    </script>
                                                    <a href="AccesosAdminHistorial.html"
                                                        class="w-100 mb-2 btn btn-lg rounded-4 btn-primary"
                                                        type="submit"><i class="bi bi-x-lg"></i>
                                                        Cerrar</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Termina Modal para Creación de Clave Temporal -->
                                <div class="col-6 justify-content-end">

                                    <div class="btn-toolbar justify-content-end me-2">
                                        <div class="btn-group me-2">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Compartir</button>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary">Exportar</button>
                                        </div>
                                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                            <span data-feather="calendar"></span>
                                            Semanal
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row align-items-md-stretch">
                            <div class="col-md-12">
                                <div class="h-100 p-5 text-dark bg-light border rounded-3">
                                    <div class="col-md-12 col-lg-12">
                                        <form class="needs-validation" novalidate>
                                            <div class="row g-3">
                                                <div class="col-sm-3">
                                                    <label for="firstName" class="form-label">ID de Colono</label>
                                                    <input type="text" class="form-control" id="firstName"
                                                        placeholder="ID" value="" required>
                                                    <div class="invalid-feedback">
                                                        El ID es oblitagorio.
                                                    </div>
                                                </div>

                                                <div class="col-sm-9">
                                                    <label for="firstName" class="form-label">Nombre del Colono</label>
                                                    <input type="text" class="form-control" id="firstName"
                                                        placeholder="Nombre" value="" required>
                                                    <div class="invalid-feedback">
                                                        El nombre es oblitagorio.
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="country" class="form-label">Tipo</label>
                                                    <select class="form-select" id="country" required>
                                                        <option value="">Elige...</option>
                                                        <option>Individual</option>
                                                        <option>Grupal</option>
                                                        <option>Frecuente</option>
                                                        <option>Programado</option>
                                                        <option>Emergente</option>
                                                        <option>Limitado</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Selecciona el tipo de acceso.
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <label for="username" class="form-label">Fecha Inicial</label>
                                                    <div class="input-group has-validation">
                                                        <input type="date" class="form-control" id="username"
                                                            placeholder="Fecha" required>
                                                        <div class="invalid-feedback">
                                                            Ingresa la fecha.
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fecha final no requerida, si se pone se muestra el rango, si no, no -->
                                                <div class="col-sm-3">
                                                    <label for="username" class="form-label">Fecha Final</label>
                                                    <div class="input-group has-validation">
                                                        <input type="date" class="form-control" id="username"
                                                            placeholder="Fecha" required>
                                                        <div class="invalid-feedback">
                                                            Ingresa la fecha.
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                    </div>

                                    <div class="row g-3">
                                        <div></div>
                                        <div class="col-sm-12">
                                            <button type="button" class="btn btn-outline-secondary">
                                                <span data-feather="fa-search"></span> Buscar
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12 col-lg-12">

                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Colono</th>
                                            <th scope="col">Nombre Colono</th>
                                            <th scope="col">Número Invitado</th>
                                            <th scope="col">No. Placas</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Hora Check-In</th>
                                            <th scope="col">Tipo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-light">
                                            <th scope="col">P-015</th>
                                            <th scope="row"><a>Rodolfo Leaños Villegas</a></th>
                                            <td>4926789615</td>
                                            <td>ZDR608C</td>
                                            <td>14/11/2021</td>
                                            <td>14:23:45</td>
                                            <td>Individual</td>
                                        </tr>
                                        <tr class="table-light">
                                            <th scope="col">P-014</th>
                                            <th scope="row"><a>Luis Fernando González Álvarez</a></th>
                                            <td>4925833614</td>
                                            <td>ZCL1578</td>
                                            <td>14/11/2021</td>
                                            <td>14:22:23</td>
                                            <td>Individual</td>
                                        </tr>
                                        <tr class="table-light">
                                            <th scope="col">P-013</th>
                                            <th scope="row"><a>Héctor Mario Mendoza Bañuelos</a></th>
                                            <td>4925783648</td>
                                            <td>JNT1558</td>
                                            <td>14/11/2021</td>
                                            <td>14:21:52</td>
                                            <td>Individual</td>
                                        </tr>
                                        <tr class="table-light">
                                            <th scope="col">P-012</th>
                                            <th scope="row"><a>José Miguel Abascal Rodríguez</a></th>
                                            <td>4921005789</td>
                                            <td>ZHN4652</td>
                                            <td>14/11/2021</td>
                                            <td>14:20:11</td>
                                            <td>Individual</td>
                                        </tr>
                                    </tbody>
                                </table>

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