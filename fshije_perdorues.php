<?php
    include("verifiko.php");
?>
<?php

include_once("konfig.php");

$rezultati = mysqli_query($lidhe, "SELECT * FROM perdoruesit_umpla");
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
					<div id="main">
							<section id="intro" class="main">
							  <p style="text-align:right;">Pershendetje, <em><?php echo $perdoruesiIkycur;?>!</em></p>
							  <div class="content">
							  <div class="row">
										<div class="table-wrapper">
										 <form action="" method="post"> 
									      <table><tr>
										   <h3> Kerko te dhenat e perdoruesit per fshirje</h3></tr>
	                                       <td>Shkruaj:</td>
	                                       <td>
	                                         <input type="text" name="term" placeholder="Perdoruesi" value="%"/>
											<td> <input type="submit" value="Kërko" /></td>			 
                                           <!--butonat sjon mir as ktu as te menaxhoPikturat-->
										  </table>
										   
										
										<table>
									
	                                          <div class="table-wrapper">
											  <tr>
		                                         <td>Perdoruesi</td>
		                                         <td>Fjalekalimi</td>	
												 <td>Fshije</td>
											   </tr>
<?php
if(!empty($_REQUEST['term'])) {
    $term = mysqli_real_escape_string($lidhe,$_REQUEST['term']);
    $sql = mysqli_query($lidhe, "SELECT * FROM perdoruesit_umpla WHERE perdoruesi_umpla LIKE '%".$term."%' ORDER BY ID_perdoruesi_umpla DESC");

    while($rreshti = mysqli_fetch_array($sql)) {
        echo "<tr>";
        echo "<td>".$rreshti['perdoruesi_umpla']."</td>";
        echo "<td>".$rreshti['fjalekalimi_umpla']."</td>";
        echo "<td><a href=\"fshije.php?ID_perdoruesi_umpla=$rreshti[ID_perdoruesi_umpla]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini perdoruesin?')\" class='button' class='button primary'>Fshije</a></td></tr>";	
    }
}
?>
										</div>
</table>
</div>
</section>
</div>
</div>
</div>
               <!-- Footer-->
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