<?php
	$a=$_POST['val1'];
	$b=$_POST['val2'];
	$ope=$_POST['op'];
	
	if ($ope == '+'){
		echo("addition is ".($a+$b));
	}
	else{
		echo("Incorrect");
	}
?>