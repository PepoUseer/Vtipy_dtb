<?php

$host = "localhost";
$username = "root";
$user_password = "usbw";
$database_in_use = "test";

$mysqli = new mysqli($host, $username, $user_password, $database_in_use);

mysqli_query($mysqli, "SET NAMES utf8");
