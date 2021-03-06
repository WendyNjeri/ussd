<?php

$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if($text == "")
{
    $response = "CON What would you want to check \n";
    $response .= "1. My account Number \n";
    $response .= "2. My phone Number \n";

}else if($text == "1")
{
    $response = "CON Choice account information to view \n";
    $response .= "1. Acoount Number \n";
    $response .= "2. Phone Number \n";


}else if($text == "2")
{
    $response = "END phone number is : \n".$phoneNumber;
}else if($text == "1*1")
{
    $accountNumber = "Action1";
    $response = "END Your account number is: \n".$accountNumber;

}else if($text == "1*2")
{
    $balance = "kes 10,000";
    $response = "END Your balance is: \n".$balance;
}
 header('content-type: text/plain');
 echo $response;

?>