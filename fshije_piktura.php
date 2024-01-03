<?php

include("konfig.php");

$ID_piktura_umpla = $_GET['ID_piktura_umpla'];

$rezultati = mysqli_query($lidhe, "DELETE FROM pikturat_umpla WHERE ID_piktura_umpla=$ID_piktura_umpla");

header("Location:menaxhopikturat.php");
?>
