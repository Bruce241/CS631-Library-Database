<?php
	session_start();
	require_once("sql_runner.php");
		
	$N = $_POST['N'];
	$N = intval($N);
	
	$sql = "SELECT RId, RName, COUNT(RId) AS NumBooksBorrowed
			FROM Borrows NATURAL JOIN Reader
			GROUP BY RId
			ORDER BY NumBooksBorrowed DESC
			LIMIT $N";

			
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/print_other_info.php");
        exit;
    }
	else {
		$_SESSION['two'] = $result;
		header("Location: ../frontend/print_other_info.php");
	}
?>