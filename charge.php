<?php
require 'vendor/autoload.php';
use WebPay\WebPay;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$webpay = new WebPay('test_secret_dK27Ix1Ja1lS8AffC00WN9Uw');
	$result = $webpay->charge->create(array(
	'amount' => $_POST['amount'],
	'currency' => 'jpy',
	'card' => $_POST['webpay-token'],
	));	
}
?>
<!doctype html>
<html>
<body>
<form action= '/webpay/charge.php' method='post'>
  金額: <input type= 'text' name= 'amount'><br/>
  <script src="https://checkout.webpay.jp/v2/" class="webpay-button" data-key="test_public_2ThcpGcx91PsdhN8QA4qP3We" data-lang="ja"></script>
</form>

</body>
</html>
