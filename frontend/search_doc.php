<?php session_start(); ?>

<form action="../backend/search_doc_by_id.php" method="post">
  <label for="doc_id">Enter the document ID:</label><br>
  <input type="text" id="doc_id" name="doc_id"><br>
  <input type="submit" value="Search">
</form>

<form action="../backend/search_doc_by_title.php" method="post">
  <label for="title">Enter the document title:</label><br>
  <input type="text" id="title" name="title"><br>
  <input type="submit" value="Search">
</form>

<form action="../backend/search_doc_by_publisher.php" method="post">
  <label for="publisher">Enter the document publisher:</label><br>
  <input type="text" id="publisher" name="publisher"><br>
  <input type="submit" value="Search"><br><br>
  <a href="reader.php">Back</a>
</form>