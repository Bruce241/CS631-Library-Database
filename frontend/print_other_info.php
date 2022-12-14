<?php session_start(); ?>

<form action="../backend/most_frequent_borrowers_branch.php" method="post">
  <label for="N">Enter the number of most frequent borrowers to be shown:</label><br>
  <input type="text" id="N" name="N"><br>
  <label for="I">Enter the branch ID:</label><br>
  <input type="text" id="I" name="I"><br>
  <input type="submit" value="Get borrowers"><br><br>
</form>

<?php
	
	if (isset($_SESSION['one'])) {
		$output = $_SESSION['one'];

		foreach($output as $out) {
			print_r($out);
			echo "<br>";
		}
		echo "<br><br>";
		unset($_SESSION['one']);
	}
?>

<form action="../backend/most_frequent_borrowers.php" method="post">
  <label for="N">Enter the number of most frequent borrowers in the library to be shown:</label><br>
  <input type="text" id="N" name="N"><br>
  <input type="submit" value="Get borrowers"><br><br>
</form>

<?php
	
	if (isset($_SESSION['two'])) {
		$output = $_SESSION['two'];

		foreach($output as $out) {
			print_r($out);
			echo "<br>";
		}
		echo "<br><br>";
		unset($_SESSION['two']);
	}
?>

<form action="../backend/most_borrowed_books_branch.php" method="post">
  <label for="N">Enter the number of most borrowed books to be shown:</label><br>
  <input type="text" id="N" name="N"><br>
  <label for="I">Enter the branch ID:</label><br>
  <input type="text" id="I" name="I"><br>
  <input type="submit" value="Get books"><br><br>
</form>

<?php
	
	if (isset($_SESSION['three'])) {
		$output = $_SESSION['three'];

		foreach($output as $out) {
			print_r($out);
			echo "<br>";
		}
		echo "<br><br>";
		unset($_SESSION['three']);
	}
?>

<form action="../backend/most_borrowed_books.php" method="post">
  <label for="num_books">Enter the number of most borrowed books in the library to be shown:</label><br>
  <input type="text" id="N" name="N"><br>
  <input type="submit" value="Get books"><br><br>
</form>

<?php
	
	if (isset($_SESSION['four'])) {
		$output = $_SESSION['four'];

		foreach($output as $out) {
			print_r($out);
			echo "<br>";
		}
		echo "<br><br>";
		unset($_SESSION['four']);
	}
?>

<form action="../backend/most_popular_books.php" method="post">
  <label for="year">Enter the year:</label><br>
  <input type="text" id="year" name="year"><br>
  <input type="submit" value="Get top 10 most popular books"><br><br>
</form>

<?php
	if (isset($_SESSION['five'])) {
		$output = $_SESSION['five'];

		foreach($output as $out) {
			print_r($out);
			echo "<br>";
		}
		echo "<br><br>";
		unset($_SESSION['five']);
	}
?>

<form action="../backend/average_fines.php" method="post">
  <label for="S">Enter the start date:</label><br>
  <input type="text" id="S" name="S"><br>
  <label for="E">Enter the end date:</label><br>
  <input type="text" id="E" name="E"><br>
  <input type="submit" value="Get average fines"><br><br>
</form>

<?php
	
	if (isset($_SESSION['six'])) {
		$output = $_SESSION['six'];

		foreach($output as $out) {
			print_r($out);
			echo "<br>";
		}
		echo "<br><br>";
		unset($_SESSION['six']);
	}
?>

<a href="admin.php">Back</a>