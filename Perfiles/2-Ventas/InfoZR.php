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
                    <h1 class="h2">Zona Residencial</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nombre de la Zona Residencial</label>
                                <input type="text" class="form-control" id="firstName"
                                    placeholder="Nombre de la Zona Residencial" value="" required>
                                <div class="invalid-feedback">
                                    El nombre de la Zona Residencial es obligatorio.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Número total de casas y lotes</label>
                                <input type="number" class="form-control" id="lastName"
                                    placeholder="Número total de casas y lotes" value="" required>
                                <div class="invalid-feedback">
                                    Campo obligatorio.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">Teléfono fijo</label>
                                <div class="input-group has-validation">
                                    <input type="tel" class="form-control" id="username" placeholder="Teléfono fijo"
                                        required>
                                    <div class="invalid-feedback">
                                        Ingresa un teléfono válido.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                                <input type="email" class="form-control" id="email" placeholder="tu-correo@ejemplo.com">
                                <div class="invalid-feedback">
                                    Por favor ingresa una dirección de correo válido.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Calle</label>
                                <input type="text" class="form-control" id="address" placeholder="Calle" required>
                                <div class="invalid-feedback">
                                    Campo obligatorio.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="address2" class="form-label">Número <span class="text-muted"></span></label>
                                <input type="text" class="form-control" id="address2" placeholder="Número">
                                <div class="invalid-feedback">
                                    Campo obligatorio.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="zip" class="form-label">Código Postal</label>
                                <input type="text" class="form-control" id="zip" placeholder="C.P." required>
                                <div class="invalid-feedback">
                                    Código Postal requerido.
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
                        </div>
                </div>


                <hr class="my-4">
                <!-- Botón aparece cuando le das "onclick" al botón de EDITAR y habilita los input para editar la información -->
                <div class="d-grid gap-2">

                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="background-color: #EB7C2A; color: white;">
                        <i class="bi bi-info-circle-fill"></i> Registrar
                    </button>
                </div>

        </div>
        </main>
    </div>
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