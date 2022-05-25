<?php
include('qconn/qc.php');

$sqlQuery = "SELECT * FROM invitados WHERE id_evento = '$idEvent' AND tipo_invitado = 1";
$resultadosqlQuery = $conn->query($sqlQuery);