 <?php
$servername = "localhost";
$username = "root";
$password = ""; /*1pN96VPI8TwaA30A */
$db='php_learning';


if($conn=mysqli_connect($servername,$username,$password)) 
{
	mysqli_select_db($conn,$db);
}
else
{
	die('Error in connecting to the DB');
}



?>
