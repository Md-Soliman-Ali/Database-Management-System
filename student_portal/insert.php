<?php
 
    require_once("connection.php");
 
    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age']) || empty($_POST['blood']) ||empty($_POST['department']) || empty($_POST['phone'])  || empty($_POST['password']) )
        {
            echo "Hey You Didn't Complete Your All Information ..."  ;
        }
        else
        {
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $UserAge = $_POST['age'];
            $UserBlood = $_POST['blood'];
            $UserDepartment = $_POST['department'];
            $UserPhone = $_POST['phone'];
            $UserPassword = $_POST['password'];
 
            $query = " insert into records (user_name, user_email,user_age,blood_group,user_department,user_phone,user_password) values('$UserName','$UserEmail','$UserAge','$UserBlood','$UserDepartment','$UserPhone','$UserPassword')";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:login.php");
            }
            else
            {
                echo ' please check your query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }
 ?>