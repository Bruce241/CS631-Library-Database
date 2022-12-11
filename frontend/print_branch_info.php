<?php session_start(); ?>

<form action="../backend/print_branch_info.php" method="post">
  <label for="branch_id">Enter the branch ID:</label><br>
  <input type="text" id="branch_id" name="branch_id"><br>
  <input type="submit" value="Print branch info"><br><br>
  <a href="admin.php">Back</a>
</form>