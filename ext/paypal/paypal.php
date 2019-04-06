<?php 

 define('REQUIRE_POST_TOKEN', false); // Allow unsigned external incoming POST data
  require_once('../../includes/app_header.inc.php');

$raw_post_data = file_get_contents('php://input');
$raw_post_array = explode('&', $raw_post_data);
$myPost = array();
foreach ($raw_post_array as $keyval) {
    $keyval = explode ('=', $keyval);
    if (count($keyval) == 2)
        $myPost[$keyval[0]] = urldecode($keyval[1]);
}

// Read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';
if(function_exists('get_magic_quotes_gpc')) {
    $get_magic_quotes_exists = true;
}
foreach ($myPost as $key => $value) {
    if($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
        $value = urlencode(stripslashes($value));
    } else {
        $value = urlencode($value);
    }
    $req .= "&$key=$value";
}

/*
 * Post IPN data back to PayPal to validate the IPN data is genuine
 * Without this step anyone can fake IPN data
 */
$paypalURL = "https://www.sandbox.paypal.com/cgi-bin/webscr";

if(  $_GET['test_payment'] == 'false'  )
    $paypalURL = "https://www.paypal.com/cgi-bin/webscr";

$ch = curl_init($paypalURL);
if ($ch == FALSE) {
    return FALSE;
}
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSLVERSION, 6);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);

// Set TCP timeout to 30 seconds
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close', 'User-Agent: company-name'));
$res = curl_exec($ch);

/*
 * Inspect IPN validation result and act accordingly
 * Split response headers and payload, a better way for strcmp
 */ 
$tokens = explode("\r\n\r\n", trim($res));
$res = trim(end($tokens));
if (strcmp($res, "VERIFIED") == 0 || strcasecmp($res, "VERIFIED") == 0) {
    


	  // Make sure we have a UID
	  if (empty($_GET['order_uid'])) {
	    http_response_code(400);
	    die('Bad Request');
	  }
	 
		// Get Order From Database (In this example using UID)
		// To be able to find the order in the database, the order must previously have been saved.
	  $orders_query = database::query(
	    "select * from ". DB_TABLE_ORDERS ."
	    where uid = '". database::input($_GET['order_uid']) ."'
	    limit 1;"
	  );
	 
	  if (!$order = database::fetch($orders_query)) {
	    http_response_code(404);
	    die('File Not Found');
	  }


	  // Initiate $order as the order object
	  //$order = new ctrl_order('load', $order['id']); // LiteCart 1.0
	  //$order = new ctrl_order($order['id']); // LiteCart 2.0
	  



	 if( ( number_format($order['payment_due'],2) == number_format($_POST['mc_gross'],2) ) &&
	     ( $_POST['payment_status'] == 'Completed' ) &&
	     ( $order['currency_code'] == $_POST['mc_currency'] ) ) {
 
    	 $update_query = database::query(
    	    "update ". DB_TABLE_ORDERS ."
    	    set order_status_id='2', payment_transaction_id =  '". database::input($_POST['txn_id']) ."'
    	    where uid = '". database::input($_GET['order_uid']) ."'"
    	  );
    	  

	 }
	 
	 
	 


}


