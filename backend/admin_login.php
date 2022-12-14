<?php
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$credentials = array(
		array("username" => "admin", "password" => "password"),
	);

	if (in_array(array("username" => $username, "password" => $password), $credentials)) {
		session_start();
		$_SESSION["admin"] = "true";
		header("Location: ../frontend/admin.php");
	} else {
		header("Location: ../frontend/login.html?error=invalid");
	}
?>