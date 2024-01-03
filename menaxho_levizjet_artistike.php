<?php

    include("verifiko.php");
?>

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
                                    <section>
										<h2>Shto te dhenat e Levizjes Artistike</h2>
										<form method="post" action="shto_levizje_artistike.php">
											<div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
													<input type="text" name="levizja_artistike" id="levizja_artistike" value="" placeholder="Levizja Artistike" />
												</div>
												<div class="col-6">
													<ul class="actions">
														<li><input type="submit" name="shto_levizje_artistike" value="Shto" class="primary" /></li>														
													</ul>
												</div>
											</div>
										</form>
                                        <br>
									       <form action="" method="post">  
                                             <br>
                                             <br>
                                               <table>
                                                <tr>
												<h3>Kërko të dhënat e Levizjes Artistike për modifikim ose fshirje</h3>
                                                </tr>
                                                 <tr>
												 <td>Shkruaj:</td>
                                                 <td>
												 <input type="text" name="term" placeholder="LevizjaArtistike" value="%"/>
                                                 </td>
                                                 <td> <input type="submit" value="Kërko" /></td>
                                                 </tr>
                                            </table> 
                                        </div>
                                        </div>
                                    </form> 
                                    <div class="table-wrapper">
                                     <table>
	                                   <div class="table-wrapper">
	                                   <tr>
	                                 	<td>Levizja Artistike</td>
		                                <td>Modifiko</td>
		                                <td>Fshije</td>
	                                   </tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string($lidhe,$_REQUEST['term']);     
$sql = mysqli_query($lidhe,"SELECT * FROM levizjet_artistike_umpla WHERE levizja_artistike_umpla LIKE '%".$term."%' ORDER BY ID_levizja_artistike_umpla DESC"); 
while($rreshti = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$rreshti['levizja_artistike_umpla']."</td>";
		echo "<td><a href=\"perditeso_levizja_artistike.php?ID_levizja_artistike_umpla=$rreshti[ID_levizja_artistike_umpla]\" class='button' class='button primary'>
Modifiko</a></td>";
echo "<td><a href=\"fshije_levizja_artistike.php?ID_levizja_artistike_umpla=$rreshti[ID_levizja_artistike_umpla]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini kete Levizje Artistike?')\" class='button' class='button primary'>Fshijë</a>
		</td></tr>";		
	}

}

?>
</div>
</table>
</div>
</section>
</section>
</div>
			<!--Footer-->                 
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