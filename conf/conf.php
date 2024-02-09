<?php
	Define('SERVER','localhost');
	Define('USER','commenter');
	Define('PASSWORD','mov123');
	Define('DB','moviedb');

	$conn = mysqli_connect(SERVER,USER,PASSWORD,DB);
	if (!$conn) {
		$conn = null;
		die("Mysql Connection failed".mysqli_connect_error());
	} 
?>