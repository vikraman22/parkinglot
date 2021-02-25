<?php 
session_start();
?>

<?php
require_once 'connect.php';
require_once 'admin_func.php';

function cost_calc()
{

    $connection = mysqli_connect('localhost', 'root', '', 'parking');

    if (isset($_POST['search'])) {
        $veh_no =  $_POST['v_name'];
        $query = "SELECT DATEDIFF(CURRENT_DATE,(SELECT Parking_date from book_details where vehicle_no = '$veh_no') ) as cost";
        $date_query = "SELECT Parking_date from book_details where vehicle_no = '$veh_no'";


        $result =  mysqli_query($connection, $query);

        $date_result = mysqli_query($connection, $date_query);

        if (!$result) {
            die('sql query failed');
        }


        $cost = mysqli_fetch_array($result);
        $parking_date = mysqli_fetch_array($date_result);

        if (is_null($parking_date))
        echo '<script>alert("No vehicles found")</script>';

        else {
            $park_cost = ($cost[0] + 1) * 30;
            $date_park = $parking_date[0];
            echo $cost[0];
            echo $_SESSION['name'];
        }
    }
}


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
        <form action="search.php" method="post">
            <div class="container">
                <div class="jumbotron bg-success text-dark shadow">
                    <br>
                    <center>
                        <h1 class="display-1">SEARCH A VEHICLE</h1>
                    </center>
                </div><br><br>
                <form name="details">
                    <small class="text-muted">Vehicle Number</small>
                    <input type="text" class ="form-control btn-outline-success border forms" name="v_name" id="vhno" placeholder="Vehicle Number"><br>
                    <button class="btn btn-outline-success" id="btns" name='search' >SEARCH</button><br><br>
                    <p class="text-success h3">Date of parking: <?php ?>
                    <p class="text-success h3" name="park_date"></p> </p>
                   
                    <p class="text-success h3">Total Cost: <?php    ?> 
                    <p class="text-success h3" name="cost"></p> </p>
                </form>
                <center>
                    <a id="btns" class="btn btn-outline-success" href="admin.php">HOME</a>
                </center>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>