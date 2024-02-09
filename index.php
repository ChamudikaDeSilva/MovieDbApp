<?php
	require_once 'conf/conf.php';
	require_once 'function/moviefun.php';
if (isset($_COOKIE['loginuser'])) {
	if (isset($_GET['movieid'])) {
		$movieId = $_GET['movieid'];
		include_once 'design/moviedetail.php';
	} else {
		include_once 'design/home.php';
	}
} else {
	header('location:loginpage.php');
}
	
?>