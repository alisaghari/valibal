<?php

/**
 * @author www.softiran.org
 * @copyright 2016
 */
 
//// User complet this value : ////
$merchant = '611604737200004';
$terminal = '61000103';
$admin_email = 'info@v-ayandeh.ir';
///////////////////////////////////
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
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
if($_POST['action'] == 'pay')
{

	if(intval($amount) >= 1000)
	{
		if(!empty($_POST['fullname']))
		{
			$_SESSION['merchantId'] = $merchant;
			$_SESSION['admin_email'] = $admin_email;
			$_SESSION['amount'] = $amount;
			$_SESSION['PayOrderId'] = $invoiceNumber = trim($_POST['PayOrderId']);
			$_SESSION['fullname'] =$_POST['fullname'];
			$_SESSION['email'] =$_POST['email'];
			$redirectAddress = 'http://'.$_SERVER[HTTP_HOST].dirname($_SERVER[PHP_SELF]).'/back.php';
			
			$source = $amount . $invoiceNumber . $merchant . $redirectAddress . $terminal;
			$pat = dirname(__FILE__);
			$fp = fopen($pat . '/public.txt', "r");
			$pub_key = fread($fp, 8192);
			fclose($fp);
			if (strpos($pub_key, '-----BEGIN PUBLIC KEY-----') === false)
				$pub_key = "-----BEGIN PUBLIC KEY-----\n" . $pub_key;

			if (strpos($pub_key, '-----END PUBLIC KEY-----') === false)
				$pub_key .= "\n-----END PUBLIC KEY-----";


			// Amount
			$key_resource = openssl_get_publickey($pub_key);

			openssl_public_encrypt($amount, $crypttext, $key_resource);

			$Amount = base64_encode($crypttext);
			// CRN

			openssl_public_encrypt($invoiceNumber, $crypttext, $key_resource);
			$CRN = base64_encode($crypttext);

			// MID
			openssl_public_encrypt($merchant, $crypttext, $key_resource);
			$MID = base64_encode($crypttext);

			// TID
			openssl_public_encrypt($terminal, $crypttext, $key_resource);
			$TID = base64_encode($crypttext);

			// redirectAddress
			openssl_public_encrypt($redirectAddress, $crypttext, $key_resource);
			$referal = base64_encode($crypttext);

			$key = file_get_contents($pat . '/private.txt');

			if (strpos($key, '-----BEGIN PRIVATE KEY-----') === false)
				$key = "-----BEGIN PRIVATE KEY-----\n" . $key;

			if (strpos($key, '-----END PRIVATE KEY-----') === false)
				$key .= "\n-----END PRIVATE KEY-----";

			$priv_key = openssl_pkey_get_private($key);
			$signature = '';
			openssl_sign($source, $signature, $priv_key, OPENSSL_ALGO_SHA1);
			$inputArray = array("Token_param" => array("AMOUNT" => $Amount,
				"CRN" => $CRN,
				"MID" => $MID,
				"REFERALADRESS" => $referal,
				"SIGNATURE" => base64_encode($signature),
				"TID" => $TID,
			));

			include('nusoap.php');
			$__SOAP = "https://mabna.shaparak.ir/TokenService?wsdl";
			$client = new nusoap_client($__SOAP, 'wsdl');
			$WSResult = $client->call("reservation", $inputArray);
			$signature = base64_decode($WSResult['return']['signature']);
			$ok = openssl_verify($WSResult['return']['token'], $signature, $key_resource);

			openssl_free_key($key_resource);
			if ($ok == 1 && $WSResult['return']['result'] == 0)
			{
				echo '<form id="paymentUTLfrm" action="https://mabna.shaparak.ir" method="POST">
				<input type="hidden" id="TOKEN" name="TOKEN" value="'.$WSResult["return"]["token"].'">
			</form><script>
			function submitmabna() {
				document.getElementById("paymentUTLfrm").submit();
			}
				window.onload=submitmabna; </script>';

				exit;
				
			}
			else
			{
				$Err .='خطا در ساخت توکن :<br/>'.$WSResult["return"]["token"];
			}
		}
		else
		{
			$Err .='نام را وارد کنید<br/>';
		}
	}else
	{
		$Err .='مبلغ صحیح نیست <br/>';
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>پرداخت ساده شرکت مبنا کارت</title>
    <style>
    .textbox{
        font:9pt Tahoma;
    }
    table tr td{
        font:9pt Tahoma;
    }
    </style>
</head>
<body style="background-color: #efefef;">
<center>    
    <form action="" method="POST">        
        <input type="hidden" class="textbox" name="action" id="action" value="pay"/>
        <div style="background-color: #bbe1ff;text-align: center;padding:10px;margin-top:10%;">
        <font color="red" style="font-family: Tahoma;font-size: 13px;"><?php echo $Err; ?></font>
        <table style="background-color: #fff;" align="center">
            <tr>
                <td colspan="2">
                    <center>
                    <img src="logo.png" />
                    <br />
                    </center>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <input type="text" class="textbox" name="fullname" id="fullname" value="<?php echo $_POST['fullname']; ?>"  style="text-align:right;" />
                </td>
                <td>نام پرداخت کننده</td>
            </tr>            
            <tr>
                <td style="text-align: right;">
					<input type="text" class="textbox" name="PayOrderId" id="PayOrderId" value="<?php echo $_POST['PayOrderId']; ?>" readonly="readonly"/>
				</td>
                <td>شماره سفارش</td>
            </tr>
            <tr>
                <td style="direction: rtl;text-align: right;">
					<input type="text" class="textbox" name="PayAmount" id="PayAmount" value="<?php echo  $amount; ?>" style="text-align:left;" />
					 &nbsp;ریال
                </td>
                <td>مبلغ</td>
            </tr>
            <tr>
                <td style="text-align: right;direction:rtl;">
                    <input type="submit" class="textbox" value="پرداخت آنلاین" />
					<input type="button" onclick="window.history.back();" class="textbox" value="انصراف" />
                </td>
                <td>&nbsp; </td>
            </tr>
        </table>
        </div>
    </form>
</center>
<!--//################################## softiran.org ###################################### //-->

</body>
</html>