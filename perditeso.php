<?php
include("verifiko.php");
?>
<?php
include_once("konfig.php");
if(isset($_POST['perditeso']))
{
    $ID_perdoruesi_umpla=$_POST['ID_perdoruesi_umpla'];
    $perdoruesi_umpla=$_POST['perdoruesi_umpla'];
    $fjalekalimi_umpla=$_POST['fjalekalimi_umpla'];
    if(empty($perdoruesi_umpla) || empty($fjalekalimi_umpla)) {
        if(empty($perdoruesi_umpla)) {
            echo "<font color='red'>Fusha perdoruesi eshte e zbrazet.</font><br/>";

        }
        if(empty($fjalekalimi_umpla)){
            echo "<font color='red'>Fusha fjalekalimi eshte e zbrazet.</font><br/>";
		}
    }else {

        $rezultati = mysqli_query($lidhe, "UPDATE perdoruesit_umpla SET perdoruesi_umpla='$perdoruesi_umpla',fjalekalimi_umpla='$fjalekalimi_umpla' WHERE ID_perdoruesi_umpla=$ID_perdoruesi_umpla");
        header("Location: modifiko_perdorues.php");
    
    }
}
?>
<?php
$ID_perdoruesi_umpla=$_GET['ID_perdoruesi_umpla'];
$rezultati=mysqli_query($lidhe, "SELECT * FROM perdoruesit_umpla WHERE ID_perdoruesi_umpla=$ID_perdoruesi_umpla");

while($rezult = mysqli_fetch_array($rezultati))
{
    $perdoruesi_umpla = $rezult['perdoruesi_umpla'];
    $fjalekalimi_umpla = $rezult['fjalekalimi_umpla'];
}
?>
<!DOCTYPE html>
<html>
<head>
		<title>Moduli Administratorit</title>
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
    <section id="intro" class="main">
            <p style="text-align:right;">Përshëndetje, <em><?php echo $perdoruesiIkycur; ?>!</em></p>
		  <div class="spotlight">
		  <div class="content">
                        <div class="row">
                            <div class="col-12 col-12-medium">

    <!-- Form -->
                                    <form name="form1" method="post" action="perditeso.php">
												
                                    <h3>Modifiko te dhenat e perdoruesit</h3>
                                    
                                    Perdoruesi
                                    <input type="text" name="perdoruesi_umpla" value='<?php echo $perdoruesi_umpla;?>'  />											
									<br>
                                    Fjalekalimi
                                    <input type="text" name="fjalekalimi_umpla" value='<?php echo $fjalekalimi_umpla;?>'  />
                                    <br>
                                    <input type="hidden" name="ID_perdoruesi_umpla" value='<?php echo $_GET['ID_perdoruesi_umpla'];?>' />
                                    <input type="submit" name="perditeso" value="Modifiko">
                                        </form>		
                                        </div>
											
										
                            </div>
                        </div>
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