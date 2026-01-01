<?php
mysqli_report(MYSQLI_REPORT_OFF); // Disable default warning output
$con = mysqli_connect("localhost", "root", "", "product1");

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>