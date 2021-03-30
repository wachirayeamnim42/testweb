<?php 
    session_start();
    $_SESSION['cus_id']= 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload= "load_doc()">
    <center>
        <div id="out"></div>
        <br>
        <div id="out2"></div>
    </center>
    <script>
    let arr;
    let cus_id = <?= $_SESSION['cus_id'] ?>;
    label = ['item id','product code','product name','brand','หน่วยนับ','ราคาขาย','จำนวนสินค้าที่ต้องการ'];
    function load_doc(){
        out = document.getElementById("out");
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState==4 && this.status==200){
                alert(arr);
                arr= JSON.parse(this.responseText);
                text = "<table border='1'>";
                for(i=0;i<label.length-1;i++){
                    text += "<th>"+label[i]+"</th>";
                }
                text = "<tr>"+text+"</tr>";
                for(i=0;i<arr.length;i++){
                    for(j=0;j<arr[i].length-1;j++){
                        text += "<td>"+arr[i][j]+"</td>";
                    }
                    text += "<td>"+"<button onclick='sel_product("+i+")'>< ShopShock ></button>"+"<td>";
                    text = "<tr>"+text+"</tr>";
                }

                text += "</table>";
                out.innerHTML = text;
            }
        }
        xhttp.open("GET","product_rest.php",true);
        xhttp.send();
    }

    function sel_product(idx){
        out = document.getElementById("out2");
        text = "";
        text += "<table border='1'>";
        for(i=0;i<label.length-1;i++){
            text += "<tr><td>"+label[i]+"</td>";
            text += "<td>"+arr[idx][i]+"</td></tr>";
        }
        text += "<tr><td>"+label[6]+"</td>";
        text += "<td><input type='number' id='n"+idx+"' min='1' max='"+arr[idx][6]+"'></td></tr>";
        text += "<tr><td colspan='2'><button onclick='open_po("+idx+","+cus_id+")'>add to cart</button><input type='reset'></td></tr>"
        text += "</table>";
        out.innerHTML = text;
    }

    function open_po(idx,cus_id){
        qty = document.getElementById("n"+idx);
        alert("product_code="+arr[idx][1]+"="+qty.value);
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){ 
            if(this.readyState==4 && this.status==200){
                alert(this.responseText);
            }
        }
        xhttp.open("POST","product_rest.php",true);
        xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhttp.send("p_id="+arr[idx][0]+"&p_qty="+qty.value+"&p_price="+qty.value+"&cus_id="+cus_id);
    }
    </script>
</body>
</html>