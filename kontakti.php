<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("verifiko.php");	
?>
<?php
//including the database connection file
include_once("konfig.php");

//fetching data in descending order (lastest entry first)
$rezultati = mysqli_query($conn,
"SELECT * FROM kontakti ORDER BY ID_kontakti DESC");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Fshirja e kontaktit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<?php include_once("fillimi_faqes.php"); ?>
		<?php include_once("meny.php"); ?>
		
		
			<section id="main" class="wrapper">
				<div class="inner">
				<p style="text-align:right;">Përshëndetje, <em><?php  echo $login_user;?>!</em></p>
				<div class="content">
					
						<div class="row">


	                     <div class="table-wrapper">							 <!--div class="row">
                            <div class="col-12 col-12-medium"-->
	                         <form action="" method="post">  
	                           <table>
                                        <tr>
                                            <h3>Menaxhimi i te dhenave per kontakt</h3>
                                        </tr>
                                        <tr>
                                            <td>
                                                Shkruaj:
                                            </td>
                                            <td><input type="text" name="term" placeholder="Subjekti apo Email-i" value="%"/></td>
                                            <td><input type="submit" value="Kërko" /></td>
                                      </tr>
                               </table> 
                          </div>
                        </div>
                             </form> 
                                   <div class="table-wrapper">
                                    <table width='80%' border=0>
	                                 <div class="table-wrapper">
	                                  <tr>
	                                  	<td>Subjekti</td>
	                                 	<td>Mesazhi</td>
	                                  	<td>Email-i</td>
	                                 	<td>Fshijë</td>
	                                   </tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn,
"SELECT * FROM kontakti 
WHERE Subjekti LIKE '%".$term."%' 
OR  Email LIKE '%".$term."%'"); 
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['Subjekti']."</td>";
		echo "<td>".$row['Mesazhi']."</td>";
		echo "<td>".$row['Email']."</td>";	
		echo "<td><a href=\"fshije_kontakt.php?ID_kontakti=$row[ID_kontakti]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini perdoruesin?')\" class='button' class='button primary'>Fshijë</a>
		</td></tr>";			
	}

}

?>
</div>
	</table>


						</div>
				</div>
			</section>

		<!-- Footer -->
	
           	<?php include_once("fundi_faqes.php"); ?>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>