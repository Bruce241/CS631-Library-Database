<?php
	session_start();
	require_once("sql_runner.php");
		
	$S = $_POST['S'];
	$E = $_POST['E'];
	
	$sql = "SELECT BId, SUM(DATEDIFF(RDTIME, BDTIME)), COUNT(DATEDIFF(RDTIME, BDTIME))
			FROM Borrowing NATURAL JOIN Borrows
			WHERE BDTime >= '$S' AND RDTime <= '$E' AND DATEDIFF(RDTIME, BDTIME) > 20
			GROUP BY BId";

			
	$result = run_sql_query($sql);
	
	$result2 = array();
	
	foreach ($result as $branch) {
		$days = $branch['SUM(DATEDIFF(RDTIME, BDTIME))'];
		$docs = $branch['COUNT(DATEDIFF(RDTIME, BDTIME))'];
		
		$fine = ($days - (20 * $docs)) * 0.2 / $docs;
		$fine = number_format((float)$fine, 2, '.', '');
		array_push($result2, "Average fine: $" . $fine);
	}
	
	$result3 = array();
	for ($i = 0; $i < count($result); $i++) {
		array_push($result3, $result[$i]);
		array_push($result3, $result2[$i]);
	}
	
	if (!$result) {
        header("Location: ../frontend/print_other_info.php");
        exit;
    }
	else {
		$_SESSION['six'] = $result3;
		header("Location: ../frontend/print_other_info.php");
	}
?>