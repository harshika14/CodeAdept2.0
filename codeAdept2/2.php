<?php
session_start();
$x=$_SESSION['q3'];
$question="Q3-Which of the following is not an Object Oriented Programming Language";
$a="C++";
$b="Java";
$c="Cobol";
$d="None of the above";
echo '<p>'.$question.'</p>
	
	<input type="radio" name="2" value="A" id="A">'.$a.'<br><br>
	<input type="radio" name="2" value="B" id="B">'.$b.'<br><br>
	<input type="radio" name="2" value="C" id="C">'.$c.'<br><br>
	<input type="radio" name="2" value="D" id="D">'.$d.'<br><br>
	<input type="submit" value="Next" onclick="next()"><br><br>
	<input type="submit" value="Previous" onclick="prev()">
	<p id="choosen">'.$x.'</p>
	
';


?>