 <?php session_start(); 
 error_reporting(0);
 ?>
 


 <?php
require_once 'connect.php';
require_once 'Login.php';


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
                background-image: url("Images/john-matychuk-393455.jpg") repeat= "no repeat";
                font-family: 'Josefin Sans', sans-serif;
                background-size: 100% 100%;
            }
            #btns{
                width:30%;
            }
        </style>
    </head>
    <body id="main">
        <br><br>
        <div class="container">
            <div class="jumbotron bg-success text-dark shadow">
                <br>
                <center>
                    <h1 class="display-1">ADMIN PAGE</h1>
                    <hr>
                    <p class="lead">Add, Remove or Search for a vehicle.</p>
                </center>  
            </div><br><br>

            <center>
               <h1>
               <?php 
               
               echo $_SESSION['name'];
                
                ?> 
            
               </h1>


                <a id="btns" class="btn btn-outline-success btn-lg" href="add.php">ADD VEHICLE</a><br><br>
                <a id="btns" class="btn btn-outline-success btn-lg" href="remove.php">REMOVE VEHICLE</a><br><br>
                <a id="btns" class="btn btn-outline-success btn-lg" href="search.php">SEARCH VEHICLE</a><br><br><br>

                <a id="btns" class="btn btn-outline-success btn-lg" href="index.php">LOGOUT</a>
            </center>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>
