<?php
	session_start();

	function getReservedDocs() {
		return 'reserved docs here';
	}
  
	$reserved_docs = getReservedDocs();
	$_SESSION['reserved_docs'] = $reserved_docs;

	header('Location: ../frontend/print_reserved.php');
?>