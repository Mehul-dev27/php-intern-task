<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./d_h.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <style>
        .dashboard {
            background-image: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.70)),
                url(./image2.jpg);
        }

        .dashboard a {
            color: #f1f1f1;
            background-color: red;
            padding: 3px;
        }

        .dashboard #accept {
            background-color: green;
            
        }

        .dashboard a:hover {
            text-decoration: underline;
        }
    </style>

    <header>
        <a href="" class="fas fa-bars" id="menu" onclick="showLinks()"></a>
        <a href="" class="fas fa-dropbox"> Blood D<span class="fas fa-heartbeat"></span>nation</a>
        <a href="" class="fas fa-sign-out-alt logOut"> Log-out</a>
    </header>

    <section class="links" id="links">
        <a href="donor.html" class="fas fa-home active"> Home</a>
        <a href="./donate_blood.php" class="fas fa fa-hand-holding-medical"> Donate Blood</a>
        <a href="./donate_history.php" class="fas fa-history"> Donation History</a>
        <a href="./blood_req.php" class="fas fa-sync-alt"> Blood Request</a>
        <a href="#" class="fas fa-history"> Request History</a>
    </section>

    <section class="dashboard" id="dashboard">
        <!-- table container starts -->
        <div class="table-container dashboardItem" id="formTable">
            <h1 class="heading">REQUEST HISTORY</h1>


            <?php
            // DB connection
            $connection = mysqli_connect("localhost", "root", "", "db_bloodadmin");

            // Query
            $q = mysqli_query($connection, "select * from tbl_bloodreq where is_deleted=0 and is_accepted=0") or die(mysqli_error($connection));

            echo "<table class ='table' id='table'>";

            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Blood Group</th>";
            echo "<th>Age</th>";
            echo "<th>Weight</th>";
            echo "<th>Date</th>";
            echo "<th>Reason</th>";
            echo "<th>Action</th>";
            echo "</tr>";
            echo "</thead>";

            $i = 0;
            while ($row = mysqli_fetch_array($q)) {
                $i++;
                echo "<tr>";
                echo "<td>{$i}</td>";
                // echo "<td>{$row['req_id']}</td>";
                echo "<td>{$row['req_name']}</td>";
                echo "<td>{$row['req_bloodgrp']}</td>";
                echo "<td>{$row['req_age']}</td>";
                echo "<td>{$row['req_weight']}</td>";
                echo "<td>{$row['req_date']}</td>";
                echo "<td>{$row['req_reason']}</td>";
                echo "<td><a href='accepteRequest.php?acceptId={$row['req_id']}' id='accept'>ACCEPT</a> 
                                | <a href='deleteRequest.php?deleteId={$row['req_id']}'>REJECT</a></td>";
                echo "</tr>";
            }
            echo "</table>";



            ?>

        </div>
        <!-- table container ends -->

    </section>


</body>

</html>