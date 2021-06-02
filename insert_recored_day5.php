<?php 

$connection = mysqli_connect("localhost","root","","db_internship");

if($_POST){
    // echo "Record Inserted";
    $name = $_POST['text1'];
    $gender = $_POST['text2'];
    $mobile = $_POST['text3'];

    $q = mysqli_query($connection,"insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','$gender','{$mobile}')") or die("Error" . mysqli_error($connection));

    if($q){
    echo "<script>alert('Record Inserted!')</script>";
}
}

?>


<html>
    <body>
        <form method= "post">
            Name : <input type="text" name = "text1"/>
            <br>
            <br>
            Gender : <select name = "text2">
                <option>Male</option>
                <option>Female</option>
            </select>
            <br>
            <br>
            Mobile No   : <input type="number" name="text3"/>
            <br>
            <br>
            <input type="submit"/>
        </form>
    </body>
</html>