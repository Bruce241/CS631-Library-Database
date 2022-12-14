<?php
  session_start();
  $RId = $_SESSION['RId'];
  
  function computeFine($days) {
	  if ($days <= 20) { return 0; }
	  else { return 0.2 * ($days - 20); }
  }
  
  require_once("sql_runner.php");
		
	$doc_id = $_POST["doc_id"];
	$copy_no = $_POST["copy_no"];
	$branch_id = $_POST["branch_id"];
	$sql = "SELECT DATEDIFF(RDTIME, BDTIME)
					FROM Borrowing
					WHERE BORNO = (SELECT BORNO
						FROM Borrows
						WHERE DOCID = '$doc_id' 
						AND COPYNO = '$copy_no' 
						AND BID = '$branch_id'
						AND RID = '$RId')";

			
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/compute_fine.php");
        exit;
    }
	else {
		session_start();
		$days = $result[0]["DATEDIFF(RDTIME, BDTIME)"];
		$fine = computeFine($days);
		$_SESSION['fine'] = $fine;
		header("Location: ../frontend/compute_fine.php");
	}
  
  // Compute the fine and store it in a session variable
  $fine = computeFine();
  $_SESSION['fine'] = $fine;
  
  // Redirect the user back to the current PHP file
  // header('Location: ../frontend/compute_fine.php');
?>