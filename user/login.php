<?php
include '../connection.php';

$userEmail =  $_POST ['user_email'];
$userPassword =  md5($_POST ['user_password']);
//$userBalance = ['user_balance'];
//$userCoin = ['user_coin'];

$sqlQuery = "SELECT * FROM users_table WHERE user_email = '$userEmail' AND user_password = '$userPassword'";/*, user_balance = '$userBalance', user_coin = '$userCoin'*/

$resultOfQuery =  $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0)
{
    $userRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc()){
        $userRecord[] = $rowFound;
    }

    echo json_encode(
        array("success"=>true,
        "userData"=>$userRecord[0],
        )
        
    );
}
else
{
    echo json_encode(array("success"=>false));    
}