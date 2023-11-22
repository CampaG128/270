<?php

include("db.php");

$id = $_REQUEST['id'];

$sentencia1 = "DELETE FROM alumno WHERE num_folio = '$id'";
$sentencia2 = "DELETE FROM domicilio WHERE num_folio = '$id'";
$sentencia3 = "DELETE FROM escolares WHERE num_folio = '$id'";
$sentencia4 = "DELETE FROM salud WHERE num_folio = '$id'";
$sentencia5 = "DELETE FROM tutor WHERE num_folio = '$id'";
$consultar1 = $db->query($sentencia1);
$consultar2 = $db->query($sentencia2);
$consultar3 = $db->query($sentencia3);
$consultar4 = $db->query($sentencia4);
$consultar5 = $db->query($sentencia5);

header("location: admin.php?num=1");

?>