<?php
	include_once 'header.php';
	$movie = getMovieDetails($conn,$movieId);
	if (!empty($movie)) {
		echo "<table border='1'>";
		foreach ($movie[0] as $key => $detail) {
			echo "<tr>";
			echo"<td>$key</td>";
			if ($key == 'coverimage') {
				echo "<td><img src='img/coverimage/".$detail."' alt='$detail'/></td>";
			} else {
				echo "<td>$detail</td>";
			}
			
			
			echo "</tr>";
		}
		echo "</table>";
		include_once 'addcomment.php';
		include_once 'comments.php';
	} else {
		echo "Nothing found";
	}
	
	
?>

	
