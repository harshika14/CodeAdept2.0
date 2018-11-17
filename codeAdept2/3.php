<?php
session_start();
$x=$_SESSION['q4'];
$question="Q4-Which of the following is runtime entity of OOPM-";
$a="Class";
$b="Object";
$c="Member Functions";
$d="None of the above";
echo '<p>'.$question.'</p>
	
	<input type="radio" name="3" value="A" id="A">'.$a.'<br><br>
	<input type="radio" name="3" value="B" id="B">'.$b.'<br><br>
	<input type="radio" name="3" value="C" id="C">'.$c.'<br><br>
	<input type="radio" name="3" value="D" id="D">'.$d.'<br><br>
	<input type="submit" value="Next" onclick="next()"><br><br>
	<input type="submit" value="Previous" onclick="prev()">
	<p id="choosen">'.$x.'</p>
	
';


?>