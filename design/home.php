<?php
include_once 'header.php';
$movieCovers=getAllMovieCover($conn);
	if (!empty($movieCovers)) {
		foreach ($movieCovers as $key => $movieCover) {
			$imageName = $movieCover['coverimage'];
			$mid = $movieCover['Movie_id'];
			echo "<a href='index.php?movieid=$mid'>
			<img src='img/coverimage/".$imageName."' alt='$imageName'/></a>";
		}
	} else {
		echo "Nothing found";
	}
?>