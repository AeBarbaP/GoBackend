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

    $id_eje = $_POST['id'];
    $id_event = $_POST['id_event'];
    $nombre = $_POST['nombre'];
    $apellido_p = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $tipo_inv = 2;
    
// echo $id_event;
// echo $nombre;

foreach($nombre as $key => $arreglo)
{
    // $resta = $resta - 1;
/*     $nombre = $talla[$key]; */
    $apellido_pat = $apellido_p[$key];
    $apellido_mat = $apellido_m[$key];

    $sql = "INSERT INTO invitados(nombre,apellido_p,apellido_m,id_eje,tipo_inv) VALUES('$arreglo','$apellido_pat','$apellido_mat','$id_event','$id_eje','$tipo_inv')";
    $resultado= $conn->query($sql);
    
}

    // if($resultadosql){
        echo "<script type=\"text/javascript\">
        Swal.fire({
            icon: 'success',
            title: 'Acompañante Agregado',
            text: 'Se agregó acompañante con éxito',
            footer: 'Desarrollado por: Click&Go</a>'
        }).then(function(){window.location='../home_events.php?id=".$id_event."';});</script>";
        // }
        // else{
        // echo 'No se registró la actividad';
        // }


?>

</html>