<?php
	$a=$_POST['age'];
	if ($a>18){
		echo"Eligible for voting";
	}
	else
	{		
		echo"not eligible";	
	}
?>