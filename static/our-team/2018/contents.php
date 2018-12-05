<?php

	$dir    = getcwd();
	$files = scandir($dir);
	$flatfiles = [];
	for ($i=2; $i < count($files)-2; $i++) { 
		array_push($flatfiles, $files[$i]);
	}
	echo json_encode($flatfiles);
?>