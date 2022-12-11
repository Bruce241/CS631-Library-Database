<?php session_start(); ?>

<form action="../backend/most_frequent_borrowers_branch.php" method="post">
  <label for="num_borrowers">Enter the number of most frequent borrowers to be shown:</label><br>
  <input type="text" id="num_borrowers" name="num_borrowers"><br>
  <label for="branch_id">Enter the branch ID:</label><br>
  <input type="text" id="branch_id" name="branch_id"><br>
  <input type="submit" value="Get borrowers"><br><br>
</form>

<form action="../backend/most_frequent_borrowers.php" method="post">
  <label for="num_borrowers">Enter the number of most frequent borrowers in the library to be shown:</label><br>
  <input type="text" id="num_borrowers" name="num_borrowers"><br>
  <input type="submit" value="Get borrowers"><br><br>
</form>

<form action="../backend/most_borrowed_books_branch.php" method="post">
  <label for="num_books">Enter the number of most borrowed books to be shown:</label><br>
  <input type="text" id="num_books" name="num_books"><br>
  <label for="branch_id">Enter the branch ID:</label><br>
  <input type="text" id="branch_id" name="branch_id"><br>
  <input type="submit" value="Get borrowers"><br><br>
</form>

<form action="../backend/most_borrowed_books.php" method="post">
  <label for="num_books">Enter the number of most borrowed books in the library to be shown:</label><br>
  <input type="text" id="num_books" name="num_books"><br>
  <input type="submit" value="Get borrowers"><br><br>
</form>

<form action="../backend/most_popular_books.php" method="post">
  <label for="year">Enter the year:</label><br>
  <input type="text" id="year" name="year"><br>
  <input type="submit" value="Get top 10 most popular books"><br><br>
</form>

<form action="../backend/average_fines.php" method="post">
  <label for="start_date">Enter the start date:</label><br>
  <input type="text" id="start_date" name="start_date"><br>
  <label for="end_date">Enter the end date:</label><br>
  <input type="text" id="end_date" name="end_date"><br>
  <input type="submit" value="Get average fines"><br><br>
  <a href="admin.php">Back</a>
</form>