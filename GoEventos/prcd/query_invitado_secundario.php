<?php
    include('qconn/qc.php');

    $sqlQuerySecondary ="SELECT * FROM invitados WHERE invitado_eje = '$idSecondary' AND id_evento = '$idEvent'";
    $resultadosqlQuerySecondary = $conn->query($sqlQuerySecondary);

?>