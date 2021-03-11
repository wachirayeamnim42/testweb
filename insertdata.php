<?php
define("hostname", "localhost");
define("user", "user");
define("password", "a2fSVa1VMuQeuFeV");
define("dbname", "bookstore");
?>

<?php
$mysql = new mysqli(hostname, user, password, dbname);

// Check connection
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}
echo "Connected successfully";
$Bid = mysqli_real_escape_string($mysql, $_REQUEST['Bid']);
$Bname = mysqli_real_escape_string($mysql, $_REQUEST['Bname']);
$Btype = mysqli_real_escape_string($mysql, $_REQUEST['Btype']);
$Bstatus = mysqli_real_escape_string($mysql, $_REQUEST['Bstatus']);
$Bpub = mysqli_real_escape_string($mysql, $_REQUEST['Bpub']);
$Bprice = mysqli_real_escape_string($mysql, $_REQUEST['Bprice']);
$Brent = mysqli_real_escape_string($mysql, $_REQUEST['Brent']);
$Bamou = mysqli_real_escape_string($mysql, $_REQUEST['Bamou']);
$Bdate = mysqli_real_escape_string($mysql, $_REQUEST['Bdate']);
echo "<br>";
$sql = "INSERT INTO `book`(`BookID`, `BookName`, `TypeID`, `StatusID`, `Publish`, `UnitPrice`, `UnitRent`, `DayAmount`,`BookDate`) 
  VALUES ('$Bid','$Bname','$Btype','$Bstatus','$Bpub','$Bprice','$Brent','$Bamou','$Bdate')";

if ($mysql->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysql->error;
}
echo "<br>";
echo "<a href = 'forminsert.php'>Back..</a>";

$mysql->close();
?>
