<?php
    include('qconn/qc.php');

    $sqlQuerySecondary ="SELECT * FROM invitados WHERE invitado_eje = '$idSecondary' AND id_evento = '$idEvent' AND tipo_invitado = '2'";
    $resultadosqlQuerySecondary = $conn->query($sqlQuerySecondary);

?>