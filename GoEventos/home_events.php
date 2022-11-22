<?php
    session_start();

    if (isset($_SESSION['nombre'])) {
        if($_SESSION['perfil']==1){
            // header('Location: javascript: history.go(-1)');
        }
        elseif($_SESSION['perfil']==2){
            // header('Location: javascript: history.go(-1)');
        }
        elseif($_SESSION['perfil']==3){
            // header('Location: javascript: history.go(-1)');
        }
    else{
        header('Location:prcd/sort.php');
    }
    // Si esta identificado, en otras palabras existe la variable, le saludamos
        // echo '
        //     <script>
        //         alert("Bienvenido '.$_SESSION['nombre'].'");
        //     </script>';
} else {
    // En caso contrario redirigimos el visitante a otra página

    echo '<script>
    alert("Usuario no valido");
    </script>';
    header('Location: index.html');
    header('Location: prcd/sort.php');
    die();
}
    include('prcd/qconn/qc.php');
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];
    $idEvent = $_REQUEST['id'];

    $sqlEvent = "SELECT * FROM eventos WHERE id = '$idEvent'";
    $sqlResultEvent = $conn->query($sqlEvent);
    $rowSqlEvent = $sqlResultEvent->fetch_assoc();

    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

?>
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
  
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

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
    <link href="navbar-top-fixed.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-md fixed-top" style="background-color: rgba(248, 249, 250, 0.7);">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" id="enombre">
                <strong>
                  <?php echo $rowSqlEvent['nombre_e']?>
                </strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <main class="container mt-5 mb-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?id=<?php echo $idEvent ?>">Inicio</a></li>
        <li class="breadcrumb-item"><a href="home_config.php?id=<?php echo $idEvent ?>">Evento</a></li>
        <li class="breadcrumb-item active" aria-current="page">Invitados</li>
      </ol>
    </nav>
        <div class="p-4 p-md-5 mb-4 text-white rounded" style="background-color: #f7c6bf; ">
            <div class="col-md-6 px-0">
                <a style="font-size: 2rem; font-family: 'Josefin Sans', sans-serif;"><strong>Lista de Invitados</strong></a>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-sm-12">
                <div class="h-100 p-4 text-dark bg-light border rounded-3">
                    <i class="fas fa-search h2 mb-2"></i>
                    <div class="row mb-3">
                        <p class="h5"><strong><i class="bi bi-person-plus h5"></i> Agregar Invitado</strong></p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <form action="prcd/query_agregar_invitados.php" method="post">
                                <div class="form-floating mb-3 ">
                                    <input type="text" value="<?php echo $rowSqlEvent['id'] ?>" name="evento" hidden>
                                    <input type="text" class="form-control rounded-4" id="floatingPassword"
                                        placeholder="Apellido Paterno" name="apellido_p" required>
                                    <label for="floatingPassword">Apellido Paterno</label>
                                </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-floating mb-3 ">
                                <input type="text" class="form-control rounded-4" id="floatingPassword"
                                    placeholder="Apellido Materno" name="apellido_m" required>
                                <label for="floatingPassword">Apellido Materno</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-floating mb-3 ">
                                <input type="text" class="form-control rounded-4" id="floatingPassword"
                                    placeholder="Nombre(s)" name="nombre" required>
                                <label for="floatingPassword">Nombre (s)</label>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-4" id="floatingPassword"
                                    placeholder="Correo-e" name="email" required>
                                <label for="floatingPassword">Correo-e</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-4" id="floatingPassword"
                                    placeholder="Teléfono" name="celular" required>
                                <label for="floatingPassword">Teléfono</label>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-4" id="floatingPassword"
                                    placeholder="Etiqueta para Invitación" name="etiqueta">
                                <label for="floatingPassword">Etiqueta para Invitación</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-4" id="floatingPassword"
                                    placeholder="Etiqueta para Invitación" name="mesa" required>
                                <label for="floatingPassword">No. Mesa</label>
                            </div>
                        </div>
                    </div>
                    <p class="text-end"><button class="btn btn-outline-secondary mt-3" type="submit"><i
                                class="bi bi-person-plus"></i> Guardar</button></p>
                </div>
                </form>
            </div>

            <div class="container mt-3">
                <hr>
                <div class="row">
                    <div class="col-sm">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Buscar..." aria-label="Username"
                                aria-describedby="basic-addon1" id="myInput">
                        </div>
                    </div>

                    <div class="col-sm">
                    </div>

                </div>
            </div>

            <div class="container border rounded-3 mt-3 bg-light" style="width: 98%;">
                <div class="row mt-3 border-bottom">
                    <div class="col-sm-4">
                        <p class="h5"><strong><i class="bi bi-card-list"></i> Lista de invitados</strong></p>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4 btn-group mb-3" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-secondary"><i class="bi bi-cloud-download"></i>
                            Plantilla</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                            data-bs-target="#uploadguestlist"><i class="bi bi-person-plus"></i> Cargar
                            Lista de Invitados</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-sm align-middle mt-4">
                        <thead style="background-color:#f7c6bf; color: #7B8DAB;">
                            <tr class="text-center align-middle">
                                <th scope="col">#</th>
                                <th scope="col">Sel. <br><input class="form-check-input" type="checkbox" value=""></th>
                                <th scope="col">QR</th>
                                <th scope="col">Ap. Paterno</th>
                                <th scope="col">Ap. Materno</th>
                                <th scope="col">Nombre(s)</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Correo Electrónico</th>
                                <th scope="col"># Invitados</th>
                                <th scope="col">Mesa</th>
                                <th scope="col"># Confirmados <br># Total</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Acompañantes</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php include('prcd/query_invitados.php'); ?>

                            <?php
              $x = 0;
              while ($row_sqlQuery = $resultadosqlQuery->fetch_assoc()) {
                $x1 = $row_sqlQuery['qr'];
                $y = $row_sqlQuery['id'];
                $x++;
                echo '
          <tr class="text-center">
            <td>' . $x . '</td>
            <td><input class="form-check-input" type="checkbox" value="'.$row_sqlQuery['id'].'"></td>
            <td><a data-bs-toggle="modal" data-bs-target="#QR'.$row_sqlQuery['id'].'"><i class="bi bi-qr-code"></i><a></td>
            <td>' . $row_sqlQuery['apellido_p'] . '</td>
            <td>' . $row_sqlQuery['apellido_m'] . '</td>
            <td>' . $row_sqlQuery['nombre'] . '</td>
            <td>' . $row_sqlQuery['celular'] . '</td>
            <td>' . $row_sqlQuery['email'] . '</td>'
            ;

            $idSeconday = $row_sqlQuery['id'];
            $sqlSecondary ="SELECT * FROM invitados WHERE id_evento = $idEvent AND tipo_invitado = 2 AND invitado_eje = $idSeconday";
            $sqlResultSecondary = $conn->query($sqlSecondary);
            $filaSecondary = $sqlResultSecondary->num_rows;
            
            echo '<td><a href="invitados_secondary.php?id=' . $row_sqlQuery['id'] . '&&id2='.$idEvent.'"><span class="badge bg-warning text-dark">' . $filaSecondary. '</span></a></td>
            <td>' . $row_sqlQuery['mesa'] . '</td>';

            /* $idTotal = $row_sqlQuery['id']; */
            $sqlTotal ="SELECT * FROM invitados WHERE id_evento = $idEvent AND tipo_invitado = 2 AND invitado_eje = $idSeconday";
            $sqlResultTotal = $conn->query($sqlTotal);
            $filaTotal = $sqlResultTotal->num_rows;
            $TotalInvitados = $filaTotal + 1;

            /* $idConfirmados = $row_sqlQuery['id']; */
            $sqlConfirmados ="SELECT * FROM invitados WHERE id_evento = $idEvent AND tipo_invitado = 2 AND invitado_eje = $idSeconday AND confirmacion = 1";
            $sqlResultConfirmados = $conn->query($sqlConfirmados);
            $filaConfirmados = $sqlResultConfirmados->num_rows;

            echo '<td>'.$filaConfirmados.' / '.$TotalInvitados.'</td>
            <td><a href="#" data-bs-toggle="modal"
            data-bs-target="#editarInv' . $row_sqlQuery['id'] . '"><span class="badge bg-light text-dark"><i class="bi bi-pencil-square"></i></span></a></td>
            <td><a href="#" data-bs-toggle="modal"
            data-bs-target="#AgregarAcomp' . $row_sqlQuery['id'] . '"><span class="badge bg-light text-dark"><i class="bi bi-person-plus"></i></span></a></td>
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
                  </fieldset>
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
            <input value="' . $idEvent . '" name="event" hidden>
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
      echo'
      <!-- Modal -->
      <div class="modal fade" id="QR'.$row_sqlQuery['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#f7c6bf;">
              <h1 class="modal-title fs-5 text-secondary" id="exampleModalLabel"><i class="bi bi-qr-code"></i> QR '.$row_sqlQuery['apellido_p'].' '.$row_sqlQuery['apellido_m'].' '.$row_sqlQuery['nombre'].'</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>  
            <div class="modal-body">
              <img src="'.$row_sqlQuery['qr'].'" width="100%">
            </div>
            <div class="modal-footer">';
            ?>

              <button type="button" class="btn btn-outline-secondary" onclick="copyQR('<?php echo $x1 ?>')"><i class="bi bi-clipboard"></i> Copiar QR</button>

              <?php
              echo'
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill text-danger"></i> Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      ';

              }

              ?>

                        </tbody>
                    </table>
                </div><!-- table responsive -->
                <p class="text-end">
                    <button class="btn btn-outline-secondary mt-3" type="submit"><i class="bi bi-qr-code"></i> Enviar QR</button>
                  </p>
            </div>

            <!-- Inicia modal para subirl lista de invitados desde CSV -->
            <div class="modal fade" id="uploadguestlist" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header"
                            style="color: #f3a79c; font: size 12px; font-family: 'Josefin Sans', sans-serif;">
                            <h5 class="modal-title"
                                style="color: #f3a79c; font: size 16px; font-family: 'Josefin Sans', sans-serif;"
                                id="exampleModalLabel"><strong>Cargar Lista de Invitados</strong></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="prcd/intermedia.php" method="POST" enctype="multipart/form-data">
                              
                            <input type="text" value="<?php echo $idEvent ?>" name="id" hidden>
                            <div class="input-group mb-3">
                                <p>Selecciona el archivo .csv para cargar la lista de invitados en el sistema.</p>
                                  <input type="file" class="form-control" id="inputGroupFile03" name="csv" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                  <button type="submit" class="btn btn-primary"><i class="bi bi-cloud-arrow-down-fill"></i> Guardar</button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <a href="csv.php?id2=<?php echo $idEvent ?>" type="button" class="btn btn-primary">Guardar</a> --> <!-- Agregar código para insertar los datos del csv a la db -->
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle-fill text-danger"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Termina modal para subir lista de invitados desde CSV -->


    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <p>Eventos desarrollado por: Gold AXs
            </p>
            <p>
                <a href="#">Ir arriba</a>
            </p>
        </div>
    </footer>

