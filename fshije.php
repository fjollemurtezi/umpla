<?php 
include("konfig.php");
$ID_perdoruesi_umpla = $_GET['ID_perdoruesi_umpla'];

$rezultati = mysqli_query($lidhe,"DELETE FROM perdoruesit_umpla WHERE ID_perdoruesi_umpla=$ID_perdoruesi_umpla");

header("Location:fshije_perdorues.php");
?>