<?php
//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=todo_list_php_ajax", "root", "virak@123.com");

session_start();

$_SESSION["user_id"] = "1";

?>
