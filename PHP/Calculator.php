<?php
$num1=20;
$num2=10;
$op="/";
/*if ($op=='+'){
	echo("+");
}elseif ($op=='-'){
	echo("-");
}elseif ($op=='*'){
	echo("*");
}elseif ($op=='/'){
	echo("/");
}else {
	echo("Enter correct op");
}*/
switch($op){
	case "+":
		$ans=$num1+$num2;
		echo("Addition is ".$ans);
		break;
	case "-":
		$ans=$num1-$num2;
		echo("Subratiction is ".$ans);
		break;
	case "*":
		$ans=$num1*$num2;
		echo("Multiplication is ".$ans);
		break;
	case "/":
	
	if ($num2==0) {
		echo("Can't divide");
	}
	else {
		$ans=$num1/$num2;
		echo("Division is ".$ans)."<br>";
		echo("Divisible");
	}
	break;
	default:
		echo("Incorrect");
		break;
}
?>