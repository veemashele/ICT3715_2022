<?php

//conn.php

/**
 * This script connects to MySQL using the PDO object.
 * This can be included in web pages where a database connection is needed.
 * Customize these to match your MySQL database connection details.
 * This info should be available from within your hosting panel.
 */
 
$dsn = 'mysql:dbname=ict3715_2022;host=localhost';
$user = 'root';
$password = '';

try
{
	$conn = new PDO($dsn,$user,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
//The PDO object can now be used to query MySQL.
?>