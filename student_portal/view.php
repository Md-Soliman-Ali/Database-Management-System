<?php 
    session_start();
    require_once("connection.php");

    $query = " select * from records ";
    $result = mysqli_query($con,$query);

    if(!isset($_SESSION['MEEM'])){
    header('location:login.php');
}
 
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" a href="css/bootstrap.css" />
        <link rel="stylesheet" a href="style.css" />
        <title>View Records</title>
    </head>

    <body class="view">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> User ID </td>
                                <td> Name </td>
                                <td> Email </td>
                                <td> Age </td>
                                <td> Blood Group </td>
                                <td> Department </td>
                                <td> Phone Number </td>
                                <td> Password</td>
                                <td> Update </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['user_id'];
                                        $UserName = $row['user_name'];
                                        $UserEmail = $row['user_email'];
                                        $UserAge = $row['user_age'];
                                        $UserBlood = $row['blood_group'];
                                        $UserDepartment = $row['user_department'];
                                        $UserPhone = $row['user_phone'];
                                        $UserPassword = $row['user_password'];
                                       
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $UserID ?>
                                    </td> 
                                    <td>
                                        <?php echo $UserName ?>
                                    </td>
                                    <td>
                                        <?php echo $UserEmail ?>
                                    </td>
                                    <td>
                                        <?php echo $UserAge ?>
                                    </td>
                                    <td>
                                        <?php echo $UserBlood ?>
                                    </td>
                                    <td>
                                        <?php echo $UserDepartment ?>
                                    </td>
                                    <td>
                                        <?php echo $UserPhone ?>
                                    </td>
                                    <td>
                                        <?php echo $UserPassword ?>
                                    </td>

                                    <td><a href="edit.php?GetID=<?php echo $UserID ?>">Update</a></td>
                                    <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                                </tr>
                                <?php 
                                    }  
                            ?>


                        </table>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>