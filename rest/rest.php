<?php
//02
    include_once("../rest/dbconfig.php");
    include_once("../rest/util.php");
    $debug_mode = false;

    if($_SERVER['REQUEST_METHOD']=='GET'){
        debug_text("GET METHOD Process...",$debug_mode);
        echo json_encode(show_data($debug_mode));

    }else if($_SERVER['REQUEST_METHOD']=='POST'){
        $mydb = new db("root","","personal",$debug_mode);
        debug_text("POST METHOD May be implement soon...",$debug_mode);
        $mydb->query(add_data($debug_mode));
        // echo json_encode($insert);
        // echo json_encode(add_data($debug_mode));

    }else{
        debug_text("Error this site Unsupport This request",$debug_mode);
        http_response_code(405);
    }

    function show_data($debug_mode){
        $mydb = new db("root","","personal",$debug_mode);
        $data = $mydb->query("Select * from data");
        $mydb->close();
        return $data;
    }

    function add_data($debug_mode){
        $mydb = new db("root","","personal",$debug_mode);
        $data = $mydb->query("INSERT INTO `data`(`id`, `name`, `age`) 
        VALUES ('d.value','n.value','a.value')");
        $mydb->close();
        return $data;
    }
?>