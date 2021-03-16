<?php
class classtest
{

    public function connect()
    {
        define("hostname", "localhost");
        define("user", "user");
        define("password", "a2fSVa1VMuQeuFeV");
        define("dbname", "bookstore");
        $mysql = new mysqli(hostname, user, password, dbname);
        // Check connection
        if ($mysql->connect_error) {
            die("Connection failed: " . $mysql->connect_error);
        }
        echo "Connected successfully";
    }
}
