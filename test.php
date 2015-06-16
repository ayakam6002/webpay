
<?php
require "vendor/autoload.php";
use WebPay\WebPay;
$webpay = new WebPay('test_secret_dK27Ix1Ja1lS8AffC00WN9Uw');
$webpay->charge->create(array(
   "amount"=>400,
   "currency"=>"jpy",
   "card"=>"tok_SampleCardToken",
   "capture"=>false
));
