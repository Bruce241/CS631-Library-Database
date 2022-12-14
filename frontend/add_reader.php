<form action="../backend/add_reader.php" method="post">
  <label for="reader_type">Enter reader type:</label><br>
  <input type="text" id="reader_type" name="reader_type"><br>
  <label for="reader_name">Enter reader name:</label><br>
  <input type="text" id="reader_name" name="reader_name"><br>
  <label for="reader_address">Enter reader address:</label><br>
  <input type="text" id="reader_address" name="reader_address"><br>
  <label for="phone_no">Enter reader phone number:</label><br>
  <input type="text" id="phone_no" name="phone_no"><br>
  <input type="submit" value="Add reader"><br><br>
</form>

<?php
	
	session_start();
	
	if (isset($_SESSION['reader'])) {
		$reader = $_SESSION['reader'];

		
		echo $reader; echo '<br><br>';
		
		unset($_SESSION['reader']);
	}
?>

<a href="admin.php">Back</a>