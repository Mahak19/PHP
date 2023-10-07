<?php
$t=0;
$n=153;
	$p=$n;
	for($i=1;$n!=0;$i++){
		$r=$n%10;
		$t=$t+($r*$r*$r);
		$n=$n/10;
	}
	if($p==$t){
		echo("Armstrong number");
	}
	else{
		echo("Not Armstrong");
	}
?>