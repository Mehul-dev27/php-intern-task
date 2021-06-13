<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./d_B.css">
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
    </style>

    <?php

    $connection = mysqli_connect("localhost", "root", "", "db_bloodadmin");

    if ($_POST) {
        // echo "Connected! Welcome to my kingdom";

        $bloodType = $_POST['bloodtype'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $weight = $_POST['weight'];
        $date = $_POST['date'];
        $reason = $_POST['reason'];

        $q = mysqli_query($connection, "insert into tbl_bloodreq(req_bloodgrp,req_name,req_age,req_weight,req_date,req_reason) values('{$bloodType}','$name','{$age}','{$weight}',
        '{$date}','{$reason}')") or die("Error" . mysqli_error($connection));

        if ($q) {
            echo "<script>alert('Request Uploaded!');
                    </script>";
        }
    }

    ?>


    <header>
        <a href="" class="fas fa-bars" id="menu" onclick="showLinks()"></a>
        <a href="" class="fas fa-dropbox"> Blood D<span class="fas fa-heartbeat"></span>nation</a>
        <a href="" class="fas fa-sign-out-alt logOut"> Log-out</a>
    </header>

    <section class="links" id="links">
        <a href="./donor.html" class="fas fa-home active"> Home</a>
        <a href="./donate_blood.php" class="fas fa fa-hand-holding-medical"> Donate Blood</a>
        <a href="./donate_history.php" class="fas fa-history"> Donation History</a>
        <a href="#" class="fas fa-sync-alt"> Blood Request</a>
        <a href="./req_history.php" class="fas fa-history"> Request History</a>
    </section>

    <section class="dashboard" id="dashboard">
        <!-- donate blood container -->
        <div class="donate_board dashboardItem" id="donate_board">
            <div class="form_box" id="form_box">
                <div class="heading_box">
                    <h1>REQUEST BLOOD</h1>
                </div>
                <form id="blood_donation" action="" class="input-group" method="post">
                    <label for="blood">Blood Group:</label>
                    &nbsp; &nbsp;
                    <select name="bloodtype" id="bloodType">
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select><br><br><br>
                    <label for="blood">Patient Name : </label><br>
                    <input type="text" name="name" class="input-field"><br><br>
                    <label for="blood">Age : </label><br>
                    <input type="number" name="age" class="input-field" required><br><br>
                    <label for="blood">Weight : </label><br>
                    <input type="number" name="weight" class="input-field" required><br><br>
                    <label for="blood">Date : </label><br>
                    <input type="date" name="date" class="input-field" required><br><br>
                    <label for="blood">Reason : </label><br>
                    <input type="text" name="reason" class="input-field" placeholder="If any" required><br><br>
                    <button type="submit" class="submit-btn"> Request</button>
                </form>
            </div>

        </div>
        <!-- donate blood container ends -->

    </section>
    <script src="../P-11/node.js"></script>

</body>

</html>