<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
    include('qconn/qc.php');

    $id = $_POST['id'];
    $nombre = $_POST['nombreinvitados'];
    
echo $id;
    foreach ($nombre as $nsecundario) {
        // echo $arreglo;
    
        // $sql = "INSERT INTO venta_individual(producto,fecha_venta,venta_gral) VALUES('$arreglo','$fecha_sistema','$codigo')";
        // $resultado= $conn->query($sql);

        $sqlInsertSecundarios ="INSERT INTO invitados_secundarios(nombre,clave_ext) VALUES('$nsecundario','$id')";
        $resultadosqlInsertSecundarios = $conn->query($sqlInsertSecundarios);
    
    } 

    // $sqlInsert ="INSERT INTO invitados_secundarios (apellido_p,apellido_m,nombre,celular,email) VALUES('$apellido_p','$apellido_m','$nombre','$celular','$email')";
    // $resultadosqlInsert = $conn->query($sqlInsert);

    if($resultadosqlInsertSecundarios){
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