</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>

<script>
var id = 0;

function cambioCeldas(valor) {


    var id = valor;
    document.getElementById("listadoInvitados" + id).innerHTML = "";
    var x = document.getElementById("cambioCeldasInput" + id).value;
    // alert(x);
    for (let i = 0; i < x; i++) {

        document.getElementById("listadoInvitados" + id).innerHTML +=
            '<div class="input-group mb-1 mt-1 w-50"><span class="input-group-text" id="basic-addon1"><i class="bi bi-person-plus-fill"></i></span><input name="nombreinvitados[]" type="text" class="form-control w-50" placeholder="Nombre completo" aria-label="Username" aria-describedby="basic-addon1" value=""></input></div>';
    }

}

function bloquear(val) {
    var id = val;
    document.getElementById('cambioCeldasInput' + id).readOnly = true;
}

function ValidaSoloNumeros() {
    if ((event.keyCode < 48) || (event.keyCode > 57))
        event.returnValue = false;
}

// copypaste

async function copyQR(x) {
  try {
    const imgURL = x;
    const data = await fetch(imgURL);
    const blob = await data.blob();

    await navigator.clipboard.write([
      new ClipboardItem({
        [blob.type]: blob,
      }),
    ]);
    alert('QR copiado');
    console.log("Fetched image copied.");
  } catch (err) {
    console.error(err.name, err.message);
  }
}

</script>

<input name="nombreinvitados[]" type="text" class="form-control w-50" placeholder="" aria-label="Username"
    aria-describedby="basic-addon1" value="'+y+'" READONLY hidden>

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