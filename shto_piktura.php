<html>
	<head>
		<title>Moduli i Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">


<?php
// including the database connection file
include_once("konfig.php");

if (isset($_POST['shto_piktura'])) {
    $piktura_umpla = $_POST['piktura_umpla'];
    $tipari_piktures_umpla = $_POST['tipari_piktures_umpla'];
    $ID_levizja_artistike_umpla = $_POST['ID_levizja_artistike_umpla'];
    $foto = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $emri = $_FILES['userfile']['name'];

    // checking empty fields
    if (empty($piktura_umpla) || empty($tipari_piktures_umpla) || empty($ID_levizja_artistike_umpla)) {

        if (empty($piktura_umpla)) {
            echo "<font color='red'>Ju lutem plotesoni fushen Piktura.</font><br/>";
        }

        if (empty($tipari_piktures_umpla)) {
            echo "<font color='red'>Ju lutem plotesoni fushen Tipari Piktures.</font><br/>";
        }

        if (empty($ID_levizja_artistike_umpla)) {
            echo "<font color='red'>Ju lutem plotesoni fushen Levizja artistike.</font><br/>";
        }

        // link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Kthehu prapa.</a>";
    } else {
        // if all the fields are filled (not empty)

        // insert data into database
        $rezultati = mysqli_query($lidhe, "INSERT INTO pikturat_umpla(piktura_umpla, tipari_piktures_umpla, ID_levizja_artistike_umpla, foto, emri) VALUES('$piktura_umpla','$tipari_piktures_umpla','$ID_levizja_artistike_umpla','$foto', '$emri')");

        // display success message
        echo "<script>
            setTimeout(function(){
                window.location.href = 'menaxhopikturat.php';
            }, 3000);
        </script>";
        echo "<p><b>Te dhenat jane duke u regjistruar. ju lutem prisni 3 sekonda.</b></p>";
    }
}
?>
</body>
</html>