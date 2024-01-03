<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
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

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php include("fillimi_faqes.php"); ?>
                <!--Nav-->
				<?php include("meny.php"); ?>
				<!-- Main -->
					<div id="main">
							<section id="intro" class="main">
							 <p style="text-align:right;">Përshëndetje, <em><?php echo $perdoruesiIkycur; ?>!</em></p>
		  <div class="spotlight">
		  <div class="content">
                <div class="row">
                    <div class="col-12 col-12-medium">
							<h2>Shto te dhenat e piktures</h2>
							  <div class="table-wrapper">
                            <form enctype="multipart/form-data" action="shto_piktura.php" method="post">
                                <table> <!--style="width: 25%; border: 0;"-->
                                    <tr>
                                        <select name="ID_levizja_artistike_umpla">
                                            <option selected="selected">Zgjedh Levizjen Artistike</option>
                                            <?php
                                            $rezult = mysqli_query($lidhe, "SELECT * FROM levizjet_artistike_umpla");
                                            while($rreshti=$rezult->fetch_array())
                                            {
                                                ?>
                                                <option value="<?php echo $rreshti['ID_levizja_artistike_umpla']; ?>"><?php echo $rreshti['levizja_artistike_umpla']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select><br />
                                        </tr>
                                         <tr>
                                        <td>Piktura</td>
                                        <td><input type="text" name="piktura_umpla"></td>
                                    </tr>
                                    <tr>
                                        <td>Tipari i Piktures</td>
                                        <td><input type="text" name="tipari_piktures_umpla"></td>
                                    </tr>
                                    <tr>
                                    <td><input type="hidden" name="MAX_FILE_SIZE" value="60000000" /></td>
									<td><input name="userfile" type="file" /></td> 
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="submit" name="shto_piktura" value="Shto" class="primary"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>

														 <div class="row">
                            <div class="col-12 col-12-medium">
                                <form action="" method="post">
                                    <table>
                                        <tr>
                                            <h3>Kërko të dhënat e piktures për menaxhim</h3>
                                        </tr>
                                        <tr>
                                            <td>
                                                Shkruaj:
                                            </td>
                                            <td><input type="text" name="term" placeholder="Piktura" value="%"/></td>
                                            <td><input type="submit" value="Kërko" /></td>
                                        </tr>
                                    </table>
                                    <table width='100%' style="border:0;">
                                            <td>Piktura</td>											
											<td>Tipari </td>
											<td>Levizja Artistike</td>
											<td>Foto</td>
                                            <td>Emri i file-it</td>
											<td>Modifiko</td>
                                            <td>Fshije</td>
                                        </tr>
												
							
							      <?php
                                        if (!empty($_REQUEST['term'])) {

                                            $term = mysqli_real_escape_string($lidhe, $_REQUEST['term']);

                                            $sql = mysqli_query($lidhe,
                                                "SELECT
                                                    p.ID_piktura_umpla,
                                                    p.piktura_umpla,
                                                    p.tipari_piktures_umpla,
                                                    l.levizja_artistike_umpla,
                                                    p.foto,
                                                    p.emri
                                                FROM
                                                    pikturat_umpla p
                                                INNER JOIN 
                                                    levizjet_artistike_umpla l ON p.ID_levizja_artistike_umpla = l.ID_levizja_artistike_umpla
                                                WHERE
                                                    p.piktura_umpla LIKE '%".$term."%' OR p.tipari_piktures_umpla LIKE '%".$term."%'
                                                ORDER BY
                                                p.ID_piktura_umpla DESC"
                                            );

                                            while ($rreshti = mysqli_fetch_array($sql)) {
                                                echo "<tr>";
                                                echo "<td>".$rreshti['piktura_umpla']."</td>";
                                                echo "<td>".$rreshti['tipari_piktures_umpla']."</td>";
												echo "<td>".$rreshti['levizja_artistike_umpla']."</td>";
                                                echo "<td><img src=data:image/jpeg;base64,".base64_encode($rreshti['foto']) . " width='100' height='100'/></td>";
                                                echo "<td>".$rreshti['emri']."</td>";
                                                echo "<td><a href=\"perditeso_piktura.php?ID_piktura_umpla=$rreshti[ID_piktura_umpla]\" class='button' class='button primary'>Modifiko</a></td>";
                                                echo "<td><a href=\"fshije_piktura.php?ID_piktura_umpla=$rreshti[ID_piktura_umpla]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini pikturen?')\" class='button' class='button primary'>Fshijë</a></td>";
                                                echo "</tr>";
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
			</div>
							 <!-- Footer -->
    <?php include("fundi_faqes.php"); ?>


			</div>
			<!--/div-->

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