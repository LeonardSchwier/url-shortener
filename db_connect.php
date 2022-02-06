<?php

	/* Config database access here */
	$db_url = '';
	$db_userName = '';
	$db_userPW = '';
	$db_db = '';


    function connectDB()
	{
	$db = mysqli_connect($db_url, $db_userName, $db_userPW) or die ("No connection to DB");

	mysqli_query($db, "SET CHARACTER SET utf8");
	mysqli_set_charset($db, 'utf8');

    if(!$db)
    die ("No database");
    
    if(!mysqli_select_db ($db, $db_db))
    die("No database selected");

	return $db;
	}                
?>