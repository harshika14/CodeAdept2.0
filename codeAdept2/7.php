<?php
session_start();
$x=$_SESSION['q8'];
$question="Q8-Code associated with a given procedure is not known until the time of call at run-time.This is called as-";
$a="Early Binding";
$b="Dynamic Binding";
$c="Compilation";
$d="None of the above";
echo '<p>'.$question.'</p>
	
	<input type="radio" name="7" value="A" id="A">'.$a.'<br><br>
	<input type="radio" name="7" value="B" id="B">'.$b.'<br><br>
	<input type="radio" name="7" value="C" id="C">'.$c.'<br><br>
	<input type="radio" name="7" value="D" id="D">'.$d.'<br><br>
	<input type="submit" value="Next" onclick="next()"><br><br>
	<input type="submit" value="Previous" onclick="prev();">
	<p id="choosen">'.$x.'</p>
	
';


?>