<?php
    include('qconn/qc.php');

    $sqlQuerySecondary ="SELECT * FROM invitados_secundarios WHERE clave_ext = '$id'";
    $resultadosqlQuerySecondary = $conn->query($sqlQuerySecondary);

?>