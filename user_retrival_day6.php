<?php

// DB connection
$connection = mysqli_connect("localhost","root","","db_internship");
// Query
$q = mysqli_query($connection, "select * from tbl_user") or die(mysqli_error($connection));

// below function will fetch data as numerical array
$row = mysqli_fetch_row($q);
// debug
echo "<pre>";
print_r($row);

$row2 = mysqli_fetch_array($q);

echo "<pre>";
print_r($row2)


?>