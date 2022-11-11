<html>
    <header>
    <meta charset="utf-8">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
    include('qconn/qc.php');

    $id = $_POST['id'];
    // $nombre = $_POST['nombreinvitados'];
    
echo $id;
// echo $nombre;

    foreach ($_POST['nombreinvitados'] as $invitado) {
        echo $invitado;
        
        // $sql = "INSERT INTO venta_individual(producto,fecha_venta,venta_gral) VALUES('$arreglo','$fecha_sistema','$codigo')";
        // $resultado= $conn->query($sql);

        // $sql = "INSERT INTO invitados_secundarios(nombre,clave_ext) VALUES('$invitado','$id')";
        // $resultadosql = $conn->query($sql);
    
    } 

    // $sqlInsert ="INSERT INTO invitados_secundarios (apellido_p,apellido_m,nombre,celular,email) VALUES('$apellido_p','$apellido_m','$nombre','$celular','$email')";
    // $resultadosqlInsert = $conn->query($sqlInsert);

    if($resultadosql){
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Invitado secundario agregado',
            text: 'Se agregó un invitado secundario al evento',
            footer: 'Desarrollado por: XXXX XXX XXX</a>'
        }).then(function(){window.location='../home_events.php';});</script>";
        }
        else{
        echo 'No se registró la actividad';
        }


?>

</html>