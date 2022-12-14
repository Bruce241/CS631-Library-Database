<?php
	session_start();
	require_once("sql_runner.php");
		
	$year = $_POST['year'];
	
	$sql = "SELECT DocId, Title, COUNT(*) as TimesBorrowed
			FROM Borrows NATURAL JOIN Borrowing NATURAL JOIN Document
			WHERE Year(BDTime) = '$year'
			GROUP BY DocId
			ORDER BY COUNT(*) DESC
			LIMIT 10";

			
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/print_other_info.php");
        exit;
    }
	else {
		$_SESSION['five'] = $result;
		header("Location: ../frontend/print_other_info.php");
	}
?>