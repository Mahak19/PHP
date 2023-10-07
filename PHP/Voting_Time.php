<?php
$age=20;
$sage=$age-18;
$rage=18-$age;
if ($age>=18 || $sage>=18)
		echo("Eligible for voting since ".$sage." years");
	else
		echo("Not eligible for voting and remaining years are ".$rage);	
?>