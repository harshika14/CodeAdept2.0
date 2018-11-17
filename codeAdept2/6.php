<?php
session_start();
$x=$_SESSION['q7'];
$question="Q7-Which extension cannot be used by  source file of c++ ";
$a=".c";
$b=".cxx";
$c=".cpp";
$d="None of the above";
echo '<p>'.$question.'</p>
	
	<input type="radio" name="6" value="A" id="A">'.$a.'<br><br>
	<input type="radio" name="6" value="B" id="B">'.$b.'<br><br>
	<input type="radio" name="6" value="C" id="C">'.$c.'<br><br>
	<input type="radio" name="6" value="D" id="D">'.$d.'<br><br>
	<input type="submit" value="Next" onclick="next()"><br><br>
	<input type="submit" value="Previous" onclick="prev();">
	<p id="choosen">'.$x.'</p>
	
';


?>