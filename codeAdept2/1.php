<?php
session_start();
$x=$_SESSION['q2'];
$question="Q2-The Wrapping up of data and functions with a single unit(called class) is known as-";
$a="Abstraction";
$b="Encapsulation";
$c="Object";
$d="Polymorphism";
echo '<p>'.$question.'</p>
	
	<input type="radio" name="1" value="A" id="A">'.$a.'<br><br>
	<input type="radio" name="1" value="B" id="B">'.$b.'<br><br>
	<input type="radio" name="1" value="C" id="C">'.$c.'<br><br>
	<input type="radio" name="1" value="D" id="D">'.$d.'<br><br>
	<input type="submit" value="Next" onclick="next()"><br><br>
	<input type="submit" value="Previous" onclick="prev()">
	<p id="choosen">'.$x.'</p>
	
';


?>