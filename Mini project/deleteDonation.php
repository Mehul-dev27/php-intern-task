<?php

$connection = mysqli_connect("localhost", "root", "", "db_bloodadmin");

$dId = $_GET['deleteId'];

$q = mysqli_query($connection, "update tbl_blood_donate set is_deleted = 1 where donor_id='{$dId}'")
    or die(mysqli_error($connection));

if ($q) {
    echo "<script>alert('Request Rejected!');
                    window.location = './req_history.php'</script>";
}
