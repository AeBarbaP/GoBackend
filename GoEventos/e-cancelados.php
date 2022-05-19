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

    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

    include('prcd/qconn/qc.php');

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
        <p class="h3">Bienvenido <strong><?php echo $nombre ?></strong></p>
        <hr>  
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
                        <a class="nav-link text-dark active" aria-current="page" href="e-cancelados.php"><i class="bi bi-calendar2-x"></i> Eventos Cancelados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="e-finalizados.php"><i class="bi bi-check-all"></i> Eventos Finalizados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="addnew.php"><i class="bi bi-folder-plus"></i> Agregar E/O</a>
                    </li>
                    <li class="nav-item">
                        <a href="qrvalidar.php" class="nav-link text-light" style="background-color: #A8A8A8"><i class="bi bi-qr-code-scan"></i> Validar QR</a>
                    </li>
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
            <div class="col-sm-6 px-0">
                <a style="font-size: 1.8rem; font-family: 'Josefin Sans', sans-serif;"><strong>Listado de
                        eventos</strong></a>
            </div>

            <div class="container-fluid rounded-3 p-1 mt-2">

                <div class="mt-1">
                    <!-- Inicia Card container-->
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-sm-4">
                                        <img src="img/evento.png" style="width: 100%; height: 233px; object-fit: cover; object-position:center; background-repeat: no-repeat;" alt="...">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Nombre del Evento</h5>
                                            <p>Organizado por:</p>
                                            <p class="card-text">Status: <i class="bi bi-calendar2-x text-danger"> Cancelado</i></p><!-- OJO Status disponibles: Activo, Cancelado, Bloqueado y Finalizado con 4 flags-->
                                            <p class="card-text mt-0"># de Invitados: <br># de Confirmados:</p> 
                                            <p class="card-text"><small class="text-muted">Evento creado: DD/MM/AA</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3"> 
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-sm-4">
                                        <img src="img/evento.png" style="width: 100%; height: 233px; object-fit: cover; object-position:center; background-repeat: no-repeat;" alt="...">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-body">
                                        <h5 class="card-title">Nombre del Evento</h5>
                                            <p>Organizado por:</p>
                                            <p class="card-text">Status: <i class="bi bi-calendar2-x text-danger"> Cancelado</i></p><!-- OJO Status disponibles: Activo, Cancelado, Bloqueado y Finalizado con 4 flags-->
                                            <p class="card-text mt-0"># de Invitados: <br># de Confirmados:</p> 
                                            <p class="card-text"><small class="text-muted">Evento creado: DD/MM/AA</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3"> 
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-2">
                                    <div class="col-sm-4 ">
                                        <img src="img/evento.png" style="width: 100%; height: 233px; object-fit: cover; object-position:center; background-repeat: no-repeat;" alt="...">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-body">
                                        <h5 class="card-title">Nombre del Evento</h5>
                                            <p>Organizado por:</p>
                                            <p class="card-text">Status: <i class="bi bi-calendar2-x text-danger"> Cancelado</i></p><!-- OJO Status disponibles: Activo, Cancelado, Bloqueado y Finalizado con 4 flags-->
                                            <p class="card-text mt-0"># de Invitados: <br># de Confirmados:</p> 
                                            <p class="card-text"><small class="text-muted">Evento creado: DD/MM/AA</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3"> 
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-sm-4">
                                        <img src="img/evento.png" style="width: 100%; height: 233px; object-fit: cover; object-position:center; background-repeat: no-repeat;" alt="...">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-body">
                                        <h5 class="card-title">Nombre del Evento</h5>
                                            <p>Organizado por:</p>
                                            <p class="card-text">Status: <i class="bi bi-calendar2-x text-danger"> Cancelado</i></p><!-- OJO Status disponibles: Activo, Cancelado, Bloqueado y Finalizado con 4 flags-->
                                            <p class="card-text mt-0"># de Invitados: <br># de Confirmados:</p> 
                                            <p class="card-text"><small class="text-muted">Evento creado: DD/MM/AA</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Termina Card container -->
                </div>


            </div>
        </div>



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