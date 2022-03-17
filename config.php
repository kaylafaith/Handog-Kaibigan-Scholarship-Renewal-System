<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "db_hkrenewal"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname); //connecting to the database
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error()); //terminates the execution
}
