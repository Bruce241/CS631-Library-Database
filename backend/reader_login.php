<?php
	require_once("sql_runner.php");
	
	$card_number = $_POST["number"];
	$sql = "SELECT * FROM reader WHERE RId = '$card_number'";
	$result = run_sql_query($sql);
	
	if (!$result) {
        // Redirect to the login page with the error query string parameter set to "invalid"
        header("Location: ../frontend/login.html?error=invalid");
        exit;
    }
	else {
		session_start();
		$_SESSION["name"] = $result[0]["RName"];
		header("Location: ../frontend/reader.php");
	}
?>