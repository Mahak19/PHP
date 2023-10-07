<?php
$c=1;
for ($i=1;$i<=4;$i=$i+1) {
	for ($j=1;$j<=$i;$j=$j+1) {
		echo($c);
		$c++;
	}
	echo("<br>");
}
?>