<?php
session_start();
$x=$_SESSION['q6'];
$question="Q6-The directive <strong>#include iostream</strong> contains declaration for which identifiers";
$a="cout";
$b="Insertion operator";
$c="both a and b";
$d="None of the above";
echo '<p>'.$question.'</p>
	
	<input type="radio" name="5" value="A" id="A">'.$a.'<br><br>
	<input type="radio" name="5" value="B" id="B">'.$b.'<br><br>
	<input type="radio" name="5" value="C" id="C">'.$c.'<br><br>
	<input type="radio" name="5" value="D" id="D">'.$d.'<br><br>
	<input type="submit" value="Next" onclick="next()"><br><br>
	<input type="submit" value="Previous" onclick="prev();">
	<p id="choosen">'.$x.'</p>
';


?>