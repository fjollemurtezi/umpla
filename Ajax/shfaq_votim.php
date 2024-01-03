<html>
<head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />

		
<?php
include('../konfig.php');
session_start();
$verifiko_perdoruesin=$_SESSION['perdoruesi_umpla'];
$ses_sql = mysqli_query($lidhe,"SELECT ID_perdoruesi_umpla, perdoruesi_umpla FROM perdoruesit_umpla WHERE perdoruesi_umpla='$verifiko_perdoruesin' ");
$rreshti=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$perdoruesiIkycur=$rreshti['perdoruesi_umpla'];
if(!isset($verifiko_perdoruesin))
{ header("Location: index.php");} 

	
    $_SESSION["votuesi_id"] =  $rreshti['ID_perdoruesi_umpla'];
    
	require("dbKontroller.php");
	$dbKontroller = new DBController();
	
	$query = "SELECT DISTINCT pyetja_id from tbl_votimi WHERE votuesi_id = " . $_SESSION["votuesi_id"]; 
	$rezultati = $dbKontroller->getIds($query);
	
	$kushti = "";
	if(!empty($rezultati)) {
	    $kushti = " WHERE id NOT IN (" . implode(",", $rezultati) . ")";
    }
    
    $query = "SELECT * FROM `tbl_pyetje` " . $kushti . " limit 1";
    $pyetjet = $dbKontroller->runQuery($query);
    
    if(!empty($pyetjet)) {
?>      
		<div class="question"><?php echo $pyetjet[0]["pyetja"]; ?><input type="hidden" name="pyetja" id="question" value="<?php echo $pyetjet[0]["id"]; ?>" ></div>      
<?php 
        $query = "SELECT * FROM tbl_pergjigje WHERE pyetja_id = " . $pyetjet[0]["id"];
        $pergjigjet = $dbKontroller->runQuery($query);
        if(!empty($pergjigjet)) {
            foreach($pergjigjet as $k=>$v) {
                ?>
			<div class="question"><input type="radio" name="pergjigja" class="radio-input" value="<?php echo $pergjigjet[$k]["id"]; ?>" /><?php echo $pergjigjet[$k]["pergjigja"]; ?></div>      
<?php 
            }
        }
?>
		<div class="poll-bottom">
			<button id="btnSubmit" onClick="addPoll()">Dergo</button>
		</div>
<?php        
    } else {
?>

<div class="error">Votimi perfundoi me sukses!</div>


<?php 
    }
?>