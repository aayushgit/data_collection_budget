<?php
$host="localhost";
$uname="root";
$pass="toor";
$dbname="hostel";
$conn=mysqli_connect($host,$uname,$pass,$dbname);
if (!$conn) {
    echo "Invalid Connection";
}
?>
