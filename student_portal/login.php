<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Login And Registration</title>
    <link rel="stylesheet" a href="style.css">
    <link rel="stylesheet" a href="css/bootstrap.css" />
</head>

<body class="login">
    <div class="container">
        <div class="login_box">
            <div class="row">
                <div class="col-md-10 login-left">
                    <h2> Login Here </h2>
                    <form action="validation.php" method="post">
                        <div class="from-group">
                            <lebel>
                                Email
                            </lebel>
                            <input type="text" name="email" class="form-control" required>
                        </div>

                        <div class="from-group">
                            <lebel>
                                Password
                            </lebel>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary"> Login </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>