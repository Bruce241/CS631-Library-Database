<?php

	function starts_with($s, $startString) {
        $len = strlen($startString);

        return (substr($s, 0, $len) === $startString);
    }
	
    function run_sql_query($query) {
        $db_server_name = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "library";

        $db = mysqli_connect($db_server_name, $db_username, $db_password, $db_name);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $res = mysqli_query($db, $query);

        if (starts_with(trim($query), "SELECT")) {
            $rtn = array();

            while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                array_push($rtn, $row);
            }

            return $rtn;
        }
    }
?>