<?php
    session_start();
    unset($_SESSION["member_id"]);
    unset($_SESSION["name"]);
    header("Location:login.php")
?>