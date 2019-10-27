<?php
$i=$argv[1];
// while(true) {
while($i<=$argv[2]) {
	print $i."\n";
	exec("graph $i");
	$i++;
}
