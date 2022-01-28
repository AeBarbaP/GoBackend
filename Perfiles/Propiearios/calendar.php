<?php

session_start();

// if (isset($_SESSION['usr'])) {
//   if($_SESSION['privilegio']==1){

//   }
//   else{
//     header('Location: prcd/sort.php');
//     die();
//   }
  
// } else {

//   header('Location: prcd/sort.php');
//   die();
// }

include('prcd/conn.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id = $_SESSION['id'];
    $perfil = $_SESSION['privilegio'];
    // $nombre = $_SESSION['nombre'];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dental | Inicio</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/">

    
<link rel="icon" type="image/png" href="css/assets/brand/dental.png" />
    <!-- Bootstrap core CSS -->
<link href="css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
<link href="css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/jumbotron/">

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
    <link href="css/headers.css" rel="stylesheet">
  </head>
  <body>

<main>
  <h1 class="visually-hidden">Dental | Inicio</h1>
  

  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="dashboard.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg> -->
          <img src="css/assets/brand/dental.png" alt="" width="32">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="dashboard.php" class="nav-link px-2 text-white">Inicio</a></li>
          <li><a href="citas.php" class="nav-link px-2 text-secondary"><i class="bi bi-list-columns-reverse"></i> Agenda</a></li>
          <!-- <li><a href="#" class="nav-link px-2 text-white"><i class="bi bi-card-list"></i> Diagnóstico</a></li> -->
          <li><a href="pacientes.php" class="nav-link px-2 text-white"><i class="bi bi-person-bounding-box"></i> Pacientes</a></li>
          <li><a href="catalogo.php" class="nav-link px-2 text-white"><i class="bi bi-person-lines-fill"></i> Catálogo</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <!-- <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search"> -->
        </form>

        <div class="text-end">
          <!-- <button type="button" class="btn btn-outline-light me-2">Login</button> -->
          <a href="prcd/sort.php" type="button" class="btn btn-warning"><i class="bi bi-door-open-fill"></i> Salir</a>
        </div>
      </div>
    </div>
  </header> 
  <div class="b-example-divider"></div>

  
</main>

<body>
    <div class="container">

    <p class="h4 mt-5">
        <strong><i class="bi bi-person-circle"></i> Bienvenido</strong> Usuario.
      </p>

    <hr>

      <p class="h4 mt-5">
        <strong><i class="bi bi-list-columns-reverse"></i> Agenda</strong> 
      </p>

      <p>
        <!-- <div class="input-group mb-3 w-25">
          <input type="date" class="form-control" placeholder="Recipient's username" aria-label="dd/mm/aaaa" aria-describedby="button-addon2">
          <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i> Buscar</button> -->
        </div>
      </p>

    </div>
<main>
<div class="container py-4">

<!-- inicia calendar -->

<?php

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                  $fecha_sistema = strftime("%Y-%m-%d");

// $fecha = '2017-04-26'; //Fecha de la que queramos saber el número de días que tiene el mes.

                // echo date( 't', strtotime( $fecha_sistema ) );
                $dia=date( 't', strtotime( $fecha_sistema ) ); //número de días en el mes
                
                if(isset($_REQUEST['m'])){
                  $m = $_REQUEST['m'];
                  // $mes=date( 'm', strtotime( $fecha_sistema ) ); //muestra el número de mes
                  $mes= $_REQUEST['ma'];
                  $mtotal = $mes + ($m);
                }
                else{
                  $mtotal=date( 'm', strtotime( $fecha_sistema ) ); //muestra el número de mes
                }

                // $mes=date( 'm', strtotime( $fecha_sistema ) ); //muestra el número de mes
                // $mtotal=date( 'm', strtotime( $fecha_sistema ) ); //muestra el número de mes
                // $mtotal = $mes + ($m);
                // $mes=date('F', strftime($fecha_sistema)); //muestra el mes actual
                // $fecha_actual=strftime("%B");
                echo '<a href="calendar.php?m=-1&ma='.$mtotal.'"><span class="badge rounded-pill bg-secondary text-light"> << </span></a> <strong>MES</strong>: ';
                
                if($mtotal==1){
                  echo '<p>Enero</p>';
                }
                elseif($mtotal==2){
                  echo 'Febrero';
                }
                elseif($mtotal==3){
                  echo 'Marzo';
                }
                elseif($mtotal==4){
                  echo 'Abril';
                }
                elseif($mtotal==5){
                  echo 'Mayo';
                }
                elseif($mtotal==6){
                  echo 'Junio';
                }
                elseif($mtotal==7){
                  echo 'Julio';
                }
                elseif($mtotal==8){
                  echo 'Agosto';
                }
                elseif($mtotal==9){
                  echo 'Septiembre';
                }
                elseif($mtotal==10){
                  echo 'Octubre';
                }
                elseif($mtotal==11){
                  echo 'Noviembre';
                }
                elseif($mtotal==12){
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
    </main>
</body>

<div class="b-example-divider"></div>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li><a href="dashboard.php" class="nav-link px-2 text-secondary">Inicio</a></li>
        <li><a href="citas.php" class="nav-link px-2 text-dark"><i class="bi bi-list-columns-reverse"></i> Agenda</a></li>
        <!-- <li><a href="#" class="nav-link px-2 text-dark"><i class="bi bi-card-list"></i> Diagnóstico</a></li> -->
        <li><a href="pacientes.php" class="nav-link px-2 text-dark"><i class="bi bi-person-bounding-box"></i> Pacientes</a></li>
        <li><a href="catalogo.php" class="nav-link px-2 text-dark"><i class="bi bi-person-lines-fill"></i> Catálogo</a></li>
    </ul>
    <p class="text-center text-muted">REDDeploy &copy; 2021</p>
  </footer>
</div>
</div>


    <script src="css/assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>


