<?php

if(!isset($_GET['c']) || $_GET['c'] != "letmein") {
	
	header('Location: https://saim.me');
	die;
} else {
	
	$cookie_name = "letmein";
    $cookie_value = "1";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	header('Location: https://saim.me/blob/master/');
	die;
	
}