<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="css/bootstrap.css" />
    <link rel="stylesheet" a href="style.css" />
    <title>Registration Form</title>
</head>

<body class="index">
      <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-black text-center py-4"> Registration Form</h3>
                    </div>
                    <div class="card-body">

                            <form action="insert.php" method="post">
                            <input type="text" class="form-control mb-3" placeholder=" User Name " name="name">
                            <input type="email" class="form-control mb-3" placeholder=" Email " name="email">
                           <input type="text" class="form-control mb-3" placeholder=" Age " name="age">
                           <input type="text" class="form-control mb-3" placeholder=" Blood Group " name="blood">
                            <input type="text" class="form-control mb-3" placeholder=" Department " name="department">
                            <input type="text" class="form-control mb-3" placeholder=" Phone Number " name="phone">
                            <input type="password" class="form-control mb-3" placeholder=" Password " name="password">
                            <button class="btn btn-primary" name="submit">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>