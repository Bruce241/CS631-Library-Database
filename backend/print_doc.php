<?php
  session_start();

  function getDocs() {
	  return "doc ids and titles here";
  }
  
  $doc_ids_titles = getDocs();
  $_SESSION['doc_ids_titles'] = $doc_ids_titles;

  // Redirect the user back to the current PHP file
  header('Location: ../frontend/print_doc.php');
?>