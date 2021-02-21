<?php
require_once 'connect.php';

signup();


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
        #main {
            background-image: url("Images/matte_black.jpg");
            font-family: 'Josefin Sans', sans-serif;
            background-size: 100% 100%;
        }

        .forms {
            width: 80%;
        }

        #btns {
            width: 25%;
        }
    </style>
</head>

<body id="main">
    <br>
    <div class="container">
        <div class="jumbotron bg-primary text-dark shadow">
            <br>
            <center>
                <h1 class="display-1">SIGNUP</h1>
                <hr>
                <p class="lead">Create a new account</p>
            </center>
        </div><br><br>

        <form action="signup.php" method="post">
            <div class="row">
                <div class="col">
                    <center>
                        <small class="text-muted">Name</small>
                        <input type="text" class="form-control btn-outline-primary border forms" name="u_name" id="name" placeholder="Name"><br><br>
                        <small class="text-muted">Password</small>
                        <input type="password" class="form-control btn-outline-primary border forms" name="u_pswd" id="pswd" placeholder="Password">
                    </center>
                </div>
                <div class="col">
                    <center>
                        <small class="text-muted">Phone Number</small>
                        <input type="number" class="form-control btn-outline-primary border forms" name="phno" id="phno" placeholder="Phone Number"><br><br>
                        <small class="text-muted">Confirm Password</small>
                        <input type="password" class="form-control btn-outline-primary border forms" name="u_pswd" id="confpswd" placeholder="Confirm Password">
                    </center>
                </div>
            </div><br><br>
            <center>
                <button class="btn btn-outline-primary" id="btns" name="signup">SIGNUP</button><br><br>
                <a id="btns" class="btn btn-outline-primary" href="index.php">HOME</a>
            </center>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>