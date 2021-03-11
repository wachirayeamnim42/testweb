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

$sql = "SELECT `BookID`, `BookName`, `TypeID`, `StatusID`, `Publish`, `UnitPrice`, `UnitRent`, `DayAmount`, `Picture`, `BookDate` FROM `book`";
$result = $mysql->query($sql);
echo "<table border = '1'>";
echo "<tr>";
echo "<th>BookID</th>";
echo "<th>BookName</th>";
echo "<th>TypeID</th>";
echo "<th>StatusID</th>";
echo "<th>Publish</th>";
echo "<th>UnitPrice</th>";
echo "<th>UnitRent</th>";
echo "<th>DayAmount</th>";
echo "<th>Picture</th>";
echo "<th>BookDate</th>";
echo "</tr>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row["BookID"]."</td>";
      echo "<td>".$row["BookName"]."</td>";
      echo "<td>".$row["TypeID"]."</td>";
      echo "<td>".$row["StatusID"]."</td>";
      echo "<td>".$row["Publish"]."</td>";
      echo "<td>".$row["UnitPrice"]."</td>";
      echo "<td>".$row["UnitRent"]."</td>";
      echo "<td>".$row["DayAmount"]."</td>";
      echo "<td>".$row["Picture"]."</td>";
      echo "<td>".$row["BookDate"]."</td>";
      echo "</tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
$mysql->close();
?>

<?php
echo "<a href = 'forminsert.php'>Insert Data</a>";
?>
