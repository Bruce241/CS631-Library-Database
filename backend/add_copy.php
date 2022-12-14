<?php
	require_once("sql_runner.php");
		
	$doc_id = $_POST["doc_id"];
	$copy_no = $_POST["copy_no"];
	$branch_id = $_POST["branch_id"];
	$sql = "INSERT INTO Copy (DocID, CopyNo, BID, Position)
			VALUES ('$doc_id', '$copy_no', '$branch_id', ( SELECT (MAX(Position) + 1) FROM COPY AS C));";
			
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/add_copy.php");
        exit;
    }
	else {
		session_start();
		$_SESSION["copy"] = "Copy added.";
		header("Location: ../frontend/add_copy.php");
	}
?>