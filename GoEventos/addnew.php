<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Smart-Event · by GO Ax's</title>
    <link rel="icon" type="image/png" href="img/eventos.ico">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b2e301b71f.js" crossorigin="anonymous"></script>
    <link href="navbar-top-fixed.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">

</head>

<nav class="navscroll navbar navbar-expand-md fixed-top" style="background-color:#f3a79c">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand text-light" style="font-size:3rem; font-family: 'Josefin Sans', sans-serif;"
            href="#"><strong>GOLD AXs </strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    </div>
</nav>

<body class="d-flex flex-column min-vh-100 mt-3">
    <main class="container-fluid w-100 mt-5 mb-5">
        <div class="container-fluid w-100 mb-3">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid justify-content-center">
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="index.php"><i class="bi bi-calendar2-check"></i> Eventos Activos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="e-inactivos.php"><i class="bi bi-clock-history"></i> Eventos Inactivos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="e-bloqueados.php"><i class="bi bi-calendar-minus"></i> Eventos Bloqueados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="e-cancelados.php"><i class="bi bi-calendar2-x"></i> Eventos Cancelados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="e-finalizados.php"><i class="bi bi-check-all"></i> Eventos Finalizados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark active" aria-current="page" href="addnew.php"><i class="bi bi-folder-plus"></i> Agregar E/O</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link text-light" style="background-color: #A8A8A8" aria-current="page" data-bs-toggle="modal" data-bs-target="#agregarevento">Nuevo</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light" style="background-color: #A8A8A8" aria-current="page" data-bs-toggle="modal" data-bs-target="#agregarevento"><i class="bi bi-calendar2-plus"></i> Agregar Evento</a>
                    </li> -->
                </ul>
                </div>
            </div>
        </nav>
        </div>

        <!-- Inicia Modal #agregarevento -->
        <div class="modal fade" id="agregarevento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-family: 'Josefin Sans', sans-serif;"><i class="bi bi-calendar2-plus"></i><strong> Agregar Evento</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form mb-3 ">
                                <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Nombre del Evento" name="e-nombre" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3" style="align-items:vertical">
                                <select class="form-select" id="inputGroupSelect02">
                                    <option selected>Selecciona...</option>
                                    <option value="1">Evento Social</option>
                                    <option value="2">Evento Deportivo</option>
                                    <option value="3">Evento Masivo</option>
                                    <option value="4">Congreso/Convención</option>
                                    <option value="5">Reunión</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3 ">
                                <input type="text" class="form-control rounded-4" 
                                    placeholder="Lugar" name="e-lugar" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3 ">
                                <input type="date" class="form-control rounded-4" 
                                    placeholder="Fecha" name="e-fecha" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3 ">
                                <input type="number" class="form-control rounded-4" 
                                    placeholder="# Invitados" name="e-invitados" required>
                            </div>
                        </div>
                        <p style="font-family: 'Josefin Sans', sans-serif;">Datos del Organizador</p>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Existente
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Nuevo
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Escribe para buscar...">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3 ">
                                <input type="text" class="form-control rounded-4" placeholder="Apellido Paterno" name="oe-apellido_p" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3 ">
                                <input type="text" class="form-control rounded-4" placeholder="Apellido Materno" name="oe-apellido_m" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3 ">
                                <input type="text" class="form-control rounded-4" placeholder="Nombre(s)" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form mb-3">
                                <input type="text" class="form-control rounded-4" placeholder="Correo-e" name="email" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3">
                                <input type="text" class="form-control rounded-4" placeholder="Teléfono" name="celular" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form mb-3">
                                <input type="text" class="form-control rounded-4" placeholder="RFC" name="rfc">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Termina Modal #agregarevento -->

        <div class="p-4 p-md-5 mb-4 text-dark rounded">

            <div class="container-fluid rounded-3 p-1 mt-2">

                <div class="mt-1">
                    <!-- Inicia Card container-->
                    <div class="row">
                        <div class="col-sm-6">
                            <a style="text-decoration: none" data-bs-toggle="modal" data-bs-target="#agregarevento">
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-sm-4">
                                            <img src="img/agenda-e.jpg" style="width: 100%; height: 233px; object-fit: cover; object-position:center; background-repeat: no-repeat;" alt="...">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Agregar un Evento Nuevo</h5>
                                                <p>Dá click aquí...</p>
                                                <p class="card-text mt-0"><i class="bi bi-clipboard2-heart text-secondary" style="font-size: 3rem"></i></p><!-- OJO Status disponibles: Activo, Cancelado, Bloqueado y Finalizado con 4 flags-->
                                                <p class="card-text"><small class="text-muted">by Smart-Event</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6"> 
                            <a style="text-decoration: none" data-bs-toggle="modal" data-bs-target="#newplanner">    
                                <div class="card mb-3">
                                    <div class="row g-0">
                                        <div class="col-sm-4">
                                            <img src="img/newplanner.jpg" style="width: 100%; height: 233px; object-fit: cover; object-position:center; background-repeat: no-repeat;" alt="...">
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="card-body">
                                            <h5 class="card-title">Agregar un Organizador Nuevo</h5>
                                                <p>Dá click aquí...</p>
                                                <p class="card-text mt-0"><i class="bi bi-person-plus text-secondary" style="font-size: 3rem"></i></p><!-- OJO Status disponibles: Activo, Cancelado, Bloqueado y Finalizado con 4 flags-->
                                                <p class="card-text"><small class="text-muted">by Smart-Event</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Termina Card container -->
                </div>


            </div>
        </div>
        <!-- Inicia Modal #newplanner -->
        <div class="modal fade" id="newplanner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-family: 'Josefin Sans', sans-serif;"><i class="bi bi-person-plus"></i><strong> Agregar Organizador</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <p style="font-family: 'Josefin Sans', sans-serif;">Datos del Organizador</p>
                        <div class="col-sm-4">
                            <div class="form mb-3 ">
                                <input type="text" class="form-control rounded-4" placeholder="Apellido Paterno" name="oe-apellido_p" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3 ">
                                <input type="text" class="form-control rounded-4" placeholder="Apellido Materno" name="oe-apellido_m" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3 ">
                                <input type="text" class="form-control rounded-4" placeholder="Nombre(s)" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form mb-3">
                                <input type="text" class="form-control rounded-4" placeholder="Correo-e" name="email" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3">
                                <input type="text" class="form-control rounded-4" placeholder="Teléfono" name="celular" required>
                            </div>
                        </div>
                        <p style="font-family: 'Josefin Sans', sans-serif;">Datos Fiscales: </p>
                        <div class="col-sm-8">
                            <div class="form mb-3">
                                <input type="text" class="form-control rounded-4" placeholder="Razón Social" name="rs">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form mb-3">
                                <input type="text" class="form-control rounded-4" placeholder="RFC" name="rfc" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
                </div>
            </div>
        </div>
        <!-- Termina Modal #agregarevento -->
        <div class="table-responsive">
                    <table class="table table-hover table-bordered table-sm align-middle mt-4">
                        <thead style="background-color:#f7c6bf; color: #7B8DAB;">
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Sel. <br><input class="form-check-input" type="checkbox" value=""></th>
                                <th scope="col">Ap. Paterno</th>
                                <th scope="col">Ap. Materno</th>
                                <th scope="col">Nombre(s)</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Correo Electrónico</th>
                                <th scope="col">RFC</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php include('prcd/query_planners.php'); ?>

                            <?php
              $x = 0;
              while ($row_sqlQuery = $resultadosqlQuery->fetch_assoc()) {
                $x++;
                echo '
                    <tr class="text-center">
                        <td>' . $x . '</td>
                        <td><input class="form-check-input" type="checkbox" value="'.$row_sqlQuery['id'].'"></td>
                        <td>' . $row_sqlQuery['apellido_p'] . '</td>
                        <td>' . $row_sqlQuery['apellido_m'] . '</td>
                        <td>' . $row_sqlQuery['nombres'] . '</td>
                        <td>' . $row_sqlQuery['telefono'] . '</td>
                        <td>' . $row_sqlQuery['correo_e'] . '</td>
                        <td>' . $row_sqlQuery['rfc'] . '</td>
                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#editarInv' . $row_sqlQuery['id'] . '"><span class="badge bg-light text-dark"><i class="bi bi-pencil-square"></i></span></a></td>

                    </tr>';

                echo '
                <!-- Inicia Modal -->
                    <div class="modal fade" id="AgregarAcomp' . $row_sqlQuery['id'] . '" tabindex="-1" aria-labelledby="Agregar Acompañante" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header text-dark">
                                    <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-person-plus-fill"></i>
                                        Agregar invitado secundario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body text-dark">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3 ">
                                                <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="username" aria label="Username" aria-describedby="basic-addon1" value="' . $row_sqlQuery['apellido_p'] . '" readonly>
                                                <label for="floatingPassword">Apellido Paterno</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3 ">
                                                <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="' . $row_sqlQuery['apellido_m'] . '" readonly>
                                                <label for="floatingPassword">Apellido Materno</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3 ">
                                            <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="' . $row_sqlQuery['nombre'] . '" readonly>
                                            <label for="floatingPassword">Nombre (s)</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="' . $row_sqlQuery['email'] . '" readonly>
                                            <label for="floatingPassword">Correo-e</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="' . $row_sqlQuery['celular'] . '" readonly>
                                                <label for="floatingPassword">Celular</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control rounded-4" id="cambioCeldasInput' . $row_sqlQuery['id'] . '" placeholder="Número de acompañantes" onchange="cambioCeldas(' . $row_sqlQuery['id'] . ')" onblur="bloquear(' . $row_sqlQuery['id'] . ')" pattern="[0-9]" max-lenght="2" onkeypress="ValidaSoloNumeros()" >
                                                    <label for="floatingPassword">Número de acompañantes</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Etiqueta para Invitación" value="' . $row_sqlQuery['etiqueta'] . '" readonly>
                                                    <label for="floatingPassword">Etiqueta para Invitación</label>
                                                </div>
                                            </div>
                                            <hr>
                                            <p class="mt-3 mb-2"><span class="h5">Listado de Acompañantes</span></p>
                                            <form action="prcd/query_agregar_invitados_secundarios.php" name="invSecundario" id="invSecundario" method="POST">
                                                <input value="' . $row_sqlQuery['id'] . '" name="id" hidden>
                                                <p id="listadoInvitados' . $row_sqlQuery['id'] . '" class="mt-3 mb-2"></p>
                                                <p class="text-end">
                                                    <button class="btn btn-primary mt-3" type="submit"><i class="bi bi-person-plus"></i> Agregar</button>
                                                </p>
                                        </div>
                                    </div>
                                </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Termina modal para Editar AXs programados y frecuentes -->
          ';

                echo '
      <!-- Modal edición invitado eje -->
      <div class="modal fade" id="editarInv' . $row_sqlQuery['id'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar invitado eje</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="prcd/query_editar_invitado_eje.php" method="post">
            <input value="' . $row_sqlQuery['id'] . '" name="id" hidden>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Apellido Paterno</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="apellido_p" value="' . $row_sqlQuery['apellido_p'] . '">
                </div>
                </div>
                <div class="col-sm-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Apellido Materno</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="apellido_m" value="' . $row_sqlQuery['apellido_m'] . '">
                </div>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Nombre (s)</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="nombre" value="' . $row_sqlQuery['nombre'] . '">
                </div>
                <div class="col-sm-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">No. Celular</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="celular" value="' . $row_sqlQuery['celular'] . '">
                </div>
                </div>
                <div class="col-sm-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Correo-e</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="email" value="' . $row_sqlQuery['email'] . '">
                </div>
                </div>
                <div class="col-sm-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">No. Acompañantes</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="invitados" value="' . $row_sqlQuery['no_invitados'] . '">
                </div>
                </div>
                <div class="col-sm-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Mesa asignada</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="mesa" value="' . $row_sqlQuery['mesa'] . '">
                </div>
                </div>
                <div class="col-sm-12">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Etiqueta de Invitación</span>
                  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="etiqueta" value="' . $row_sqlQuery['etiqueta'] . '">
                </div>
                </div>
              </div>
              
              <div class="alert alert-secondary" role="alert">
                <p class="text-center pt-3">
                  <i class="bi bi-card-checklist"></i> Ver listado de acompañantes <a href="invitados_secondary.php?id=' . $row_sqlQuery['id'] . '"><i class="bi bi-arrow-right-circle-fill"></i></a>
                <p>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      ';
              }

              ?>

                        </tbody>
                    </table>
                </div><!-- table responsive -->

    </main>

    <footer class="footer mt-auto py-3 bg-light"
        style="font-size:1.3rem; font-family: 'Josefin Sans', sans-serif;">
        <div class="container">
            <p>Eventos desarrollado por: <strong>Gold AXs.</strong>
            </p>
            <p>
                <a href="#">Ir arriba</a>
            </p>
        </div>
    </footer>

