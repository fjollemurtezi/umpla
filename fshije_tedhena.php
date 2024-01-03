<?php
//including the database connection file
include("konfig.php");

//getting uid of the data from url
$ID_tedhenat = $_GET['ID_tedhenat'];

//deleting the row from table
$rezultati = mysqli_query($conn,"DELETE FROM tedhenat WHERE ID_tedhenat=$ID_tedhenat");

//redirecting to the display page (index.php in our case)
header("Location:fshije_tedhena.php");
?>

