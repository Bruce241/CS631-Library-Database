<?php
	require_once("sql_runner.php");
	
	$title = $_POST["title"];
	$sql = "SELECT * FROM document WHERE Title = '$title'";
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/search_doc.php");
        exit;
    }
	else {
		session_start();
		$_SESSION["title"] = $result[0];
		header("Location: ../frontend/search_doc.php");
	}
?>