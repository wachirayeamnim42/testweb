<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insertdata.php" method="POST">
        <label for="fname">Book ID:</label><br>
        <input type="text"  name="Bid" ><br>
        <label for="lname">Book Name:</label><br>
        <input type="text"  name="Bname" ><br>
        <label for="lname">Type ID:</label><br>
        <input type="text"  name="Btype" ><br>
        <label for="lname">Status ID:</label><br>
        <input type="text"  name="Bstatus" ><br>
        <label for="lname">Publish:</label><br>
        <input type="text"  name="Bpub" ><br>
        <label for="lname">Unit Price:</label><br>
        <input type="number"  name="Bprice" ><br>
        <label for="lname">Unit Rent:</label><br>
        <input type="number"  name="Brent" ><br>
        <label for="lname">Day Amount:</label><br>
        <input type="number"  name="Bamou" ><br>
        <label for="lname">Piceture:</label><br>
        <input type="text" id="Bpic" name="Bpic" ><br>
        <label for="lname">Book Date:</label><br>
        <input type="text" id="Bdate" name="Bdate" value="yy-mm-dd"><br><br>
        <input type="submit" value="Submit">
        <a href = 'showdata.php'>Go to Show Data!!!</a>
    </form>
</body>

</html>