<?php
class DBController {
	private $host = "localhost";
	private $perdoruesi = "root";
	private $fjalekalimi = "";
	private $databaza = "umpla";
	private $lidhe;
	
	function __construct() {
		$this->lidhe = $this->connectDB();
	}
	
	function connectDB() {
		$lidhe = mysqli_connect($this->host,$this->perdoruesi,$this->fjalekalimi,$this->databaza);
		return $lidhe;
	}
	
	function runQuery($query) {
		$rezultati = mysqli_query($this->lidhe,$query);
		while($rreshti=mysqli_fetch_array($rezultati)) {
			$vendosrezult[] = $rreshti;
		}
		if(!empty($vendosrezult))
			return $vendosrezult;
	}
	
	function insertQuery($query) {
	    mysqli_query($this->lidhe, $query);
	    $shto_id = mysqli_insert_id($this->lidhe);
	    return $shto_id;
	}
	
	function getIds($query) {
	    $rezultati = mysqli_query($this->lidhe,$query);
	    while($rreshti=mysqli_fetch_array($rezultati)) {
	        $vendosrezult[] = $rreshti[0];
	    }
	    if(!empty($vendosrezult))
	        return $vendosrezult;
	}
}
?>