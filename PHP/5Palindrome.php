<?php
$t=1;
$n=151;
	$q=$n;
	for($i=1;$q!=0;$i++){
		$r=$q%10;
		$t=$t*10+$r;
		$q=$q/10;
	}
	if($t==$n){
		echo("Palindrome number");
	}
	else{
		echo("Not Palindrome");
	}
?>