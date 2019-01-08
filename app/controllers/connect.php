<?php 

$host = 'db4free.net';
$username = 'charlesqui';
$password = 'db4freenet';
$dbname = 'todolistph';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

echo 'connected succesfully';

 ?>