<?php
function getAllMovieCover($conn)
{
	$i = 0;
	$query = "select Movie_id,name,coverimage
				from moviedetails";
	$movieCover = array();
	$result = mysqli_query($conn,$query);
		if ($result) {
			$num_of_rows = mysqli_num_rows($result);
			if ($num_of_rows > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$movieCover[$i] = $row;
					$i++;
				}
				mysqli_free_result($result);
			}
			else{
			//table empty
			$movieCover = null;
		}
			
		}
		else{
			//error
			$movieCover = null;
		}

	return $movieCover;
}
//print_r(getAllMovieCover($conn));
function getMovieDetails($conn,$movieId)
{
	$i = 0;
	$query = "select * from moviedetails where Movie_id = '$movieId'";
	$movie = array();
	$result = mysqli_query($conn,$query);
		if ($result) {
			$num_of_rows = mysqli_num_rows($result);
			if ($num_of_rows > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$movie[$i] = $row;
					$i++;
				}
				mysqli_free_result($result);
			}
			else{
			//table empty
			$movie = null;
		}
			
		}
		else{
			//error
			$movie = null;
		}

	return $movie;
}


function getMovieComments($conn,$movieId)
{
	$i = 0;
	$query = "select * from comments where Movie_id = '$movieId'";
	$comments = array();
	$result = mysqli_query($conn,$query);
		if ($result) {
			$num_of_rows = mysqli_num_rows($result);
			if ($num_of_rows > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$comments[$i] = $row;
					$i++;
				}
				mysqli_free_result($result);
			}
			else{
			//table empty
			$comments = null;
		}
			
		}
		else{
			die("Error ".mysqli_error($conn));
			$comments = null;
		}

	return $comments;
}

 function AddComment($conn,$comment,$movieId,$user)
{
	$query = "insert into comments values(null,'$comment','$movieId','$user',NOW());";
	$result = mysqli_multi_query($conn,$query);
	if (!$result) {
		die("Error ".mysqli_error($conn));
	}
}
?>