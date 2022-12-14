<form action="../backend/search_copy.php" method="post">
  <label for="doc_id">Enter the document ID:</label><br>
  <input type="text" id="doc_id" name="doc_id"><br>
  <label for="copy_no">Enter the copy number:</label><br>
  <input type="text" id="copy_no" name="copy_no"><br>
  <label for="branch_id">Enter the branch ID:</label><br>
  <input type="text" id="branch_id" name="branch_id"><br>
  <input type="submit" value="Search"><br><br>
</form>

<?php
	session_start();
	
	if (isset($_SESSION['status'])) {
		$status = $_SESSION['status'];
		
		echo $status . "<br><br>";
		
		unset($_SESSION['status']);
	}
?>


<a href="admin.php">Back</a>