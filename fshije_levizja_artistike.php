<?php

include("konfig.php");

$ID_levizja_artistike = $_GET['ID_levizja_artistike_umpla'];

$rezultati = mysqli_query($lidhe,"DELETE FROM levizjet_artistike_umpla WHERE ID_levizja_artistike_umpla=$ID_levizja_artistike");

header("Location: menaxho_levizjet_artistike.php");
?>