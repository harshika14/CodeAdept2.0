<?php
require 'connect.inc.php';
session_start();
if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['hh']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$hh=$_POST['hh'];
	

	

	
	if(!empty($username)&&!empty($password)&&!empty($hh))
	{
		$query="SELECT username,password from user where username='$username' and password='$password'";
		$query_run=mysqli_query($conn,$query);
		$query_num_rows=mysqli_num_rows($query_run);



      if($query_num_rows==1)  
         { 
         	$_SESSION['username']=$username;
         	$_SESSION['mytext']=$hh;
         	echo '<script> window.open("index.html","_self")</script>';
         	
         	
     	 }
    else
    {
    	echo 'no users for this';
    }
    } 

}
?>		
<input type="hidden" id="mytext">
<a href="login.html">click here to try again</a>