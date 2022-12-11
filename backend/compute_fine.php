<?php
  session_start();

  function computeFine() {
	  return 12;
  }
  // Compute the fine and store it in a session variable
  $fine = computeFine();
  $_SESSION['fine'] = $fine;

  // Redirect the user back to the current PHP file
  header('Location: ../frontend/compute_fine.php');
?>