<?php

session_start();
require 'connection.php';

$user = $_POST['email'];
$password = $_POST['password'];

$select_q = "SELECT count(*) as OMAR FROM records WHERE user_email='$user' and user_password='$password'";
$db_q = mysqli_query($con, $select_q);
$after_assoc = mysqli_fetch_assoc($db_q);


if($after_assoc['OMAR']==1){
    $_SESSION['MEEM']=1;
    header('location:view.php');
}
else{
    echo 'Hey You Forget Your Password Please Try To Remember It ...';
}

?>