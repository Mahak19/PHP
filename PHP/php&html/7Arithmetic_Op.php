<?php
	$a=$_POST['Value_1'];
	$b=$_POST['Value_2'];
	$o=$_POST['op'];
	if ($o=="add")		
		$ans=$a+$b;
		echo ("Addition is ".$ans);
	else if($o=='sub')
		echo("Subtraction is ".$a-$b);
	else
		echo("Enter correct");
?>