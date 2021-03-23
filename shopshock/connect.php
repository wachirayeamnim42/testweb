<?php
define("hostname", "localhost");
define("root", "root");
define("password", "");
define("dbname", "shopshock");
?>

<?php
$mysql = new mysqli(hostname, root, password, dbname);

// Check connection
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error)."<br>";
}
echo "Connected successfully<br>";
