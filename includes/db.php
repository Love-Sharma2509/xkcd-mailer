<?php

$host = 'localhost';
$user = 'root';
$db   = 'userdatabase';
$pwd='';
$con = new mysqli( $host, $user, $pwd, $db );
if ($con->connect_errno) {
	die( 'Connection failed: ' . $con->connect_error );
}
