<?php
	require_once("sql_runner.php");
		
	$doc_id = $_POST["doc_id"];
	$copy_no = $_POST["copy_no"];
	$branch_id = $_POST["branch_id"];
	$sql = "UPDATE Borrowing
				SET RDTIME = CURDATE()
				WHERE BORNO = (SELECT BORNO FROM BORROWS
					WHERE DOCID = '$doc_id' 
                    AND COPYNO = '$copy_no' 
                    AND BID = '$branch_id'
					GROUP BY BORNO
					ORDER BY BORNO DESC
					LIMIT 1)";

			
	$result = run_sql_query($sql);
	
	if (!$result) {
        header("Location: ../frontend/return_doc.php");
        exit;
    }
	else {
		session_start();
		$_SESSION["returned"] = "Document returned.";
		header("Location: ../frontend/return_doc.php");
	}
?>