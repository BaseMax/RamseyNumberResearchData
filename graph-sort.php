<?php
$files=array_diff(scandir("."), array('.', '..'));
// $allLines=[];
$data="";
foreach($files as $file) {
	if(is_dir($file)) {
		$filename=$file."/graph-rank-result-sort.txt";
		print $filename."\n";
		$data.=file_get_contents($filename);
		// print $data;
		// $data=trim($data);
		// $lines=explode("\n", $data);
		// foreach($lines as $index=>$line) {
		// 	$allLines[]=(int) trim($line);
		// }
	}
}
// rsort($lines);
// $newdata="";
// foreach($lines as $line) {
// 	$newdata.=$line."\n";
// }
$filename_new="graph-ranks.txt";
file_put_contents($filename_new, $data);
