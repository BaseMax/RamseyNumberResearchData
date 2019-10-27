<?php
$files=array_diff(scandir("."), array('.', '..'));
foreach($files as $file) {
	if(is_dir($file)) {
		$filename=$file."/graph-rank-result.txt";
		$filename_new=$file."/graph-rank-result-sort.txt";
		print $filename."\n";
		$data=file_get_contents($filename);
		$data=trim($data);
		$lines=explode("\n", $data);
		foreach($lines as $index=>$line) {
			$lines[$index]=(int) trim($line);
		}
		rsort($lines);
		$newdata="";
		foreach($lines as $line) {
			$newdata.=$line."\n";
		}
		file_put_contents($filename_new, $newdata);
	}
}
