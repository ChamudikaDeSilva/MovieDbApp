<h3>Comments</h3>
<?php
	$comments = getMovieComments($conn,$movieId);
	if ($comments) {
		foreach ($comments as $key => $comment) {
		$by =$comment['commentby'];
		$on =$comment['commentedon'];
		$comt =$comment['comments'];
			echo "<hr><table>
					<tr>
						<td><b>$by</b></td>
						<td>commented on $on</td>
					</tr>
					<tr>
						<td colspan='2'>$comt</td>
					</tr>
				</table>";
	}
}
	
?>
