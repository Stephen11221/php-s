<?php
 include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
</head>
<body>
    <div class="container">
        <br> <br>
        <center>
            <span class="btn btn-dark rounded-pill  " style="font-size: 87px; padding: 20px 20px;"><i class="fa fa-user"></i></span>
            <br> <br>
            <h5>LOGIN</h5>
        </center>
        <div class="row input-2">
            <div class="col-lg-12">
            
                <form action="" class="form-floating">
                    <input type="search" id="search" required class="form-control" placeholder="place search here">
                    <label for="" class="form-label" style="width: 100%;">Email  <div class="fa fa-user float-end "></div></label>
                    <br>
                
                    <input type="search" id="search" required class="form-control" placeholder="place search here">
                    <label for="" class="form-label" style="width: 100%; margin-top: 86px;">Password  <div class="fa fa-key float-end "></div></label>                   
             
                    <p style="font-size: 0.7rem;">LOGIN
                        email
                        password
                        Remember me
                        forgot your password?
                        LOGIN</p>
                        
                        <center>
                            <button class="btn btn-dark">Login </button>
                        </center>
             
                </form>
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js.map"></script>
    <script src="bootstrap.bundle.js"></script>
</body>
</html>