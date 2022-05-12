<?php
include('qconn/qc.php');

$sqlQuery = "SELECT * FROM organizadores";
$resultadosqlQuery = $conn->query($sqlQuery);