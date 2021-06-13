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
        <a href="./donor.html" class="fas fa-home active"> Home</a>
        <a href="./donate_blood.php" class="fas fa fa-hand-holding-medical"> Donate Blood</a>
        <a href="#" class="fas fa-history"> Donation History</a>
        <a href="./blood_req.php" class="fas fa-sync-alt"> Blood Request</a>
        <a href="./req_history.php" class="fas fa-history"> Request History</a>
    </section>

    <section class="dashboard" id="dashboard">
        <!-- table container starts -->
        <div class="table-container dashboardItem" id="formTable">
            <h1 class="heading">DONATION HISTORY</h1>
            <?php
            // DB connection
            $connection = mysqli_connect("localhost", "root", "", "db_bloodadmin");

            // Query
            $q = mysqli_query($connection, "select * from tbl_blood_donate where is_accepted = 0 and is_deleted= 0") or die(mysqli_error($connection));

            echo "<table class ='table' id='table'>";

            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Blood Group</th>";
            echo "<th>Dieases</th>";
            echo "<th>Age</th>";
            echo "<th>Weight</th>";
            echo "<th>Last Visited Country</th>";
            echo "<th>Action</th>";
            echo "</tr>";
            echo "</thead>";

            $i = 0;
            while ($row = mysqli_fetch_array($q)) {
                $i++;
                echo "<tr>";
                echo "<td>{$i}</td>";
                // echo "<td>{$row['donor_id']}</td>";
                echo "<td>{$row['donor_bloodtype']}</td>";
                echo "<td>{$row['donor_disease']}</td>";
                echo "<td>{$row['donor_age']}</td>";
                echo "<td>{$row['donor_weight']}</td>";
                echo "<td>{$row['donor_lastCountry']}</td>";
                echo "<td><a href='acceptDonation.php?acceptId={$row['donor_id']}' id='accept'>ACCEPT</a> 
                                | <a href='deleteDonation.php?deleteId={$row['donor_id']}'>REJECT</a></td>";
                echo "</tr>";
            }
            echo "</table>";



            ?>
        </div>
        <!-- table container ends -->

    </section>
    <script src="../P-12/node.js"></script>

</body>

</html>