<?php
include '../connection.php';

$userName =  $_POST ['user_name'];
$userEmail =  $_POST ['user_email'];
$userPassword =  md5($_POST ['user_password']);
//$userBalance = ['user_balance'];
//$userCoin = ['user_coin'];

$sqlQuery = "INSERT INTO users_table SET user_name = '$userName', user_email = '$userEmail', user_password = '$userPassword'/*, user_balance = '$userBalance', user_coin = '$userCoin'*/";

$resultOfQuery =  $connectNow->query($sqlQuery);

if($resultOfQuery){
    echo json_encode(array("success"=>true));
}
else{
    echo json_encode(array("success"=>false));    
}