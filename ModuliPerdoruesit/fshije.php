<?php
//including the database connection file
include("../konfig.php");

//getting uid of the data from url
$ID_perdoruesi_umpla = $_GET['ID_perdoruesi_umpla'];

//deleting the row from table
$rezultati = mysqli_query($conn,"DELETE FROM perdoruesit_umpla WHERE ID_perdoruesi_umpla=$ID_perdoruesi_umpla");

//redirecting to the display page (index.php in our case)
header("Location:fshije_perdorues.php");
?>

