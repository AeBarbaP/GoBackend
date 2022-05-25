<?php
include('qconn/qc.php');

$sqlQuery = "SELECT * FROM invitados WHERE id_evento = '$idEvent'";
$resultadosqlQuery = $conn->query($sqlQuery);