<form action="../backend/print_branch_info.php" method="post">
  <label for="branch_id">Enter the branch ID:</label><br>
  <input type="text" id="branch_id" name="branch_id"><br>
  <input type="submit" value="Print branch info"><br><br>
</form>

<?php
	
	session_start();
	
	if (isset($_SESSION['branch'])) {
		$branch = $_SESSION['branch'];

		
		print_r($branch); echo '<br><br>';
		
		unset($_SESSION['branch']);
	}
?>

  <a href="admin.php">Back</a>