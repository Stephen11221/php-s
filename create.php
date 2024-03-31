<?php
    include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
        <form action="signup.php" method="POST" novalidate> <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <label for="">Full Name</label>
                    <input type="text" id="name" name="fullname" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="">Phone</label>
                    <input type="number" class="form-control" id="phoneno" name="phoneno">
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
            </div>
            <div class="icon" style="text-align: center;; margin-top: 40px;">
                <span class="bg-secondary rounded-pill  p-3"><i class="fa fa-facebook"></i></span>
                <span class="bg-secondary rounded-pill p-3"><i class="fa fa-google"></i></span>
                <span class="bg-secondary rounded-pill p-3"><i class="fa fa-instagram"></i></span>
            </div> <br> <br> <br><br>
            <center>
                <button type="submit" class="btn btn-dark " name="submit">SIGN UP</button> <br> <br>
                <p> Already have an account? <a href="login.php" class="text-dark">Login</a></p>
            </center>
        </div>
    </form>

    <script src="bootstrap.bundle.js.map"></script>
    <script src="bootstrap.bundle.js"></script>
</body>
</html>