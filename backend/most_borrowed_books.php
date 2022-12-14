<?php
	session_start();
	require_once("sql_runner.php");
		
	$N = $_POST['N'];
	$N = intval($N);
	
	$sql = "SELECT DocId, Title, COUNT(DocId) AS TimesBorrowed
			FROM Borrows NATURAL JOIN Document
			GROUP BY DocId
			ORDER BY TimesBorrowed DESC
			LIMIT $N";

			
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/print_other_info.php");
        exit;
    }
	else {
		$_SESSION['four'] = $result;
		header("Location: ../frontend/print_other_info.php");
	}
?>