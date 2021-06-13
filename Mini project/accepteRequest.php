<?php

$connection = mysqli_connect("localhost", "root", "", "db_bloodadmin");

$aId = $_GET['acceptId'];

$q = mysqli_query($connection, "update tbl_bloodreq set is_accepted = 1 where req_id='{$aId}'")
    or die(mysqli_error($connection));



if ($q) {
    echo "<script>alert('Request Accepted!');
                    window.location = './req_history.php'</script>";
}
?>