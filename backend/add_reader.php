<?php
	require_once("sql_runner.php");
	$reader_type = $_POST["reader_type"];
	$reader_name = $_POST["reader_name"];
	$reader_address = $_POST["reader_address"];
	$phone_no = $_POST["phone_no"];
	$sql = "INSERT INTO Reader (RID, RTYPE, RNAME, RADDRESS, PHONENO) VALUES
	((SELECT (MAX(RId) + 1) FROM Reader AS R),'$reader_type', '$reader_name', '$reader_address', $phone_no)";
			
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/add_reader.php");
        exit;
    }
	else {
		session_start();
		$_SESSION["reader"] = "Reader added.";
		header("Location: ../frontend/add_reader.php");
	}
?>