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
    $evento = $_POST['evento'];
    $mesa = $_POST['mesa'];
    $etiqueta = $_POST['etiqueta'];
    $tipo_invitado = 1;


    $sqlInsert ="INSERT INTO invitados (apellido_p,apellido_m,nombre,celular,email,tipo_invitado,id_evento,mesa,etiqueta) VALUES('$apellido_p','$apellido_m','$nombre','$celular','$email','$tipo_invitado','$evento','$mesa','$etiqueta')";
    $resultadosqlInsert = $conn->query($sqlInsert);

    if($resultadosqlInsert){
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Invitado agregado',
            text: 'Se agregó un invitado eje al evento',
            footer: 'Desarrollado por: XXXX XXX XXX</a>'
        }).then(function(){window.location='../home_events.php?id=".$evento."';});</script>";
        }
        else{
        echo 'No se registró la actividad';
        }


?>

</html>