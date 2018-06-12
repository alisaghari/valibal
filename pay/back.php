<?php

/**
 * @author www.softiran.org
 * @copyright 2015
 */
 error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
session_start();
function send_mail($to_email,$ref) {
	require_once('class.phpmailer.php');
$message ="<div dir='rtl' >
	پرداخت کامل شده است <br/>
	کد پیگیری : ".$ref."
	</div>";
	$mail = new PHPMailer(true); 
	try {
	$from_name = $_SERVER[HTTP_HOST];
	$from_email = 'info@'.$_SERVER[HTTP_HOST];
	  $mail->AddReplyTo($from_email, $from_name);
	  $mail->SetFrom($from_email, $from_name);
	  $mail->AddAddress($to_email, $to_email);
	  $mail->CharSet = 'UTF-8';
	  $mail->Subject = 'پرداخت کامل شده است ';
	  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; 
	  $mail->MsgHTML($message);

	  $mail->Send();
	  return 1;
	} catch (phpmailerException $e) {
	  echo $e->errorMessage(); 
	} catch (Exception $e) {
	  echo $e->getMessage(); 
	}
}
$res = '<font color="red" ><b>پرداخت شما کامل نشد</b><font>';
$wsdl = "https://kica.shaparak.ir/epay/services/merchant.wsdl"; 
$flag = false;
if( isset($_POST['CRN']) && isset($_POST['TRN']) && isset($_POST['RESCODE']) && $_POST['RESCODE'] == '00' ) 
{
		include_once('nusoap.php');
		$merchant = $_SESSION['merchantId'];

		$client = new nusoap_client("https://mabna.shaparak.ir/TransactionReference/TransactionReference?wsdl", 'wsdl');
		$error = $client->getError();
		$pat = dirname(__FILE__);
		$fp = fopen($pat . '/public.txt', "r");
		$pub_key = fread($fp, 8192);
		fclose($fp);
		if (strpos($pub_key, '-----BEGIN PUBLIC KEY-----') === false)
			$pub_key = "-----BEGIN PUBLIC KEY-----\n" . $pub_key;

		if (strpos($pub_key, '-----END PUBLIC KEY-----') === false)
			$pub_key .= "\n-----END PUBLIC KEY-----";

		$key_resource = openssl_get_publickey($pub_key);

		openssl_public_encrypt($_POST["TRN"], $crypttext, $key_resource );
		$TRN = base64_encode($crypttext);

		// CRN
		openssl_public_encrypt($_POST["CRN"], $crypttext, $key_resource );
		$CRN = base64_encode($crypttext);

		// MID
		openssl_public_encrypt($merchant, $crypttext, $key_resource );
		$MID = base64_encode($crypttext);

		// Sign data
		$source = $merchant.$_POST["TRN"].$_POST["CRN"];
		
		$key = file_get_contents($pat . '/private.txt');

		if (strpos($key, '-----BEGIN PRIVATE KEY-----') === false)
			$key = "-----BEGIN PRIVATE KEY-----\n" . $key;

		if (strpos($key, '-----END PRIVATE KEY-----') === false)
			$key .= "\n-----END PRIVATE KEY-----";
	
		$priv_key = openssl_pkey_get_private($key);
		$signature = '';
		openssl_sign($source, $signature, $priv_key, OPENSSL_ALGO_SHA1);
		$inputArray = array("SaleConf_req" => array("MID"    => $MID,
													"CRN"    => $CRN,
													"TRN"    => $TRN,
													"SIGNATURE" => base64_encode($signature)));
		$WSResult = $client->call("sendConfirmation", $inputArray);
		$error = $client->getError();
		$signature = base64_decode($WSResult["return"]["SIGNATURE"]);
		$data      = $WSResult["return"]["RESCODE"].$WSResult["return"]["REPETETIVE"].$WSResult["return"]["AMOUNT"].$WSResult["return"]["DATE"].$WSResult["return"]["TIME"].$WSResult["return"]["TRN"].$WSResult["return"]["STAN"];

		// state whether signature is okay or not
		$ok = openssl_verify($data, $signature, $key_resource);
		if ($ok == 1) 
		{
			 if (($WSResult['return']['RESCODE'] == '00') && ($WSResult['return']['successful'] == true)) 
			 {
						//Payment verfed and OK !
						
						$referenceId = $WSResult["return"]["TRN"];
						send_mail($_SESSION['email'],$referenceId);
						send_mail($_SESSION['admin_email'],$referenceId);
						$res = '<font color="green" ><b>پرداخت شما کامل شده است</b><font>';
						$msg = 'کد پیگیری : '.$referenceId;
						$flag = true;
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
                        $sql = "UPDATE carts SET verify='1' WHERE orderId=$_POST[CRN])";

                        if ($conn->query($sql) === TRUE) {
                            echo "با موفقیت سفارش شما ثبت شد";
                        } else {
                            echo "Error updating record: " . $conn->error;
                        }
                        $conn->close();


///amount
			 }else
			{
				$msg = 'سفارش قبلا پرداخت شده است';
			}
		}else
		{
			$msg = 'خطا در وریفای اطلاعات';
		}

}
else
{
	$msg = 'برگشت ناموفق از درگاه';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>نتیجه تراکنش</title>
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

        <div style="background-color: #bbe1ff;text-align: center;padding:10px;margin-top:10%;">
        <font color="red" style="font-family: Tahoma;font-size: 13px;"></font>
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
                <td style="text-align: center;" colspan="2">
                   <?php echo $res ; ?>
                </td>
            </tr> 
			<tr>
                <td style="text-align: center;color:<?php if($flag) echo 'green'; else echo 'red'; ?>" colspan="2">
                   <?php echo $msg ; ?>
                </td>
            </tr> 
			<tr>
                <td style="text-align: center;" colspan="2">
                   <a href="./index.php" ><b>برگشت</b></a>
                </td>
            </tr>            
        </table>
        </div>

</center>
<!--//################################## softiran.org ###################################### //-->
</body>
</html>