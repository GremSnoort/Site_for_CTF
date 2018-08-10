<?php
	require("const1.php");

	$connection = mysql_connect(DB_SERVER1,DB_USER1, DB_PASS1) or die(mysql_error());
	mysql_select_db(DB_NAME1) or die("Cannot select DB");
	?>