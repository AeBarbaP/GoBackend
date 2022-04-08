<?php
    include('qconn/qc.php');

    $sqlQuery ="SELECT * FROM invitados";
    $resultadosqlQuery = $conn->query($sqlQuery);

?>