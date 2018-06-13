<?php

/**
 * @author www.softiran.org
 * @copyright 2016
 */


session_start();
//amount
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "valibal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM carts INNER JOIN products ON carts.product_id=products.id where carts.user_id=$_SESSION[user_id]";
$result = $conn->query($sql);
$amount=0;

foreach ($result as $cart){
    $amount+= $cart["price"];
}

$sql = "UPDATE carts SET orderId='$_POST[PayOrderId]' WHERE user_id=$_SESSION[user_id]";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();


///amount
$Err = '';
if($_POST['action'] == 'pay') {
//
    include_once("function.php");
    $api = 'c30ef1e97be400d90fcf6239cd8a5248';
    $amount = $amount;
    $redirect = 'http://' . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . '/back.php';
    $factorNumber = $_POST['PayOrderId'];
    $result = send($api, $amount, $redirect, $factorNumber);
    $result = json_decode($result);
    if ($result->status) {
        $go = "https://pay.ir/payment/gateway/$result->transId";
        header("Location: $go");
    } else {
        echo $result->errorMessage;
    }
    //
}