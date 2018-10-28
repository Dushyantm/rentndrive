
<?php
//CODE TO CONNECT PHP WITH DATABASE.
$hostname="localhost"; 		//hostname
$username="root"; 			//username for database
$password=""; 				//database password
$dbname="car_rental_sys"; 		//database name
$conn=mysqli_connect($hostname,$username,$password,$dbname) or die("Error Connecting"); 		//make connection
//$connect becomes the OBJECT/VARIABLE we’ll use to fire queries to database
?>