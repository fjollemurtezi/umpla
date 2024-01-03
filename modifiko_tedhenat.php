<?php

    include("verifiko.php");
?>
<?php

include_once("konfig.php");

$rezultati = mysqli_query($lidhe,"SELECT * FROM tedhenat");
?>

<!DOCTYPE HTML>
<html>

<head>
		<title>Moduli Administratorit</title>
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
            <p style="text-align:right;">Përshëndetje, <em><?php echo $perdoruesiIkycur; ?>!</em></p>
			<div class="spotlight">
			 <div class="content">
			 <div class="row">
			 <div class="col-12 col-12-medium">
			    <form action="" method="post">
				  <table>
				    <tr>
					<h3>Kërko të dhënat për modifikim</h3>
                    </tr>
                    <tr>
                    <td>Shkruaj:</td>
                    <td><input type="text" name="term" placeholder="Titulli ose pamja ne faqe" value="%"/></td>
                    <td><input type="submit" value="Kërko" /></td></tr>
                   </table>
                   <table>
                    <tr>
                     <td>Titulli</td>
                     <td>Pershkrimi</td>
                     <td>Emri i Skedarit</td>
                     <td>Pamja ne faqe</td>
                     <td>Modifiko</td></tr>

                     <?php
                       if (!empty($_REQUEST['term'])) {
                       $term = mysqli_real_escape_string($lidhe, $_REQUEST['term']);

                                            $sql = mysqli_query($lidhe,"SELECT * FROM tedhenat WHERE Titulli LIKE '%".$term."%' OR Pamja_faqes LIKE '%".$term."%' ORDER BY ID_edhena DESC");

                                            while ($rreshti = mysqli_fetch_array($sql)) {
                                                echo "<tr>";
                                                echo "<td>".$rreshti['Titulli']."</td>";
                                                echo "<td>".$rreshti['Pershkrimi']."</td>";
                                                echo "<td>".$rreshti['Skedari']."</td>";
                                                echo "<td>".$rreshti['Pamja_faqes']."</td>";
                                                echo "<td><a href=\"perditeso_tedhena.php?ID_edhena=$rreshti[ID_edhena]\" class='button' class='button primary'>Modifiko</a></td></tr>";
                                            }
                                        }
                                        ?>
                                    </table>
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