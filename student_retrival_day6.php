<?php

// DB connection
$connection = mysqli_connect("localhost","root","","db_internship");

// Query
$q = mysqli_query($connection,"select * from table_student") or die(mysqli_error($connection));

echo "<table border='2'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Date of Birth</th>";
echo "<th>Email</th>";
echo "<th>Address</th>";
echo "<th>Pincode</th>";
echo "<th>Password</th>";
echo "<th>Blood Group</th>";
echo "</tr>";

while($row = mysqli_fetch_array($q)){
    echo "<tr>";
    echo "<td>{$row['stu_id']}</td>";
    echo "<td>{$row['stu_name']}</td>";
    echo "<td>{$row['stu_gender']}</td>";
    echo "<td>{$row['stu_mobile']}</td>";
    echo "<td>{$row['stu_dob']}</td>";
    echo "<td>{$row['stu_email']}</td>";
    echo "<td>{$row['stu_address']}</td>";
    echo "<td>{$row['stu_pincode']}</td>";
    echo "<td>{$row['stu_password']}</td>";
    echo "<td>{$row['stu_bloodgroup']}</td>";
    echo "</tr>";
}
echo "</table>";

?>