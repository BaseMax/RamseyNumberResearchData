<?php
$i=4;
while(true) {
	print $i."\n";
	exec("graph $i");
	$i++;
}
