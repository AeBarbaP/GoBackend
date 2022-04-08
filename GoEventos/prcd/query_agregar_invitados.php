<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
    include('qconn/qc.php');

    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];


    $sqlInsert ="INSERT INTO invitados (apellido_p,apellido_m,nombre,celular,email) VALUES('$apellido_p','$apellido_m','$nombre','$celular','$email')";
    $resultadosqlInsert = $conn->query($sqlInsert);

    if($resultadosqlInsert){
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Invitado agregado',
            text: 'Se agregó un invitado eje al evento',
            footer: 'Desarrollado por: XXXX XXX XXX</a>'
        }).then(function(){window.location='../home_events.php';});</script>";
        }
        else{
        echo 'No se registró la actividad';
        }


?>

</html>