<?php

function Authentication($conn,$uname,$pword)
{
	$query = "select username,password from login
				where username ='$uname' and password = '$pword'";
	$result = mysqli_query($conn,$query);
	if ($result) {
		//count the result
		$resultCount = mysqli_num_rows($result);
		//echo $resultCount;
		if ($resultCount == 1) {
			//login success create a cookie
			//expire 1 day
			setcookie('loginuser',$uname,time()+86400);
			$message ="Login success";
			//if login success redirect user from login page to home or main page
			header('location:index.php');

		} else {
			//login failed
			$message = "Login failed please check your username and password";
		}
		
	} else {
		//die("Error".mysqli_error());
		$message = "Login failed please check your username and password";
	}
	return $message;
}

?>