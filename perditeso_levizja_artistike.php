<?php
    include("verifiko.php");
?>
<?php
    include_once("konfig.php");

    if(isset($_POST['perditeso_levizja_artistike']))
{
    $ID_levizja_artistike_umpla = $_POST['ID_levizja_artistike_umpla'];

    $levizja_artistike_umpla =$_POST['levizja_artistike_umpla'];


        if(empty($levizja_artistike_umpla) ) {

            if(empty($levizja_artistike_umpla)) {
                echo "<font color='red'>Fusha Levizja Artistike eshte e zbrazet.</font><br/>";
        }
    } else {
        $rezultati = mysqli_query($lidhe, "UPDATE levizjet_artistike_umpla SET levizja_artistike_umpla='$levizja_artistike_umpla' WHERE ID_levizja_artistike_umpla=$ID_levizja_artistike_umpla");
   
        header("Location: menaxho_levizjet_artistike.php");
    }
}

?>
<?php

$ID_levizja_artistike_umpla = $_GET['ID_levizja_artistike_umpla'];

$rezultati = mysqli_query($lidhe, "SELECT * FROM levizjet_artistike_umpla WHERE ID_levizja_artistike_umpla=$ID_levizja_artistike_umpla");

while($rezult = mysqli_fetch_array($rezultati))
{
    $levizja_artistike_umpla = $rezult['levizja_artistike_umpla'];
}

?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
		<title>Moduli i Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php include("fillimi_faqes.php"); ?>

				<!-- Nav -->
					<?php include("meny.php"); ?>
                    <!-- Main -->
					<div id="main">

<!-- Introduction -->
    <section id="intro" class="main">
        <p style="text-align:right;">Pershendetje, <em><?php echo $perdoruesiIkycur;?>!</em></p>
        <div class="row">


            <form method="post" action="perditeso_levizja_artistike.php">

                    <h3>Modifiko të dhënat e Levizjes Artistike</h3>

        
                           Levizja Artistike
                            <input type="text" name="levizja_artistike_umpla" value='<?php echo $levizja_artistike_umpla;?>'   required />
                            <br>
                    
                            <input type="hidden" name="ID_levizja_artistike_umpla" value='<?php echo $_GET['ID_levizja_artistike_umpla'];?>' />
                            <input type="submit" name="perditeso_levizja_artistike" value="Modifiko">
                       
            </form>
		</div>
    </section>
	</div>
    <!-- Footer -->
    <?php include("Fundi.php"); ?>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>