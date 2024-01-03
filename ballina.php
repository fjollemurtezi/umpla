<?php
include('verifiko.php');
?>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Moduli i Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
			<div id="wrapper">
					
				<!-- Header -->
					<?php include("fillimi_faqes.php"); ?>

				<!-- Nav -->
					<?php include("meny.php"); ?>

				<!-- Main -->
					<div id="main">
							<section id="intro" class="main">
							<p style="text-align:right;">Pershendetje, <em><?php echo $perdoruesiIkycur;?>!</em></p>
							<div class="spotlight">
							<div class="content">
								<header class="major">
										<h3>Menaxhimi i te dhenave te ballines</h3>
										</div>
										</div>
								</header>
								<ul class="features">
									<li>
										<a href="menaxho_levizjet_artistike.php" class="icon solid major style1 fa-palette"></a>
										<h3>Menaxho Levizjet Artistike</h3>
										<p>Forma per menaxhimin e Levizjeve Artistike ne uebaplikacion.</p>
									</li>
									<li>
										<a href="menaxhopikturat.php" class="icon solid major style2 fa-paint-brush"></a>
										<h3>Menaxho Pikturat</h3>
										<p>Forma per menaxhimin e Pikturave ne uebaplikacion.</p>
									</li>
									<li>
										<a href="modifiko_tedhenat.php" class="icon solid major style4 fa-layer-group"></a>
										<h3>Modifiko te dhenat</h3>
										<p>Forma per menaxhimin e te dhenave te uebaplikacionit.</p>
									</li>
								</ul>
									<a class="button" href="Ajax/index.php"> Voto </a>
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