<?php
	session_start();
	
	if (isset($_SESSION['reserved_docs'])) {
		
		$reserved_docs = $_SESSION['reserved_docs'];
		foreach ($reserved_docs as $doc) {
			print_r($doc);
			echo "<br>";
		}
		
		unset($_SESSION['reserved_docs']);
	}
?>

<br><br>
<a href="reader.php">Back</a>