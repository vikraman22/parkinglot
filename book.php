<?php session_start(); ?>

<?php
require_once 'connect.php';

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
        <div class="container">
            <div class="jumbotron bg-warning text-dark shadow">
                <br>
                <center>
                    <h1 class="display-1">BOOKING</h1>                             
                    <hr>
                    <p class="lead">Book your parking lot</p>
                </center>
            </div><br><br>
            <form name="details">
                <small class="text-muted">Vehicle Number</small>
                <input type="text" class ="form-control btn-outline-warning border forms" name="v_name" id="vhno" placeholder="Vehicle Number"><br>
                <p class="text-warning h3">Number of parking lots: <p class="text-warning h3" name="total"></p> </p>
                <p class="text-warning h3">Number of available parking lots: <p class="text-warning h3" name="available"></p> </p>
            </form>
            <center>
                <button class="btn btn-outline-warning" id="btns" >BOOK</button><br><br>
                <a id="btns" class="btn btn-outline-warning" href="index.php">HOME</a>
            </center>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>