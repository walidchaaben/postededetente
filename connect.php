<?php
$dbname = 'sql11441893';
$dbuser = 'sql11441893';  
$dbpass = 'dg47e6hGNM'; 
$dbhost = 'sql11.freesqldatabase.com'; 
$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$connect){
	echo "Error: " .mysqli_connect_error();
	exit();
}
echo "Connection Success!<br><br>";
if (isset($_GET['rampeA'])) {    $rampeA = $_GET['rampeA'];}
if (isset($_GET['rampeB'])) {    $rampeB = $_GET['rampeB'];}
if (isset($_GET['rampeC'])) {    $rampeC = $_GET['rampeC'];}
if (isset($_GET['tempEau'])) {    $tempEau = $_GET['tempEau'];}
/*$rampeA = $_GET["rampeA"];
$rampeB = $_GET["rampeB"]; 
$rampeC = $_GET["rampeC"]; 
$tempEau = $_GET["tempEau"]; */
echo "rampe a= " .$rampeA ;
echo "<br>-------------------<br>";
echo "rampe b= " .$rampeB ;
echo "<br>-------------------<br>";
echo "rampe c= " .$rampeC;
echo "<br>-------------------<br>";
echo "temp eau= " .$tempEau ;
echo "<br>-------------------<br>";

$query = "INSERT INTO enregistrements(`rampe_a`, `rampe_b`, `rampe_c`, `temp_eau`,`date_mesure`) VALUES ('$rampeA', '$rampeB', '$rampeC', '$tempEau',NOW());";
//$queryy ="INSERT INTO `enregistrements` (`rampe_a`, `rampe_b`, `rampe_c`, `temp_eau`,`date_mesure`) VALUES ( '$rampeA', '$rampeB', '$rampeC', '200','2021-09-05 03:05:34');";
$result = mysqli_query($connect,$query);
echo "Insertion Success!<br>";
?>
