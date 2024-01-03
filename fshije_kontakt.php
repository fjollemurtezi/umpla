<?php
include("konfig.php");

$ID_kontakti = $_GET['ID_kontakti'];

$rezultati = mysqli_query($lidhe,"DELETE FROM kontakti WHERE ID_kontakti=$ID_kontakti");

header("Location:menaxho_kontakt.php");
?>

