<?php
$host = '127.0.0.1:3306';
$username = "root";
$password = "root";
$database = "QLSV";
$db = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($db, "UTF8");
