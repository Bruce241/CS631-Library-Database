<?php
	require_once("sql_runner.php");
	
	session_start();
	$RId = $_SESSION['RId'];	
	$doc_id = $_POST["doc_id"];
	$copy_no = $_POST["copy_no"];
	$branch_id = $_POST["branch_id"];
	$sql = "INSERT INTO Borrowing (BORNO, BDTIME, RDTIME) VALUES (( SELECT (MAX(BorNo) + 1) FROM BORROWS), CURDATE(), NULL)";
	$result = run_sql_query($sql);
	$sql = "INSERT INTO BORROWS (BORNO, DOCID, COPYNO, BID, RID) VALUES (
				(SELECT MAX(BORNO) FROM Borrowing),
				'$doc_id',
				'$copy_no',
				'$branch_id',
				'$RId'
			)";
	$result = run_sql_query($sql);
	if (!$result) {
        header("Location: ../frontend/checkout_doc.php");
        exit;
    }
	else {
		$_SESSION['borrow'] = "Checkout complete.";
		header("Location: ../frontend/checkout_doc.php");
	}
?>