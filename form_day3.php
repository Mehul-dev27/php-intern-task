<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>Input form</h2>
    <form action="form_data_day3.php" method="post">

        <table>
        <tr>
            <td>Name : </td>
            <td><input type="text" name="text1" id="" required></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><input type="email" name="text2" id="" required></td>
        </tr>
        <tr>
            <td>Age : </td>
            <td><input type="number" name="text3" id="" min="1" max="100" required></td>
        </tr>
        <tr>
            <td>Password : </td>
            <td><input type="password" name="text4" id="" required></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
            <td><input type="reset"></td>
        </tr>
        
        </table>

    </form>
</body>
</html>