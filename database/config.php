<?php
$servername = "remotemysql.com:3306";
$dbusername = "fhu0YbSLHi";
$dbpassword = "luuCzA5POS";
$dbname = "fhu0YbSLHi";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
   die("connection failed: ".mysqli_connect_error());
}
?>
