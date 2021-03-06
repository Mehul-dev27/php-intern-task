<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>

    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container {
        height:100vh;
        background-image: linear-gradient(to bottom, #3d4458, #5a6279, #79829b, #99a3bf, #bbc6e4);
    }
    h2{
        text-align:center;
        padding-top:6%;
        text-decoration:underline;
        
    }
    h3{
        margin-left:20px;
    }
    form {
        width: 440px;
        height: 430px;
        margin: 3% auto;
        background-color: rgba(48, 49, 43, 0.5);
        border-radius: 10px;
        color: #f1f1f1;
    }
    .container table tbody tr td {
        padding :15px;
        border-radius:15px;
    }
    .submit-btn {
        width: 40%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: 10px auto;
        background: linear-gradient(to right,#33ccff,#00ffff);
        border: 0;
        outline: none;
        border-radius: 30px;
    }

    </style>

    <div class="container">
        <h2>Enter Students marks below in form: </h2>

    <form action="result_data_day3.php" method="post" >
    
        <table>
            <tbody>
                <tr>
                    <td><h3>Name : </h3> </td>
                    <td><input type="text" name="stuName" id=""></td>
                    
                </tr>
                <tr>
                    <td><h3>Roll no: </h3></td>
                    <td><input type="number" name="stuNo" id=""></td>
                </tr>
                <tr>
                    <td><h3>Maths:</h3></td>
                    <td><input type="number" name="maths" id="" min="0" max="100" ></td>
                </tr>
                <tr>
                    <td><h3>Science:</h3></td>
                    <td><input type="number" name="science" id="" min="0" max="100"></td>
                </tr>
                <tr>
                    <td><h3>English:</h3></td>
                    <td><input type="number" name="english" id="" min="0" max="100"></td>
                </tr>
                <tr>
                    <td><h3>Computer:</h3></td>
                    <td><input type="number" name="computer" id="" min="0" max="100"></td>
                </tr>
                <tr>
                    <td><h3>Gujarati:</h3></td>
                    <td><input type="number" name="guj" id="" min="0" max="100"></td>
                </tr>
                
            </tbody>
        </table>
        <button type="submit" class="submit-btn"> Submit</button>
    
    </form>

    
    </div>

    
    


</body>
</html>