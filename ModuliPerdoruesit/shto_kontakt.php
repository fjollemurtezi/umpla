<html>
<head>
	<title>Moduli i Perdoruesit</title>
			<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
</head>
<body>
<?php
//including the database connection file
include_once("konfig.php");

if(isset($_POST['shto_kontakt'])) {	
	$Subjekti = $_POST['Subjekti'];
	$Mesazhi = $_POST['Mesazhi'];
	$Email = $_POST['Email'];
		
	// checking empty fields
	if(empty($Subjekti) || empty($Mesazhi) || empty($Email)) {			
		if(empty($Subjekti)) {echo "<font color='red'>Plotesoni fushen Subjekti.</font><br/>";}
		if(empty($Mesazhi)) {echo "<font color='red'>Plotesoni fushen Mesazhi.</font><br/>";}
		if(empty($Email)) {echo "<font color='red'>Plotesoni fushen Email.</font><br/>";}
		//link to the previous Mesazhi
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidhe, "INSERT INTO kontakti(Subjekti,Mesazhi,Email) VALUES('$Subjekti','$Mesazhi','$Email')");
		//display success messMesazhi
	//	echo "<font color='green'>Te dhenat u shtuan me sukses.";
		//echo "<br/><a href='kontakti.php'>Shfaq rezultatet</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 3000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>
