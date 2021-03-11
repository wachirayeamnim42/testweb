<?php
define("hostname", "localhost");
define("user", "user");
define("password", "a2fSVa1VMuQeuFeV");
define("dbname", "bookstore");
?>

<?php
$mysql = new mysqli(hostname, user, password, dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
