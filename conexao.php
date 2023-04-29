<?php
try {
	// //pgsql
	//$host='localhost';
	//$db = 'zoo';
	//$username = 'postgres';
	//$password = 'postgres';
	//$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
	//$dbh = new PDO($dsn);

	// //mysql
	$host='localhost';
	$db = 'login';
	$username = 'root';
	$password = '';
	$dbh = new PDO('mysql:host='.$host.';dbname='.$db.'', $username, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage();
	die();
}
?>