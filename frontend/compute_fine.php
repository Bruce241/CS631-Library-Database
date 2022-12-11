<?php session_start(); ?>

<form action="../backend/compute_fine.php" method="post">
  <label for="doc_id">Enter the document ID:</label><br>
  <input type="text" id="doc_id" name="doc_id"><br>
  <label for="copy_no">Enter the copy number:</label><br>
  <input type="text" id="copy_no" name="copy_no"><br>
  <label for="branch_id">Enter the branch ID:</label><br>
  <input type="text" id="branch_id" name="branch_id"><br>
  <input type="submit" value="Checkout"><br><br>
  <a href="reader.php">Back</a>
</form>

<?php
	
	if (isset($_SESSION['fine'])) {
		// Retrieve the fine from the session variable
		$fine = $_SESSION['fine'];

		// Display the fine
		echo "Your fine is: $" . $fine;
		
		unset($_SESSION['fine']);
	}
?>