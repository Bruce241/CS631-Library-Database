<html>
<head>
    <title>Library Management System</title>
</head>
<body>
    <h2>Library Management System</h2>
	<?php
	session_start();
	if (isset($_SESSION["name"])) {
		echo "Hello, " . $_SESSION["name"] . "<br><br><br>";
	}
	else {
		header("Location: ../frontend/login.html?error=invalid");
	}
	?>
    <form method="post" action="search_doc.php">
        <button type="submit">Search for a Document</button>
    </form>

    <form method="post" action="checkout_doc.php">
        <button type="submit">Document Checkout</button>
    </form>

    <form method="post" action="return_doc.php">
        <button type="submit">Document Return</button>
    </form>

    <form method="post" action="reserve_doc.php">
        <button type="submit">Document Reserve</button>
    </form>

    <form method="post" action="compute_fine.php">
        <button type="submit">Compute Fine</button>
    </form>

    <form method="post" action="../backend/print_reserved.php">
        <button type="submit">Print Reserved Documents</button>
    </form>

    <form method="post" action="print_doc.php">
        <button type="submit">Print Document ID and Titles</button>
    </form>

    <form method="post" action="../backend/quit.php">
		<br>
        <button type="submit">Quit</button>
    </form>

</body>
</html>