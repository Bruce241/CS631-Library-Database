<?php
	require_once("sql_runner.php");
	session_start();

	$doc_id = $_POST['doc_id'];
	$copy_no = $_POST['copy_no'];
	$branch_id = $_POST['branch_id'];
		
	$sql = "SELECT *
		FROM Borrows NATURAL JOIN Borrowing
		WHERE DocId = '$doc_id' and CopyNo = '$copy_no' and BId = '$branch_id'";
		
	$result = run_sql_query($sql);
	
	if ($result[0]['DocId'] == $doc_id and $result[0]['RDTime'] == NULL) {
		$rtn = "Document is checked out.";
	}
	elseif ($result[0]['RDTime'] != NULL) {
		$sql = "SELECT *
		FROM Reserves
		WHERE DocId = '$doc_id' and CopyNo = '$copy_no' and BId = '$branch_id'";
		
		$result = run_sql_query($sql);
		if ($result[0]['DocId'] == $doc_id) {
			$rtn = "Document is reserved.";
		}
		else {
			$rtn = "Document is available.";
		}
	}
	else {
		$sql = "SELECT *
		FROM Copy
		WHERE DocId = '$doc_id' and CopyNo = '$copy_no' and BId = '$branch_id'";
		
		$result = run_sql_query($sql);
		if ($result[0]['DocId'] == $doc_id) {
			$rtn = "Document is available.";
		}
		else {
			$rtn = "Invalid copy.";
		}
	}

	if (!$rtn) {
		$_SESSION["status"] = $rtn;
        header("Location: ../frontend/search_copy.php");
    }
	else {
		$_SESSION["status"] = $rtn;
		header("Location: ../frontend/search_copy.php");
	}
?>