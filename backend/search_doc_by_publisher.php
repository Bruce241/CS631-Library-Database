<?php
	require_once("sql_runner.php");
	
	$publisher = $_POST["publisher"];
	$sql = "SELECT * FROM document WHERE PublisherID In (SELECT PublisherID FROM publisher WHERE PubName = '$publisher')";
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/search_doc.php");
        exit;
    }
	else {
		session_start();
		$_SESSION["publisher"] = $result;
		header("Location: ../frontend/search_doc.php");
	}
?>