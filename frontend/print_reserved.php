<?php
	session_start();
	
	if (isset($_SESSION['reserved_docs'])) {
		
		$reserved_docs = $_SESSION['reserved_docs'];
		echo "Your reserved docs: " . $reserved_docs;
		
		unset($_SESSION['reserved_docs']);
	}
?>

<br><br>
<a href="reader.php">Back</a>