<?php
	require_once("sql_runner.php");
	$branch_id = $_POST["branch_id"];
	$sql = "SELECT Bname, Location FROM Branch WHERE BId = '$branch_id'";	
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/print_branch_info.php");
        exit;
    }
	else {
		session_start();
		$_SESSION["branch"] = $result[0];
		header("Location: ../frontend/print_branch_info.php");
	}
?>