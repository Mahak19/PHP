<?php
for ($i=0;$i<=4;$i=$i+1) {
	for ($j=0;$j<=$i;$j=$j+1) {
		if ($j%2==0) {
			echo(0);
		}
		else {
			echo(1);
		}
	}
	echo("<br>");
}
?>