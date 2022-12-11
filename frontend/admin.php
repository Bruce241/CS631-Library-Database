<html>
<head>
    <title>Library Management System</title>
</head>
<body>
    <h2>Library Management System</h2>
	<?php
	session_start();
	if (isset($_SESSION["admin"])) {
		echo "Hello, admin <br><br><br>";
	}
	else {
		header("Location: ../frontend/login.html?error=invalid");
	}
	?>
    <form method="post" action="add_copy.php">
        <button type="submit">Add a Document Copy</button>
    </form>

    <form method="post" action="search_copy.php">
        <button type="submit">Search for a Document Copy</button>
    </form>

    <form method="post" action="add_reader.php">
        <button type="submit">Add New Reader</button>
    </form>

    <form method="post" action="print_branch_info.php">
        <button type="submit">Print Branch Info</button>
    </form>

    <form method="post" action="print_other_info.php">
        <button type="submit">Print Other Info</button>
    </form>

    <form method="post" action="../backend/quit.php">
		<br>
        <button type="submit">Quit</button>
    </form>

</body>
</html>