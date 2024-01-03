<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php 
    include_once("konfig.php");
?>
<html>
	<head>
		<title>Moduli i Perdoruesit</title>
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
					<div class="container">
						<?php 
							$rezultati = mysqli_query($lidhe, "SELECT l.levizja_artistike_umpla,p.piktura_umpla,p.tipari_piktures_umpla,p.foto,p.emri FROM pikturat_umpla p
								LEFT OUTER JOIN levizjet_artistike_umpla l ON p.ID_levizja_artistike_umpla = l.ID_levizja_artistike_umpla
								GROUP BY l.levizja_artistike_umpla,p.piktura_umpla,p.tipari_piktures_umpla,p.foto,p.emri
								ORDER BY l.ID_levizja_artistike_umpla, p.ID_piktura_umpla DESC");
							
							while ($rreshti = mysqli_fetch_assoc($rezultati)) {
								extract($rreshti);

								if ($rezultati == null) {
									mysqli_free_result($rezultati);
								}
						?>

						<div class="row">
							<div class="col-6">
								<span class="image fit">
									<?php echo '<img style="width: 106%;" src="data:image/jpeg;base64,'.base64_encode($rreshti['foto']).'"/>'; ?>
								</span>
							</div>
							<div class="col-4"><br>
								<p style="text-align: center;font-size:">
									Piktura: <strong><?php echo $piktura_umpla; ?></strong><br>
									Tipari i piktures: <strong><?php echo $tipari_piktures_umpla; ?></strong><br>
									Levizja artistike: <b><?php echo $levizja_artistike_umpla; ?></b>
								</p>
							</div>
						</div>

						<?php } ?>
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
