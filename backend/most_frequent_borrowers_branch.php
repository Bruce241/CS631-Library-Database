<?php
	session_start();
	require_once("sql_runner.php");
		
	$N = $_POST['N'];
	$N = intval($N);
	$I = $_POST['I'];
	
	$sql = "SELECT RId, RName, COUNT(RId) AS NumBooksBorrowed
			FROM Borrows NATURAL JOIN Reader
			WHERE BId = '$I'
			GROUP BY RId
			ORDER BY NumBooksBorrowed DESC
			LIMIT $N";

			
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/print_other_info.php");
        exit;
    }
	else {
		$_SESSION['one'] = $result;
		header("Location: ../frontend/print_other_info.php");
	}
?>