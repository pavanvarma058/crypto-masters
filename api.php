<?php
require_once("./classes/CryptoConverter.php");

header("content-type: application/json");
header("Access-Control-Allow-Origin: *");

//if(!isset($_GET["code"])){
//    $code = "BTC";
//}else{
//    $code = $_GET["code"];
//}

$code = $_GET["code"] ?? "BTC";
$converter = new CryptoConverter($code);
$rateInUSD = $converter->convert();
echo "{\"rate\": $rateInUSD }";