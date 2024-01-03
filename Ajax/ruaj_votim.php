<?php
    session_start();
    require("dbKontroller.php");
	$dbKontroller = new DBController();
	
	$pergjigja_id  = $_POST['pergjigja'];
	$pyetja_id = $_POST['pyetja'];
	
	$query = "INSERT INTO tbl_votimi(pyetja_id,pergjigja_id,votuesi_id) VALUES ('" . $pyetja_id ."','" . $pergjigja_id . "','" . $_SESSION["votuesi_id"] . "')";
    $shto_id = $dbKontroller->insertQuery($query);
    
    if(!empty($shto_id)) {
        $query = "SELECT * FROM tbl_pergjigje WHERE pyetja_id = " . $pyetja_id;
        $pergjigja = $dbKontroller->runQuery($query);
    }
    
    if(!empty($pergjigja)) {
?>        
        <div class="poll-heading"> Rezultati </div> 
<?php
        $query = "SELECT count(pergjigja_id) as numerimi_gjithsej FROM tbl_votimi WHERE pyetja_id = " . $pyetja_id;
        $vleresimi_gjithsej = $dbKontroller->runQuery($query);

        foreach($pergjigja as $k=>$v) {
            $query = "SELECT count(pergjigja_id) as numerimi_pergjigjeve FROM tbl_votimi WHERE pyetja_id = " .$pyetja_id . " AND pergjigja_id = " . $pergjigja[$k]["id"];
            $vleresimi_pergjigjeve = $dbKontroller->runQuery($query);
            $numerimi_pergjigjeve = 0;
            if(!empty($vleresimi_pergjigjeve)) {
                $numerimi_pergjigjeve = $vleresimi_pergjigjeve[0]["numerimi_pergjigjeve"];
            }
            $perqindja = 0;
            if(!empty($vleresimi_gjithsej)) {
                $perqindja = ( $numerimi_pergjigjeve / $vleresimi_gjithsej[0]["numerimi_gjithsej"] ) * 100;
                if(is_float($perqindja)) {
                    $perqindja = number_format($perqindja,2);
                }
            }
            
?>
		<div class="answer-rating"> <span class="answer-text"><?php echo $pergjigja[$k]["pergjigja"]; ?></span><span class="answer-count"> <?php echo $perqindja . "%"; ?></span></div>      
<?php 
        }
    }
?>
<div class="poll-bottom">
	<button class="next-link" onClick="show_poll();">Vazhdo</button>
</div>
