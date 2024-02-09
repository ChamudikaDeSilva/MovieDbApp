<hr>
<h4>Add Your Comment</h4>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$cmt = mysql_escape_string($_POST['comment']);
	AddComment($conn,$cmt,$movieId,$_COOKIE['loginuser']);
}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'].'?movieid='.$movieId; ?>">
	<table>
		<tr>
			<td><textarea name="comment"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="addcomment" value="POST"></td>
		</tr>
	</table>
</form>