<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
<form action="PO.php" method="POST">
        <center>
        <h1>ShopShock</h1>
        <h3>Select Product to Cart</h3>
        </center>
        <h3>Add Product to CART</h3>
            <hr>
            <center>
            <h3>Product_ID:<input type="text" id="p_id"></h3>
            <h3>Product_Code:<input type="text" id="p_code"></h3>
            <h3>Product_Name:<input type="text" id="p_name"></h3>
            <h3>Brand:<input type="text" id="brand"></h3>
            <h3>Unit:<input type="text" id="unit"></h3>
            <h3>Cost:<input type="text" id="cost"></h3>
            <h3>Quantity:<input type="number" id="quantity"></h3>
            <hr>
            <button type="submit" value="Submit">Submit</button>
            <button type="reset" value="Reset">Reset</button>
            </center>
    </form>
</body>
</html>