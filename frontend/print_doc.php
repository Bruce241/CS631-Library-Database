<?php session_start(); ?>

<form action="../backend/print_doc.php" method="post">
  <label for="publisher_name">Enter the publisher name:</label><br>
  <input type="text" id="publisher_name" name="publisher_name"><br>
  <input type="submit" value="Checkout"><br><br>
</form>

<?php
	
	if (isset($_SESSION['docs'])) {
		
		$docs = $_SESSION['docs'];

		foreach($docs as $doc) {
			print_r($doc);
			echo "<br>";
		}
		echo "<br><br>";
		unset($_SESSION['docs']);
	}
?>

<a href="reader.php">Back</a>