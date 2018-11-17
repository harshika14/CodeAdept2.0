<?php
session_start();

$hh=$_SESSION['mytext'];
$x=$_SESSION['q1'];
$question="Q1-The process by which objects of one class can acquire the properties of objects of another class-";
$a="Abstraction";
$b="Inheritance";
$c="Polymorphism";
$d="None of These";
$fullQuestion='
	
	<p id="abc">'.$question.'</p>
	<input type="radio" name="0" value="A" id="A">'.$a.'<br><br>
	<input type="radio" name="0" value="B" id="B">'.$b.'<br><br>
	<input type="radio" name="0" value="C" id="C">'.$c.'<br><br>
	<input type="radio" name="0" value="D" id="D">'.$d.'<br><br>
	<input type="submit" value="Next" onclick="next()"><br><br>
	<p id="choosen">'.$x.'</p>

	<input type="hidden" id="mytext" value="'.$hh.'">
	';

echo $fullQuestion;

if(isset($_POST['options']))
{
	$selected_option=$_POST['options'];
	echo $selected_option;
}
?>

