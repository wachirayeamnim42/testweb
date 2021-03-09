<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";
$conn = mysql_connect($hostname, $username, $password);
if (!$conn ) die ("ไม่สามารถติดต่อกับ MySQL ได้");
mysql_select_db ($dbname, $conn)or die ("ไม่สามารถเลือกฐานข้อมูล itbookได้");
$sqltxt = "SELECT * FORM book";
$result = mysql_query($sqltxt, $conn);
echo "<html><head><title>Test Database</title></head>";
echo "<body><CENTER><H3>รายชื่อหนังสือ</H3></CENTER>";
echo "<table width='100%' border='1' align='center'>";
echo "<tr><td>ลำดับที่ </td> <td>รหัสหนังสือ</td><td>ชื่อหนังสือ</td>";
echo "<td>ประเภทหนังสือ </td> <td>สถานะหนังสือ</td><td>สำนักพิมพ์</td>";
echo "<td>ราคาหนังสือ </td> <td>ราคาเช่าหนังสือ</td><td>จำนวนวัน</td>";
echo "<td>รูปภาพ </td> <td>วันที่ซื้อ</td></tr>";

?>