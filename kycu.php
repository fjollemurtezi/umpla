<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese username dhe passwordi qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
session_start();
include("konfig.php"); // Establishing connection with our database

$error = ""; // Variable for storing our errors.
if (isset($_POST["submit"])) {
    if (empty($_POST["emri"]) || empty($_POST["fjalekalimi"])) {
        $error = "Te dy fushat duhet te plotesohen.";
    } else {
        // Define $username and $password
        $emri = $_POST['emri'];
        $fjalekalimi = $_POST['fjalekalimi'];
        // Check username and password from database
        $sql = "SELECT ID_perdoruesi_umpla FROM perdoruesit_umpla WHERE perdoruesi_umpla='$emri' 
        and fjalekalimi_umpla='$fjalekalimi'"; // Updated table and column names
        $rezultati = mysqli_query($lidhe, $sql);
        $rreshti = mysqli_fetch_array($rezultati, MYSQLI_ASSOC);
        // If username and password exist in our database then create a session.
        // Otherwise echo error.
        if (mysqli_num_rows($rezultati) == 1) {
            $_SESSION['perdoruesi_umpla'] = $emri; // Initializing Session with updated session variable
            header("location: ballina.php"); // Redirecting To Other Page
        } else {
            $error = "fjalekalimi ose perdoruesi eshte i dhene gabim.";
        }
    }
}
?>
