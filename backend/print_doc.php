<?php
	require_once("sql_runner.php");
		
	$pub_name = $_POST["publisher_name"];
	$sql = "SELECT DocId, Title
			FROM Document D, Publisher P
			WHERE PubName = '$pub_name' AND D.PublisherId = P.PublisherId";

			
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/print_doc.php");
        exit;
    }
	else {
		session_start();
		$_SESSION["docs"] = $result;
		header("Location: ../frontend/print_doc.php");
	}
?>