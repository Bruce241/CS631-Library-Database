<?php session_start(); ?>

<form action="../backend/print_doc.php" method="post">
  <label for="publisher_name">Enter the publisher name:</label><br>
  <input type="text" id="publisher_name" name="publisher_name"><br>
  <input type="submit" value="Checkout"><br><br>
  <a href="reader.php">Back</a>
</form>

<?php
	
	if (isset($_SESSION['doc_ids_titles'])) {
		// Retrieve the fine from the session variable
		$doc_ids_titles = $_SESSION['doc_ids_titles'];

		// Display the fine
		echo "Docs: " . $doc_ids_titles;
		
		unset($_SESSION['doc_ids_titles']);
	}
?>