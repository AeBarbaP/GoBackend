<?php


$sqlEvent = "SELECT * FROM eventos WHERE id_organizador='$id' AND status = 1";
$sqlResultEvent = $conn->query($sqlEvent);
// $rowSqlEvent = "";
// while ($rowSqlEvent = $sqlResultEvent->fetch_assoc());


// function contarEventos(){
// $sqlEvent = "SELECT COUNT FROM invitados AS contarInv WHERE id_evento='$idEvento'";
// $sqlResultEvent = $conn->query($sqlEvent);

// }
// $num_invitados = contarEventos();