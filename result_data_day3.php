<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
</head>
<body>
    <style>
    body{
        margin:0;
        padding:0;
        box-sizing:border-box;
        background-color: rgba(12, 10, 50, 0.5);
    }
    .container {
        background-image: linear-gradient(to bottom, #669aa0, #5c9ba2, #519ca3, #449da5, #349ea6);
        width: 440px;
        height: 410px;
        margin: 10% auto;
        border-radius: 25px;
        font-size:1.3rem;
        line-height:40px;
        text-align:center;
        color: #f1f1f1;
    }
    </style>


    <div class="container">
        <?php

        $name = $_POST['stuName'];
        $roll_no = $_POST['stuNo'];
        $maths = $_POST['maths'];
        $science = $_POST['science'];
        $english = $_POST['english'];
        $computer = $_POST['computer'];
        $guj = $_POST['guj'];

        $total_marks = $maths + $science + $computer + $english + $guj;
        $avg = $total_marks/5;

        echo "Your name is : <b>$name</b>  and Roll No : <b>$roll_no</b> <br>";
        echo "Your marks in subjects as: <br>";
        echo "Maths : <b>$maths</b><br>";
        echo "Science : <b>$science</b><br>";
        echo "English : <b>$english</b> <br>";
        echo "Computer : <b>$computer</b> <br>";
        echo "Gujarati : <b>$guj</b><br>";
        echo "Total Marks : <b>$total_marks</b> <br>";
        echo "Avarage : <b>$avg</b><br>";
        if($avg > 80){
            echo "And You got First Class <br>";
        }else if($avg > 70){
            echo "And You got Second Class <br>";
        }else if($avg > 50) {
            echo "And You got Second Class <br>";
        }else {
            echo "<b>Sorry! You are Failed in exam.</b>";
        }

        
    ?>
    
    </div>
    


</body>
</html>