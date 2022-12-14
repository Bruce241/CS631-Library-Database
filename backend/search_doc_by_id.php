<?php
	require_once("sql_runner.php");
	
	$doc_id = $_POST["doc_id"];
	$sql = "SELECT * FROM document WHERE DocId = '$doc_id'";
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/search_doc.php");
        exit;
    }
	else {
		session_start();
		$_SESSION["doc"] = $result[0];
		header("Location: ../frontend/search_doc.php");
	}
?>