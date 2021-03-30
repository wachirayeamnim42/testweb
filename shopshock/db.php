<?php
define("hostname", "localhost");
define("root", "root");
define("password", "");
define("dbname", "shopshock");
?>

<?php
class db{
    private $mysqli;
    function connect(){
        $this->$mysqli =  new mysqli(hostname, root, password, dbname);
        $this->$mysqli->set_charset("utf-8");
        // Check connection
        if ($this->$mysqli->connect_errno) {
            echo "Connection failed: " .$mysqli->connect_error . "<br>";
        }
        echo "Connected successfully<br>";
        }
}
