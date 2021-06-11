<?php

$connection = mysqli_connect("localhost","root","","db_internship");

$q = mysqli_query($connection,"insert into tbl_user(user_name,user_gender,user_mobile) values('Roy','Male','9635485123')") or die("Error ". mysqli_error($connection));

if($q){
    echo "<script>alert('Record Inserted!')</script>";
}


?>