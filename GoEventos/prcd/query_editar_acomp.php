<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
    include('qconn/qc.php');
    // $idEje = $_POST['invitado_eje'];
    $id = $_POST['id'];
    $id_eje = $_POST['id_eje'];
    $idEvent = $_POST['id_evento'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
/*     $no_invitados = $_POST['invitados'];
    $mesa = $_POST['mesa']; */

    $sqlUpdate ="UPDATE invitados SET apellido_p='$apellido_p',apellido_m='$apellido_m',nombre='$nombre',celular='$celular',email='$email' WHERE id='$id'";

    $resultadosqlUpdate = $conn->query($sqlUpdate);

    if($resultadosqlUpdate){
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Invitado actualizado',
            text: 'Los datos del invitado se han actualizado satisfactoriamente',
            footer: 'Desarrollado por: XXXX XXX XXX</a>'
        }).then(function(){window.location='../invitados_secondary.php?id=".$id_eje."&id2=".$idEvent."';});</script>";
        }
        else{
        echo 'No se registró la actividad';
        }


?>

</html>