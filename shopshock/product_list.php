<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body onload="product_list()">
<center>
    <p style="text-align: right;"><a href="logout.php">Logout</a></p>
    <h1>ยินดีต้อนรับเข้าสู่เมนูลูกค้า</h1>
    <a href="#">สั่งซื้อสินค้า</a> | <a href="#">ชำระเงิน</a> | <a href="#">ออกจากระบบ</a>
    <h1>SHOPSHOCK</h1>
    <h3>Select Product to Cart</h3>
</center>
<script>
    function product_list(){
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                arr = JSON.parse(this.responseText);
                plist =document.getElementById("p_list");
                text = "";
                text += "<table border = 1>";
                text += "<tr><th>ID</th>";
                text += "<th>Product_code</th>";
                text += "<th>Product_Name</th>";
                text += "<th>Brand</th>";
                text += "<th>Unit</th>";
                text += "<th>Cost</th>";
                text += "<th></th></tr>";
                for(i=0;i<arr.length;i++){
                    text += i+"<br>";
                    text += "<tr><td>"+arr[i]["product_id"]+"</td>";
                    text += "<td>"+arr[i]["product_code"]+"</td>";
                    text += "<td>"+arr[i]["product_Name"]+"</td>";
                    text += "<td>"+arr[i]["Brand_name"]+"</td>";
                    text += "<td>"+arr[i]["Unit_name"]+"</td>";
                    text += "<td>"+arr[i]["Cost"]+"</td>";
                    text += "<td>"+arr[i]["stock_quantity"]+"</td>";
                    text += "<td><a href='#'><ShopShock></a></td>";
                    text += "</tr>";
                }
                text += "</table>";
            }
        }
    }
</script>
</body>
</html>