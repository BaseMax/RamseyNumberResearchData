<?php
$files=array_diff(scandir("."), array('.', '..'));
// print_r($files);
$best=[];
foreach($files as $file) {
	if(is_dir($file)) {
		$filename=$file."/graph-rank-result.txt";
		print $filename."\n";
		$f=fopen($filename, 'r');
		$data=fseek($f, 0, SEEK_END);
		$lines=[];
		$line=fread($f, 1000);
		print $line."\n";
		// $lines[]=fgets($f);
		// print_r($lines);
		// $best[]=$lines[0];
		// print $file."\n";
	}
}
