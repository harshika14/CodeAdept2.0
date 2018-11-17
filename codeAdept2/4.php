<?php
session_start();
$x=$_SESSION['q5'];
$question="Q5-Which operator is used in consoling output of c++ program";
$a="Increment operator";
$b="Insertion operator";
$c="Extraction operator";
$d="None of the above";
echo '<p>'.$question.'</p>
	
	<input type="radio" name="4" value="A" id="A">'.$a.'<br><br>
	<input type="radio" name="4" value="B" id="B">'.$b.'<br><br>
	<input type="radio" name="4" value="C" id="C">'.$c.'<br><br>
	<input type="radio" name="4" value="D" id="D">'.$d.'<br><br>
	<input type="submit" value="Next" onclick="next()"><br><br>
	<input type="submit" value="Previous" onclick="prev();">
	<p id="choosen">'.$x.'</p>
	
';


?>