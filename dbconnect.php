<?php
// dbconnect.php

try
{
	$pdo = new PDO('mysql:host=localhost;dbname=wp_equipment','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	//only for educational use to demonstration connection status
	$dbstatus = "Good database connection";

}
catch(PDOException $e)
{
	$dbstatus = "Database connection failed<br>".
			  $e->getMessage();
	die();
}
SESSION_START();

?>
