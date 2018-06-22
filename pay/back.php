<?php

/**
 * @author www.softiran.org
 * @copyright 2015
 */
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
session_start();
include_once("function.php");
$api = 'c30ef1e97be400d90fcf6239cd8a5248';
$transId = $_POST['transId'];
$result = verify($api,$transId);
$result = json_decode($result);
echo "
        <html>
<body style='background-color: #69221e'>
<h3 style='color: #ffffff;text-align: center ; padding-top: 170px'>$result->errorMessage</h3>
<a href='http://v-ayandeh.ir/product/cart/view'> بازگشت </a>
</body>
</html>
       ";
if ($result->status==1){
    $servername = "localhost";
    $username = "vayandeh_vdb";
    $password = "royal79467946123!@#";
    $dbname = "vayandeh_vdb";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {

    }
    $sql = "UPDATE carts SET verify='1' WHERE orderId=$transId)";

    if ($conn->query($sql) === TRUE) {
        echo "
        <html>
<body style='background-color: #1e7e34'>
<h3 style='color: #ffffff;text-align: center ; padding-top: 170px'> با موفقیت سفارش شما ثبت شد</h3>
<a href='http://v-ayandeh.ir/product/cart/view'> بازگشت </a>
</body>
</html>
       ";
    } else {
        echo "
        <html>
<body style='background-color: #69221e'>
<h3 style='color: #ffffff;text-align: center ; padding-top: 170px'>سفارش نا موفق</h3>
<a href='http://v-ayandeh.ir/product/cart/view'> بازگشت </a>
</body>
</html>
       ";
    }
    $conn->close();
}

?>

