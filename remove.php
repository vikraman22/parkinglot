<?php
require_once 'connect.php';
require_once 'admin_func.php';

remove_car();


?>
<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Parking Lot</title>
        <style>
            #main{
                background-image: url("Images/matte_black.jpg");
                font-family: 'Josefin Sans', sans-serif;
                background-size: 100% 100%;
            }
            .forms{
                width:50%;
            }
            #btns{
                width:25%;
            }
        </style>
    </head>

    <body id="main">
        <br>  
        <form action="remove.php" method="post">
            <div class="container">
                <div class="jumbotron bg-success text-dark shadow">
                    <br>
                    <center>
                        <h1 class="display-1">REMOVE A VEHICLE</h1>
                    </center>
                </div><br><br>
                <form name="details">
                    <small class="text-muted">Vehicle Number</small>

                    <input type="text" class ="form-control btn-outline-success border forms" name="v_num" id="vhno" placeholder="Vehicle Number"><br>
                    <!-- <small class="text-muted">Phone Number</small>

                    <input type="text" class ="form-control btn-outline-success border forms" name="phone_no" id="phone_no" placeholder="phone Number"><br>
                     -->
                    <p class="text-success h3">Date of parking: <p class="text-success h3" name="park_date"></p> </p>
                    <p class="text-success h3">Total Cost: <p class="text-success h3" name="cost"></p> </p>
                </form>
                <center>
                    <button class="btn btn-outline-success" id="btns" name="details" >DETAILS</button><br><br>
    
                    <button class="btn btn-outline-success" id="btns" name="remove" >REMOVE</button><br><br>
                    <a id="btns" class="btn btn-outline-success" href="admin.php">HOME</a>
                </center>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>