<?php
session_start();
$message="";
if(count($_POST)>0){
include_once("db.php");
$result = mysqli_query($mysql,"SELECT * FROM `member` WHERE `user` ='" . $_POST["username"] . "' and `password` = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["member_id"] = $row['member_id'];
        $_SESSION["name"] = $row['name'];
        $message = "Username or Password Correct!!";
        echo $message;
        } 
        else {
         $message = "Invalid Username or Password!";
         echo $message;
        }
    }
    if(isset($_SESSION["member_id"])) {
    header("Location:product_list.php");
    }
