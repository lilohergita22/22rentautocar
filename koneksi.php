<?php
$host = "localhost";
$username = "root";
$password = "root";
$db_name = "db_mobil";

$conn = mysqli_connect("$host", "root", "", $db_name);

mysqli_select_db($conn , $db_name) or die ("cannot connect" . mysqli_error($conn));
