<?php

$sqlEvent = "SELECT * FROM eventos WHERE id_organizador='$id' AND status_e = 1";
$sqlResultEvent = $conn->query($sqlEvent);
$sqlEvent_i = "SELECT * FROM eventos WHERE id_organizador='$id' AND status_e = 2";
$sqlResultEvent_i = $conn->query($sqlEvent_i);
$sqlEvent_c = "SELECT * FROM eventos WHERE id_organizador='$id' AND status_e = 3";
$sqlResultEvent_c = $conn->query($sqlEvent_c);
$sqlEvent_b = "SELECT * FROM eventos WHERE id_organizador='$id' AND status_e = 4";
$sqlResultEvent_b = $conn->query($sqlEvent_b);
$sqlEvent_f = "SELECT * FROM eventos WHERE id_organizador='$id' AND status_e = 5";
$sqlResultEvent_f = $conn->query($sqlEvent_f);

// status_e 1 = activos
//          2 = inactivos
//          3 = cancelados
//          4 = bloqueados
//          5 = finalizados

?>