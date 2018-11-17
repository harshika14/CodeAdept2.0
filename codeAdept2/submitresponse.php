<?php
require 'connect.inc.php';
session_start();
$user=$_SESSION['username'];
$a=$_SESSION['q1'];
$b=$_SESSION['q2'];
$c=$_SESSION['q3'];
$d=$_SESSION['q4'];
$e=$_SESSION['q5'];
$f=$_SESSION['q6'];
$g=$_SESSION['q7'];
$h=$_SESSION['q8'];
$i=$_SESSION['q9'];
$j=$_SESSION['q10'];
$count=0;
if($a=='B')
{
	$count++;
}
if($b=='B')
{
	$count++;	
}
if($c=='C')
{
		$count++;}
if($d=='B')
{
		$count++;}
if($e=='B')
{
		$count++;}
if($f=='C')
{
		$count++;}
if($g=='D')
{
		$count++;}
if($h=='B')
{
		$count++;}
if($i=='B')
{
		$count++;}
if($j=='D')
{
		$count++;}
$query="INSERT INTO `user_answers` (`user_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `score`) VALUES ('$user', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$count')";
if(mysqli_query($conn,$query))
{
	
	session_destroy();
	echo "<script>window.open('login.html','_self');</script>";
}
else
{
	
	session_destroy();
	echo "<script>window.open('login.html','_self');</script>";
}

?>