</body>

</html>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<script>
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.nav-link').addClass("azul");
            $('.navscroll').addClass("azul");
            $('.navbar-brand').addClass("azul");
        } else {
            $(".nav-link").removeClass("azul");
            $(".navscroll").removeClass("azul");
            $(".navbar-brand").removeClass("azul");
        }
    });
});
</script>

<style>
.navbar-brand.azul {
    color: #7B8DAB;
}

.navbar-brand {
    color: #7B8DAB;
}

/* .nav-link{
            color: #ffffff;
        }
        .nav-link.azul{
            color: #000000;
        } */
.navscroll {
    background-color: rgba(0, 0, 0, 0.9);
    color: yellow;
    transition: background-color 500ms, color 500ms;
    text-decoration: none;
}

.navscroll.azul {
    background-color: rgb(123, 141, 171);
    color: #7B8DAB;
    box-shadow: 0 2px 4px 0 rgba(123, 141, 171, .4);
}

.navbar-toggler {
    width: 47px;
    height: 34px;
    box-shadow: 0 2px 4px 0 rgba(123, 141, 171, .9);
    border: none;
}

.navbar-toggler .line {
    width: 100%;
    float: left;
    height: 2px;
    background-color: #fff;
    margin-bottom: 5px;
}

.card:hover {
    background: #FEF4EF;
    transform: scale(1.10);
    z-index: 20;
}

</style>

<style>
  /* normal web */
  #enombre {
    font-size: 50px;
    color: #f3a79c;
    font-family: 'Josefin Sans', sans-serif;
  }

  /* On screens that are 992px wide or less, go from four columns to two columns */
  /* tablets, celular horizontal y otros dispositivos */
  @media screen and (max-width: 992px) {
    #enombre {
      font-size: 100%;
    }
  }

  /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
  /* CELULAR */
  @media screen and (max-width: 600px) {
    #enombre {
        font-size: 120%;
      text-align: center;
      text-decoration: none;
      font-family: 'Josefin Sans', sans-serif;
        }
    }
     
</style>