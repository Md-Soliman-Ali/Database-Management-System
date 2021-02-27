<?php 
 
    require_once("connection.php");
 
    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserAge = $_POST['age'];
        $UserBlood = $_POST['blood'];
        $UserDepartment = $_POST['department'];
        $UserPhone = $_POST['phone'];
        $UserPassword = $_POST['password'];
 
        $query = " update records set user_name = '".$UserName."', user_email='".$UserEmail."',user_phone='".$UserPhone."',user_password='".$UserPassword."',user_department='".$UserDepartment."',blood_group='".$UserBlood."',user_age='".$UserAge."' where User_ID='".$UserID."'";
        $result = mysqli_query($con,$query);
 
        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Check Query ';
        }
    }
    else
    {
        header("location:view.php");
    }
?>