<?php
    include("verifiko.php");
?>
<?php

include_once("konfig.php");

$rezultati = mysqli_query($lidhe, "SELECT * FROM kontakti");
?>

<!DOCTYPE html>
<html>
<head>
		<title>Menaxhimi i kontakteve</title>
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
            <div class="content">
                <div class="row">

                <div class="table-wrapper">

                    <form action="" method="post">
                            <table>
	                         <tr>
                             <h3>Menaxhimi i te dhenave te kontaktit</h3></tr>
	                         <tr>
							 <td>Shkruaj:</td>
							 <td>
							 <input type="text" name="term" placeholder="Subjektin ose Email-in" value="%"/>
							 </td>
							 <td> <input type="submit" value="Kërko" /></td>
							 </tr>
							</table>
                    </form>						 
			    </div>
                </div>

                      <div class="table-wrapper">
					  <table>
					  <tr>
                       <td>Subjekti</td>
                       <td>Mesazhi</td>
                       <td>Email-i</td>
                       <td>Modifiko</td>
                       <td>Fshije</td></tr> 
<?php
if(!empty($_REQUEST['term'])) {
    $term = mysqli_real_escape_string($lidhe,$_REQUEST['term']);
    $sql = mysqli_query($lidhe, "SELECT * FROM kontakti WHERE Subjekti LIKE '%".$term."%' OR Email LIKE '%".$term."%' ORDER BY ID_kontakti DESC");

    while($rreshti = mysqli_fetch_array($sql)) {
        echo "<tr>";
        echo "<td>".$rreshti['Subjekti']."</td>";
        echo "<td>".$rreshti['Mesazhi']."</td>";
        echo "<td>".$rreshti['Email']."</td>";
        echo "<td><a href=\"perditeso_kontakte.php?ID_kontakti=$rreshti[ID_kontakti]\" class='button' class='button primary'>Modifiko</a></td>";
        echo "<td><a href=\"fshije_kontakt.php?ID_kontakti=$rreshti[ID_kontakti]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini mesazhin?')\" class='button' class='button primary'>Fshije</a></td></tr>";
    }
}
?>
</div>
</table>
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