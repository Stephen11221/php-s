<?php
 include("connect.php");
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
    <div class="container-fluid">
        <div class="row g-3">
            <div class="col-3">
                
                <form action="" class="form-floating">
                    <input type="search" id="search" required class="form-control" placeholder="place search here">
                    <label for="" class="form-label"> <div class="fa fa-search"></div></label>
                    
                    <div class="invalid-feedback">Search not found</div>
                    <div class="search valid-feedback">Thanks for searching</div>
                  </form>
            </div>
            <div class="col-3">
                
                <button class="btn btn-warning text-white">Search</button>
            
            </div>

            <div class="col-3" >
                <span><i class="fa fa-user"></i> Account</span>
            </div>
            <div class="col-3">
                <span><i class="fa fa-shopping-cart"></i>cart</span>
            </div>
        </div>
        <main class="overflow-scroll " style="height: 70vh;  border: 1px solid black;">

        </main>
        <div class="row text-center g-3" style="margin-top: 0px; padding: 10px 0px; margin-left: 10px;">
            <div class="col-2 "  style="margin-left:20px ;">
                <a href="" class="nav-link">
                    <span><i class="fa fa-home fa-3x"></i> <br>  home</span>
                </a>
            </div>
            
            <div class="col-2" style="margin-left:20px ;">
                <a href="" class="nav-link">
                    <span><i class="fa fa-calculator fa-3x"></i> <br>  calculator</span>
                </a>
            </div>
            
            <div class="col-2"style="margin-left:20px ;">
                <a href="" class="nav-link">
                    <span><i class="fa fa-phone fa-3x"></i><br>  Contact</span>
                </a>
            </div>
            <div class="col-2"style="margin-left:20px ;">
                <a href="" class="nav-link">
                    <span><i class="fa fa-question fa-3x"></i> <br>  help</span>
                </a>
            </div>


        </div>
    </div>
    <script src="bootstrap.bundle.js.map"></script>
    <script src="bootstrap.bundle.js"></script>
</body>
</html>