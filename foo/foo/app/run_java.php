<?php
	exec ('javac -encoding UTF-8 Hello.java');
	$ret = exec ('java Hello');

	var_dump($ret);

	exit;
	//実行およびコンパイルができるようになった、
?>