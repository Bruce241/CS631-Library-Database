<?php
	require_once("sql_runner.php");
	session_start();
	$RId = $_SESSION['RId'];
	
	$sql = "SELECT D.DocId, CopyNo, BId, Title
			FROM Reservation, Reserves R, Document D
			WHERE RId = '$RId' AND ReservationNo = ResNo AND R.DocID = D.DocId";

			
	$result = run_sql_query($sql);
	$result2 = array();
	
	foreach ($result as $doc) {
		$doc_id = $doc['DocId'];
		$copy_no = $doc['CopyNo'];
		$branch_id = $doc['BId'];
		
		$sql = "SELECT *
			FROM Borrows NATURAL JOIN Borrowing
			WHERE DocId = '$doc_id' and CopyNo = '$copy_no' and BId = '$branch_id'";
		$r = run_sql_query($sql);
		
		if ($r[0]['DocId'] == $doc_id and $r[0]['RDTime'] == NULL) {
			array_push($result2, "Document is checked out.");
		}
		else {
			$sql = "SELECT *
			FROM Reserves
			WHERE DocId = '$doc_id' and CopyNo = '$copy_no' and BId = '$branch_id'";
		
			$r2 = run_sql_query($sql);
			if ($r2[0]['DocId'] == $doc_id) {
				array_push($result2, "Document is reserved.");
			}
			else {
				array_push($result2, "Document is available.");
			}
		}
	}
	
	$result3 = array();
	
	for ($i = 0; $i < count($result); $i++) {
		array_push($result3, $result[$i]);
		array_push($result3, $result2[$i]);
	}
	if (!$result) {
        header("Location: ../frontend/print_reserved.php");
        exit;
    }
	else {
		$_SESSION["reserved_docs"] = $result3;
		header("Location: ../frontend/print_reserved.php");
	}
?>