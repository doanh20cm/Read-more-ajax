<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "12345"; /* Password */
$dbname = "loadmore"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
mysqli_set_charset($con, 'UTF8');
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}