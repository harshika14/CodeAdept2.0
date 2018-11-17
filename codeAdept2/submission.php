<?php
require 'connect.inc.php';
session_start();
	
if(isset($_POST['0']))
{
	$_SESSION['q1']=$_POST['0'];
	
}
if(isset($_POST['1']))
{
	$_SESSION['q2']=$_POST['1'];
	
}
if(isset($_POST['2']))
{
	$_SESSION['q3']=$_POST['2'];

}
if(isset($_POST['3']))
{
	$_SESSION['q4']=$_POST['3'];
	
}
if(isset($_POST['4']))
{
	$_SESSION['q5']=$_POST['4'];
	
}
if(isset($_POST['5']))
{
	$_SESSION['q6']=$_POST['5'];
}
if(isset($_POST['6']))
{
	$_SESSION['q7']=$_POST['6'];
}
if(isset($_POST['7']))
{
	$_SESSION['q8']=$_POST['7'];
}
if(isset($_POST['8']))
{
	$_SESSION['q9']=$_POST['8'];
}
if(isset($_POST['9']))
{
	$_SESSION['q10']=$_POST['9'];
}




?>