<?php
	require_once("sql_runner.php");
	session_start();
	
	$RId = $_SESSION['RId'];
	$doc_id = $_POST["doc_id"];
	$copy_no = $_POST["copy_no"];
	$branch_id = $_POST["branch_id"];
	
	$sql = "INSERT INTO Reservation (ResNo, DTime) VALUES (( SELECT (MAX(ResNo) + 1) FROM Reservation R), NOW())";
	$result = run_sql_query($sql);
	
	$sql = "INSERT INTO RESERVES(RID, RESERVATIONNO, DOCID, COPYNO, BID) VALUES (
			'$RId',
			(SELECT MAX(ResNo) FROM Reservation),
				'$doc_id',
				'$copy_no',
				'$branch_id'
		)";
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/reserve_doc.php");
        exit;
    }
	else {
		$_SESSION['reserved'] = "Document reserved.";
		header("Location: ../frontend/reserve_doc.php");
	}
?>