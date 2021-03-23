<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>

<body>
    <form action="register_add.php" method="POST">
        <h3>ShopShock Member Register</h3>
        <center>
            <hr>
            <h3>Name:<input type="text" id="name"></h3>
            <h3>NickName:<input type="text" id="nickname"></h3>
            <h3>Password:<input type="password" id="pass"></h3>
            <h3>Confirm Password:<input type="password" id="conpass"></h3><br>
            <hr>
            <button type="submit" value="Submit">Submit</button>
            <button type="reset" value="Reset">Reset</button>
    </form>
    </center>
</body>

</html>