<?php
    include_once("db.php");
    if($_SERVER['REQUEST_METHOD']=='GET'){
        echo json_encode(show_product(),JSON_UNESCAPED_UNICODE);
    }
    else{
        echo json_encode('{"messege":"unknow support soon"}',JSON_UNESCAPED_UNICODE);
    }
    function show_product(){
        $mydb = new db();
        $mydb->connect();
        $sql = "SELECT product_id, Product_code, Product_Name, brand";
        $result = $mydb->query($sql);
        $mydb->closedb();
        return $result;
    }
?>