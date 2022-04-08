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

  <main class="container mt-5">
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
            <p class="h5"><strong><i class="bi bi-person-plus h5"></i> Agregar invitado eje</strong></p>
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
                <input type="text" class="form-control" placeholder="Buscar..." aria-label="Username" aria-describedby="basic-addon1">
              </div>
          </div>

          <div class="col">
          </div>

      </div>
    </div>

    <div class="container border mt-3 bg-light" style="width: 98%;">
      <table class="table table-striped table-hover mt-5">
        <thead>
          <tr>
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
        <tbody>
        <? include ('prcd/query_invitados.php');?>
        
        <? 
        $x = 0;
        while($row_sqlQuery = $resultadosqlQuery->fetch_assoc()){
          $x++;
          echo '
          <tr>
            <td>'.$x.'</td>
            <td>'.$row_sqlQuery['apellido_p'].'</td>
            <td>'.$row_sqlQuery['apellido_m'].'</td>
            <td>'.$row_sqlQuery['nombre'].'</td>
            <td>'.$row_sqlQuery['celular'].'</td>
            <td>'.$row_sqlQuery['email'].'</td>
            <td>'.$row_sqlQuery['no_invitados'].'</td>
            <td><span class="badge bg-light text-dark" data-bs-toggle="modal"
            data-bs-target="#AgregarInv"><i class="bi bi-person-plus"></i></span></td>
            <td>'.$row_sqlQuery['apellido_p'].'</td>
            <td>'.$row_sqlQuery['apellido_p'].'</td>
            <td><span class="badge bg-light text-dark"><i class="bi bi-person-plus"></i></span></td>

          </tr>';

        }

        ?>
          
        </tbody>
      </table>
    </div>

      <!-- Inicia Modal -->
      <div class="modal fade" id="AgregarInv" tabindex="-1" aria-labelledby="Agregar Invitado" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header text-dark">
              <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-geo-alt"></i>
                Agregar Invitado</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">

              <form class="">
                <i class="far fa-address-card h2"></i>
                <div class="row">
                  <div class="col-4">
                    <div class="form-floating mb-3 ">
                      <input type="text" class="form-control rounded-4" id="floatingPassword"
                        placeholder="Apellido Paterno">
                      <label for="floatingPassword">Apellido Paterno</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating mb-3 ">
                      <input type="text" class="form-control rounded-4" id="floatingPassword"
                        placeholder="Apellido Materno">
                      <label for="floatingPassword">Apellido Materno</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating mb-3 ">
                      <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Nombre(s)">
                      <label for="floatingPassword">Nombre (s)</label>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Correo-e">
                      <label for="floatingPassword">Correo-e</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control rounded-4" id="floatingPassword" placeholder="Teléfono">
                      <label for="floatingPassword">Teléfono</label>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-floating mb-3">
                      <input type="number" class="form-control rounded-4" id="floatingPassword"
                        placeholder="Número de acompañantes">
                      <label for="floatingPassword">Número de acompañantes</label>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control rounded-4" id="floatingPassword"
                        placeholder="Etiqueta para Invitación">
                      <label for="floatingPassword">Etiqueta para Invitación</label>
                    </div>
                  </div>
                </div>
                <p class="text-end">
                  <button class="btn btn-outline-secondary mt-3" type="button"><i class="bi bi-person-plus"></i> Agregar invitado</button>
                </p>
              </form>

            </div>
          </div>
        </div>
      </div>
      <!-- Termina modal para Editar AXs programados y frecuentes -->

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