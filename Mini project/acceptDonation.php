<?php

$connection = mysqli_connect("localhost", "root", "", "db_bloodadmin");

$aId = $_GET['acceptId'];

$q = mysqli_query($connection, "update tbl_blood_donate set is_accepted = 1 where donor_id='{$aId}'")
    or die(mysqli_error($connection));



if ($q) {
    echo "<script>alert('Request Accepted!');
                    window.location = './donate_history.php'</script>";
}
?>