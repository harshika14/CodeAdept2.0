<?php
session_start();
$x=$_SESSION['q9'];
$question="Q9-Which of the following is the technique of communication between Objects";
$a="Early Binding";
$b="Message Passing";
$c="Inheritance";
$d="None of the above";
echo '<p>'.$question.'</p>
	
	<input type="radio" name="8" value="A" id="A">'.$a.'<br><br>
	<input type="radio" name="8" value="B" id="B">'.$b.'<br><br>
	<input type="radio" name="8" value="C" id="C">'.$c.'<br><br>
	<input type="radio" name="8" value="D" id="D">'.$d.'<br><br>
	<input type="submit" value="Next" onclick="next()"><br><br>
	<input type="submit" value="Previous" onclick="prev();">
	<p id="choosen">'.$x.'</p>

	
';


?>