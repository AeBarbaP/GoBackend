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
    $idEvent = $_REQUEST['id2'];

    $idSecondary = $_REQUEST['id'];


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="navbar-top-fixed.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100 mt-3">

    <nav class="navbar navbar-expand-md fixed-top" style="background-color: rgba(248, 249, 250, 0.7);">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" style="color: #f3a79c; font-size:3rem; font-family: 'Josefin Sans', sans-serif;"
                href="#">
                <strong>
                    <?php echo $rowSqlEvent['nombre_e'] ?>
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
        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
        <li class="breadcrumb-item"><a href="home_events.html">Evento</a></li>
        <li class="breadcrumb-item"><a href="home_events.php">Invitados</a></li>
        <li class="breadcrumb-item active" aria-current="page">Acompañantes</li>
        <!--         <li class="breadcrumb-item active" aria-current="page">Data</li> -->
      </ol>
    </nav>
        <div class="p-4 p-md-5 mb-4 text-white rounded" style="background-color: #f7c6bf; ">
            <div class="col-sd-6 px-0">
                <a style="font-size: 2rem; font-family: 'Josefin Sans', sans-serif;"><strong>Lista de
                        Invitados</strong></a>
            </div>
        </div>

        <div class="row align-items-md-stretch">


            <div class="container mt-3">
                <?php
        $sql_invitado = "SELECT * FROM invitados WHERE id = '$idSecondary'";
        $resultado_sql_invitado = $conn->query($sql_invitado);
        $row_sql_invitado = $resultado_sql_invitado->fetch_assoc()
        ?>
                <p class="h3">
                    <?php echo $row_sql_invitado['nombre'] . ' ' . $row_sql_invitado['apellido_p'] . ' ' . $row_sql_invitado['apellido_m']; ?>
                </p>
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
                    <p class="h5"><strong><i class="bi bi-card-list"></i> Lista de Acompañantes</strong></p>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-sm align-middle mt-4">
                        <thead style="background-color:#f7c6bf; color: #7B8DAB;">
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Nombre completo</th>
                                <th scope="col">Parentesco</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php

            include('prcd/query_invitado_secundario.php'); ?>

                            <?php
            $x = 0;
            while ($row_sqlQuerySecondary = $resultadosqlQuerySecondary->fetch_assoc()) {
                $x++;
                echo '
            <tr class="text-center">
            <td>' . $x . '</td>
            
            <td>' . $row_sqlQuerySecondary['nombre'] . '</td>
            <td>Parentesco</td>
            <td><a href="#" data-bs-toggle="modal"
            data-bs-target="#AgregarAcomp' . $row_sqlQuerySecondary['id'] . '"><span class="badge bg-warning text-dark"><i class="bi bi-person-plus"></i> Editar</span></a></td>
            

            </tr>';
            }

            ?>

                        </tbody>
                    </table>

                </div><!-- table responsive -->
            </div>

            <p class="mt-3"><a href="home_events.php" class="btn btn-primary"><i
                        class="bi bi-arrow-left-circle-fill"></i> Regresar</a></p>

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
function cambioCeldas(valor) {

    var id = 0;
    var id = valor;
    document.getElementById("listadoInvitados" + id).innerHTML = "";
    var x = document.getElementById("cambioCeldasInput" + id).value;
    // alert(x);
    for (let i = 0; i < x; i++) {

        document.getElementById("listadoInvitados" + id).innerHTML +=
            '<div class="input-group mb-1 mt-1"><span class="input-group-text" id="basic-addon1"><i class="bi bi-person-plus-fill"></i></span><input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1"><input type="text" class="form-control" placeholder="Apellidos" aria-label="Apellidos" aria-describedby="basic-addon1"><input type="text" class="form-control" placeholder="Parentesco" aria-label="Parentesco" aria-describedby="basic-addon1"></div>';
    }

}

function bloquear(val) {
    var id = val;
    document.getElementById('cambioCeldasInput' + id).readOnly = true;
}

// document.getElementById("listadoInvitados"+id).innerHTML = ;
</script>