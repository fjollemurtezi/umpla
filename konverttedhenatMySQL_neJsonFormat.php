<?php
$dbhost ="localhost";
$dbperdoruesi = "root";
$dbfjalekalimi = "";
$dbemri ="umpla";
//connect to database
$conn = @mysqli_connect($dbhost, $dbperdoruesi, $dbfjalekalimi, $dbemri) or die("Lidhja me databaze deshtoi.");
//get the data from table Data_ahome
$query = "SELECT ahome FROM Data_ahome";
//execute the query
$rezultati = mysqli_query($conn, $query);
if(!$rezultati){ echo "Query nuk u ekzekutua"; die();}
else{
 //creates an empty array to hold data
 $edhena = array();
  while($rreshti = mysqli_fetch_assoc($rezultati)){
    $edhena[]=$rreshti;
  }
//  echo json_encode($data, JSON_PRETTY_PRINT);
//it will create file results.json with writing mode.
//you can read more about file handling in PHP here. 
$fp = fopen('test.json', 'w');
//json_enconde($array, $options(optional) is the method to convert array into JSON
fwrite($fp, json_encode($edhena, JSON_PRETTY_PRINT));
echo "Skedari u krijua";
//close the file
fclose($fp);
}
?>