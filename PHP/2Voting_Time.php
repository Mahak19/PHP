<?php
$age=2;

if ($age>=18) {
	$yr=$age-18;
	echo("Eligible for voting since ".$yr." years");
}
else {
		$yr=18-$age;
		echo("Not eligible for voting and remaining years are ".$yr);
	}

?>