<?php 
	require_once("./db_connect.php");

	$key = $_GET['key'];
	$key = str_replace("/", "", $key);
	$key = mysqli_escape_string(connectDB(), $key);
	$url = mysqli_fetch_array(mysqli_query(connectDB(), "SELECT target FROM `references` WHERE (`key` = '".$key."')"));

	if(count($url) > 0) {
	$url = $url['target'];
	if(substr( $url, 0, 7 ) === "http://" || substr( $url, 0, 8 ) === "https://") {
		echo '<meta http-equiv="refresh" content="0; URL='.$url.'" />';
	} else {
		echo '<meta http-equiv="refresh" content="0; URL=http://'.$url.'" />';
	}
	} else {
		echo 'unknown key';
	}
 ?>
