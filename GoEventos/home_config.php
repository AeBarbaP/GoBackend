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

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">



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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100">
  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-sm-12 text-center">
          <a style="font-family: 'Josefin Sans', sans-serif;" id="enombre"><strong><?php echo $rowSqlEvent['nombre_e']?></strong></a>
        </div>
      </div>
    </header>

    <br>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Evento</li>
        <!--         <li class="breadcrumb-item active" aria-current="page">Data</li> -->
      </ol>
    </nav>
  </div>

  <main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded" style="background-color: #f3a79c;">
      <div class="col-sm-6 px-0">
        <h1 class="display-4 fst-italic">Bienvenido a Smart-Event</h1>
        <p class="lead my-3">La plataforma para gestionar el acceso a tus eventos de manera efectiva y eficáz</p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold"></a></p>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-sm-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col-sm p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2" style="color: #f3a79c;">Invitados</strong>
            <h3 class="mb-0">Lista de Invitados</h3>
            <!-- <div class="mb-1 text-muted">Nov 12</div> -->
            <p class="card-text lead my-3">Gestiona aquí la lista de invitados para la generación de los QR de Acceso
              para el evento.</p>
            <a href="home_events.php?id=<?php echo $idEvent ?>">Ingresar</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="mb-4" src="../GoEventos/img/GuestList.png" alt="" width="180" height="250">
            <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col-sm p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2" style="color: #f3a79c;">Diseño</strong>
            <h3 class="mb-0">Invitación Digital</h3>
            <!-- <div class="mb-1 text-muted">Nov 11</div> -->
            <p class="lead my-3">Carga el diseño de la invitación para tu evento.</p>
            <a href="invitaciondigital.php?id=<?php echo $idEvent ?>">Ingresar</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="mb-4" src="../GoEventos/img/DiseñoInvitacionesDigitales.jpg" alt="" width="180" height="250">

          </div>
        </div>
      </div>
    </div>

    <div class="p-4 p-md-5 mb-4 text-secondary rounded" style="background-color: #ffe5e1; ">
      <div class="col-sm-6 px-0">
        <h1 class="display-4 fst-italic">Configura tu evento</h1>
        <p class="lead my-3">Aquí puedes definir el número de mesas y sillas de tu evento para asignar lugares a tus
          invitados.</p>
        <a href="configuracion-e.html">Ingresar</a>
      </div>
      <!-- <p class="text-end"><button class="btn btn-outline" style="color: #eba094;" type="button">Guardar</button></p> -->
    </div>

  </main>


  <footer class="blog-footer mt-auto">
    <p>Eventos desarrollado por: Gold AXs.
    </p>
    <p>
      <a href="#">Ir arriba</a>
    </p>
  </footer>



</body>

</html>

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