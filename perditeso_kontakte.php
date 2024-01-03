<?php
    include("verifiko.php");
?>
<?php
    include_once("konfig.php");

    if(isset($_POST['perditeso_kontakte']))
{
    $ID_kontakti = $_POST['ID_kontakti'];

    $Subjekti =$_POST['Subjekti'];
    $Mesazhi = $_POST['Mesazhi'];
    $Email = $_POST['Email'];


        if(empty($Subjekti) || empty($Mesazhi) || empty($Email) ) {

            if(empty($Subjekti)) {
                echo "<font color='red'>Ploteso fushen Subjekti.</font><br/>";
        }

        if(empty($Mesazhi)) {
                echo "<font color='red'>Ploteso fushen Mesazhi.</font><br/>";
        }
    if(empty($Email)) {
                echo "<font color='red'>Ploteso fushen Email.</font><br/>";
        }
    } else {
        $rezultati = mysqli_query($lidhe, "UPDATE kontakti SET Subjekti='$Subjekti', Mesazhi='$Mesazhi', Email='$Email' WHERE ID_kontakti=$ID_kontakti");
   
        header("Location: menaxho_kontakt.php");
    }
}

?>
<?php

$ID_kontakti = $_GET['ID_kontakti'];

$rezultati = mysqli_query($lidhe, "SELECT * FROM kontakti WHERE ID_kontakti=$ID_kontakti");

while($rezult = mysqli_fetch_array($rezultati))
{
    $Subjekti = $rezult['Subjekti'];
    $Mesazhi = $rezult['Mesazhi'];
    $Email = $rezult['Email'];
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
        <div class="spotlight">
		  <div class="content">

<h3>Modifiko të dhënat e Kontaktit</h3>
          <form method="post" action="perditeso_kontakte.php">
        <div class="row">
        <div class="col-6 col-12-xsmall">
                            Subjekti
                            <input type="text" name="Subjekti" value='<?php echo $Subjekti;?>'   required />
</div><br>
							<div class="col-6 col-12-xsmall">
                            Email
                            <input type="text" name="Email" value='<?php echo $Email;?>'   required />
						</div>
							<div class="col-12 col-12-xsmall">
							<br>
							Mesazhi
                            <textarea name="Mesazhi"  rows="6"> <?php echo $Mesazhi; ?></textarea>
</div>
							
							<div class="col-12">
							<ul class="actions">
			<li><input type="hidden" name="ID_kontakti" value='<?php echo $_GET['ID_kontakti'];?>' /></br>
                            <input type="submit" name="perditeso_kontakte" value="Modifiko"></li></ul>
</div>
           
</div>
		</div>
	 </form>
        </div>
        </div>
    </section>
	</div>
    <!-- Footer -->
    <?php include("fundi_faqes.php"); ?>
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