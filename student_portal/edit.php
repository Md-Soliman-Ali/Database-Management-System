<?php 
 
    require_once("connection.php");
    $UserID = $_GET['GetID'];
    $query = " select * from records where User_ID='".$UserID."'";
    $result = mysqli_query($con,$query);
 
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
    }
 
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" a href="css/bootstrap.css" />
        <link rel="stylesheet" a href="style.css">
        <title>Registration Form</title>
    </head>

    <body>
           <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-black text-center py-4"> Update Form</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $UserID ?>" method="post">
                                <input type="text" class="form-control mb-3" placeholder=" User Name " name="name" value="<?php echo $UserName ?>">
                                <input type="email" class="form-control mb-3" placeholder=" Email " name="email" value="<?php echo $UserEmail ?>">
                                <input type="text" class="form-control mb-3" placeholder=" Age " name="age" value="<?php echo $UserAge ?>">
                                <input type="text" class="form-control mb-3" placeholder=" Blood Group " name="blood" value="<?php echo $UserBlood ?>">
                                <input type="text" class="form-control mb-3" placeholder=" Department " name="department" value="<?php echo $UserDepartment ?>">
                                <input type="text" class="form-control mb-3" placeholder=" Phone Number " name="phone" value="<?php echo $UserPhone ?>">
                                <input type="password" class="form-control mb-3" placeholder=" Password " name="password" value="<?php echo $UserPassword ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>