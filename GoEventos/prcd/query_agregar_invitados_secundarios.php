<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
    include('qconn/qc.php');

    $id = $_POST['id'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $parentesco = $_POST['parentesco'];

    foreach ($id as $id_secundario,$apellido as $apellido_secundario) {
        // echo $arreglo;
    
        // $sql = "INSERT INTO venta_individual(producto,fecha_venta,venta_gral) VALUES('$arreglo','$fecha_sistema','$codigo')";
        // $resultado= $conn->query($sql);

        $sqlInsertSecundarios ="INSERT INTO invitados_secundarios (apellido_p,apellido_m,nombre,celular,email) VALUES('$apellido_p','$apellido_m','$nombre','$celular','$email')";
        $resultadosqlInsertSecundarios = $conn->query($sqlInsertSecundarios);
    
    } 

    // $sqlInsert ="INSERT INTO invitados_secundarios (apellido_p,apellido_m,nombre,celular,email) VALUES('$apellido_p','$apellido_m','$nombre','$celular','$email')";
    // $resultadosqlInsert = $conn->query($sqlInsert);

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