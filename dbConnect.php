<?php
//DB Connection
$conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
//Select DB From database
$db = mysqli_select_db($conn, 'api_db') or die("database error");
//Selecting database
?>