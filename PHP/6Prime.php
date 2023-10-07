<?php
$n=1;
$c=1;
	for($i=2;$i<=10;$i++){
		if($n%2==0){
			$c++;
		}
	}
	if($c==0){
		echo("Prime");
	}else{
		echo("Not Prime");
	}
?>