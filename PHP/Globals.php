<?php
$n=50;
$m=40;
function addition()
{
	$GLOBALS['Z']=$GLOBALS['n']+$GLOBALS['m'];
}
addition();
echo($Z);
?>