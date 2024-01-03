<?php
	include("konfig.php");	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Moduli i Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
         <div id="wrapper">
		<!-- Header -->
			<?php include_once("fillimi_faqes.php"); ?>

		<!-- Nav -->
		<?php include_once("meny.php"); ?>



        <div id="main">
			<section id="intro" class="main"><div class="row">

									<h3>Dergo mesazh</h3>
          <form method="post" action="shto_kontakt.php">
        <div class="row">
        <div class="col-6 col-12-xsmall">
                            <input type="text" name="Subjekti" id="Subjekti" placeholder="Subjekti" />
</div><br>
							<div class="col-6 col-12-xsmall">
                            
                            <input type="email" name="Email" id="Email" placeholder="Email-i" />
						</div>
							<div class="col-12 col-12-xsmall">
							<br>
							
                            <textarea name="Mesazhi" id="Mesazhi" placeholder="Mesazhi" rows="6"> </textarea>
</div>
							
							<div class="col-12"><br>
							<ul class="actions">
                        <li><input type="submit" name="shto_kontakt" value="Dergo"></li></ul>
</div>
           
</div>
		</div>
	 </form>
									
								  
			</section>
			</div>
		<!-- Footer -->
					<?php include_once("fundi_faqes.php"); ?>

     	   </div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>