<?php
		require_once('connection.php');
		$vote = $_REQUEST['vote'];


		mysqli_query($con,"UPDATE tbCandidates SET candidate_cvotes=candidate_cvotes+1 WHERE candidate_name='$vote'");

		// mysqli_close($mysqli);
?> 
