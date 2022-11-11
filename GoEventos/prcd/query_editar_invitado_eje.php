<html>
    <header>
    <meta charset="utf-8">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
    include('qconn/qc.php');
    $id = $_POST['id'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $no_invitados = $_POST['invitados'];
    $mesa = $_POST['mesa'];
    $event = $_POST['event'];

    $sqlUpdate ="UPDATE invitados SET apellido_p='$apellido_p',apellido_m='$apellido_m',nombre='$nombre',celular='$celular',email='$email',no_invitados='$no_invitados',mesa='$mesa' WHERE id='$id'";

    $resultadosqlUpdate = $conn->query($sqlUpdate);

    if($resultadosqlUpdate){
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Invitado actualizado',
            text: 'Los datos del invitado se han actualizado satisfactoriamente',
            footer: 'Desarrollado por: XXXX XXX XXX</a>'
        }).then(function(){window.location='../home_events.php?id=".$event."';});</script>";
        }
        else{
        echo 'No se registró la actividad';
        }


?>

</html>