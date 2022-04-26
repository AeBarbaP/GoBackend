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
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link href="navbar-top-fixed.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">

</head>

<body class="d-flex flex-column min-vh-100">

  <nav class="navbar navbar-expand-md fixed-top" style="background-color: rgba(248, 249, 250, 0.7);">
    <div class="container-fluid justify-content-center">
      <a class="navbar-brand" style="color: #f3a79c; font-size:3rem; font-family: 'Josefin Sans', sans-serif;" href="#">
        <strong>Nombre de
          Evento</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <main class="container mt-5 mb-5">
    <div class="p-4 p-md-5 mb-4 text-white rounded" style="background-color: #f7c6bf; ">
      <div class="col-md-6 px-0">
        <a style="font-size: 2rem; font-family: 'Josefin Sans', sans-serif;"><strong>Lista de Invitados</strong></a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-12">
        <div class="h-100 p-4 text-dark bg-light border rounded-3">
          <i class="fas fa-search h2 mb-2"></i>
          <div class="row mb-3">
            <p class="h5"><strong><i class="bi bi-person-plus h5"></i> Agregar Invitado</strong></p>
          </div>
          <hr>
          <div class="row">
            <div class="col-4">
            <form action="prcd/query_agregar_invitados.php" method="post">
              <div class="form-floating mb-3 ">
                <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Apellido Paterno" name="apellido_p" required>
                <label for="floatingPassword">Apellido Paterno</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating mb-3 ">
                <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Apellido Materno" name="apellido_m" required>
                <label for="floatingPassword">Apellido Materno</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating mb-3 ">
                <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Nombre(s)" name="nombre" required>
                <label for="floatingPassword">Nombre (s)</label>
              </div>
            </div>
            <div class="col-8">
              <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Correo-e" name="email" required>
                <label for="floatingPassword">Correo-e</label>
              </div>
            </div>
            <div class="col-4">
              <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Teléfono" name="celular" required>
                <label for="floatingPassword">Teléfono</label>
              </div>
            </div>
          </div>
          <p class="text-end"><button class="btn btn-outline-secondary mt-3" type="submit"><i class="bi bi-person-plus"></i> Guardar</button></p>
        </div>
        </form>
      </div>
    
    <div class="container mt-3">
    <hr>
        <div class="row">
          <div class="col">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Username" aria-describedby="basic-addon1" id="myInput">
              </div>
          </div>

          <div class="col">
          </div>

      </div>
    </div>

    <div class="container border rounded-3 mt-3 bg-light" style="width: 98%;">
      <div class="row mt-3 border-bottom">
        <p class="h5"><strong><i class="bi bi-card-list"></i> Lista de invitados</strong></p>
      </div>
      <div class="table-responsive">
      <table class="table table-hover table-bordered align-middle mt-4">
        <thead style="background-color:#f7c6bf; color: #7B8DAB;">
          <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Nombre(s)</th>
            <th scope="col">No. Celular</th>
            <th scope="col">Correo Electrónico</th>
            <th scope="col">No. Invitados</th>
            <th scope="col">Agregar</th>
            <th scope="col">Mesa</th>
            <th scope="col">Editar</th>
          </tr>
        </thead>
        <tbody id="myTable">
        <? include ('prcd/query_invitados.php');?>
        
        <? 
        $x = 0;
        while($row_sqlQuery = $resultadosqlQuery->fetch_assoc()){
          $x++;
          echo '
          <tr class="text-center">
            <td>'.$x.'</td>
            <td>'.$row_sqlQuery['apellido_p'].'</td>
            <td>'.$row_sqlQuery['apellido_m'].'</td>
            <td>'.$row_sqlQuery['nombre'].'</td>
            <td>'.$row_sqlQuery['celular'].'</td>
            <td>'.$row_sqlQuery['email'].'</td>
            <td><a href="invitados_secondary.php?id='.$row_sqlQuery['id'].'"><span class="badge bg-warning text-dark">'.$row_sqlQuery['no_invitados'].'</span></a></td>
            <td><a href="#" data-bs-toggle="modal"
            data-bs-target="#AgregarAcomp'.$row_sqlQuery['id'].'"><span class="badge bg-light text-dark"><i class="bi bi-person-plus"></i> Agregar Acompañante</span></a></td>
            <td><span class="badge bg-warning text-dark">'.$row_sqlQuery['mesa'].'</span></td>
            <td><a href="#" data-bs-toggle="modal"
            data-bs-target="#editarInv'.$row_sqlQuery['id'].'"><span class="badge bg-light text-dark"><i class="bi bi-pencil-square"></i> Editar Invitado</span></a></td>

          </tr>';

          echo '
          <!-- Inicia Modal -->
      <div class="modal fade" id="AgregarAcomp'.$row_sqlQuery['id'].'" tabindex="-1" aria-labelledby="Agregar Acompañante" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header text-dark">
              <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-person-plus-fill"></i>
                Agregar invitado secundario</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body text-dark">
            
              <form action="prcd/query_agregar_invitados_secundarios.php" method="POST">
              <input value="'.$row_sqlQuery['id'].'" name="id" hidden>
              <fieldset disabled>    
              <div class="row">
                  
                  <div class="col-4">
                    <div class="form-floating mb-3 ">
                      <input type="text" class="form-control rounded-4" id="floatingPassword"
                        placeholder="username" aria label="Username" aria-describedby="basic-addon1" value="'.$row_sqlQuery['apellido_p'].'">
                      <label for="floatingPassword">Apellido Paterno</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating mb-3 ">
                      <input type="text" class="form-control rounded-4" id="floatingPassword"
                      placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="'.$row_sqlQuery['apellido_m'].'" dis>
                      <label for="floatingPassword">Apellido Materno</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating mb-3 ">
                      <input type="text" class="form-control rounded-4" id="floatingPassword" 
                      placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="'.$row_sqlQuery['nombre'].'">
                      <label for="floatingPassword">Nombre (s)</label>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control rounded-4" id="floatingPassword" 
                      placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="'.$row_sqlQuery['email'].'">
                      <label for="floatingPassword">Correo-e</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control rounded-4" id="floatingPassword" 
                      placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="'.$row_sqlQuery['celular'].'">
                      <label for="floatingPassword">Celular</label>
                    </div>
                  </div>
                  </fieldset>
                  <div class="row">
                  <div class="col-4">
                    <div class="form-floating mb-3">
                      <input type="number" class="form-control rounded-4" id="cambioCeldasInput'.$row_sqlQuery['id'].'"
                        placeholder="Número de acompañantes" onchange="cambioCeldas('.$row_sqlQuery['id'].')" onblur="bloquear('.$row_sqlQuery['id'].')" pattern="[0-9]" max-lenght="2" onkeypress="ValidaSoloNumeros()" >
                      <label for="floatingPassword">Número de acompañantes</label>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control rounded-4" id="floatingPassword"
                        placeholder="Etiqueta para Invitación" readonly>
                      <label for="floatingPassword">Etiqueta para Invitación</label>
                    </div>
                  </div>
                  
                  <hr>
                  <p class="mt-3 mb-2"><span class="h5">Listado de invitados secundarios</span>'.$row_sqlQuery['id'].'</p>

                  <p id="listadoInvitados'.$row_sqlQuery['id'].'" class="mt-3 mb-2"></p>

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
      <div class="modal fade" id="editarInv'.$row_sqlQuery['id'].'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar invitado eje</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="prcd/query_editar_invitado_eje.php" method="post">
            <input value="'.$row_sqlQuery['id'].'" name="id" hidden>
            <div class="modal-body">
              <div class="row">
                <div class="col-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Apellido Paterno</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="apellido_p" value="'.$row_sqlQuery['apellido_p'].'">
                </div>
                </div>
                <div class="col-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Apellido Materno</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="apellido_m" value="'.$row_sqlQuery['apellido_m'].'">
                </div>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Nombre (s)</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="nombre" value="'.$row_sqlQuery['nombre'].'">
                </div>
                <div class="col-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">No. Celular</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="celular" value="'.$row_sqlQuery['celular'].'">
                </div>
                </div>
                <div class="col-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Correo-e</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="email" value="'.$row_sqlQuery['email'].'">
                </div>
                </div>
                <div class="col-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">No. Acompañantes</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="invitados" value="'.$row_sqlQuery['no_invitados'].'">
                </div>
                </div>
                <div class="col-6">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Mesa asignada</span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="mesa" value="'.$row_sqlQuery['mesa'].'">
                </div>
                </div>
              </div>
              
              <div class="alert alert-light" role="alert">
                A simple light alert—check it out!
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
<<<<<<< HEAD

=======
>>>>>>> parent of ae68399... for each2
      ';

        }

        ?>
          
        </tbody>
      </table>
      </div><!-- table responsive -->
    </div>

      

  </main>

  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <p>Eventos desarrollado por: XXXX XXX XXX
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
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
  </script>

  <script>
    
    function cambioCeldas(valor){
      
      var id = 0;
      var id = valor;
      document.getElementById("listadoInvitados"+id).innerHTML = "";
      var x = document.getElementById("cambioCeldasInput"+id).value;
      // alert(x);
      for(let i=0; i<x; i++){
            
            document.getElementById("listadoInvitados"+id).innerHTML+= '<div class="input-group mb-1 mt-1 w-50"><span class="input-group-text" id="basic-addon1"><i class="bi bi-person-plus-fill"></i></span><input name="nombreinvitados[]" id="nombre" type="text" class="form-control" placeholder="Nombre completo" aria-label="" aria-describedby="basic-addon1"></div>';
        }

      }
      function bloquear(val){
        var id = val;
        document.getElementById('cambioCeldasInput'+id).readOnly = true;
    }

    function ValidaSoloNumeros() {
      if ((event.keyCode < 48) || (event.keyCode > 57)) 
        event.returnValue = false;
    }
  </script>