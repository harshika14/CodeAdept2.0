<?php
session_start();
$x=$_SESSION['q10'];
$question="Q10-Which of the following is not a platform of Java";
$a="Java SE";
$b='Java ME';
$c="Java EE";
$d="Java DE";
echo '<p>'.$question.'</p>
	
	<input type="radio" name="9" value="A" id="A">'.$a.'<br><br>
	<input type="radio" name="9" value="B" id="B">'.$b.'<br><br>
	<input type="radio" name="9" value="C" id="C">'.$c.'<br><br><br>
	<input type="radio" name="9" value="D" id="D">'.$d.'<br><br>
	<input type="submit" value="Save" onclick="next()"><br><br>
	<input type="submit" value="Previous" onclick="prev();">
	<p id="choosen">'.$x.'</p>

';


?>