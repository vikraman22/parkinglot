
<?php session_start();
//error_reporting(0);
?>

<?php

require_once 'connect.php';
require_once 'user_func.php';


    
       $connection = mysqli_connect('localhost', 'root', '', 'parking');

        if(isset($_POST['login'])) {
        $phone_no = $_POST['phno'];
        $validity_check = $_POST['pswd'];

        // && u_password='$validity_check'

        $query = " SELECT * from users where phone_no='$phone_no' ";
        $result =  mysqli_query($connection, $query);
        $row =  mysqli_fetch_array($result);
        
          $db_username = $row['u_name'];
          $db_userpasswd = $row['u_password'];
          $db_phone = $row['phone_no'];

          if($phone_no !== $db_phone && $validity_check !== $db_userpasswd)
          {              
                  
                  header("location:Login.php"); 
          }
  
          else if($phone_no == $db_phone && $validity_check == $db_userpasswd)
          {
              $_SESSION['name'] = $db_username;
              $_SESSION['no']=$db_phone;
              $_SESSION['pass'] = $db_userpasswd;
              header("location:admin.php");
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
                /* background-image: url("Images/matte_black.jpg");*/
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
        <form action="Login.php" method="post" >
            <div class="jumbotron bg-primary text-dark shadow">
                <br>
                <center>
                    <h1 class="display-1">ADMIN LOGIN</h1>                             
                    <hr>
                    <p class="lead">Login to your account or <a href="signup.php" class="text-dark" href="signup.php"> SIGNUP </a></p>
                </center>
            </div><br><br>
            <center>
            <small class="text-muted">Phone Number</small>
                <input type="text" class ="form-control btn-outline-primary border forms" name="phno" id="phno" placeholder="Phone Number"><br><br>
                <small class="text-muted">Password</small>
                <input type="password" class ="form-control btn-outline-primary border forms" name="pswd" id="pswd" placeholder="Password"><br><br>
                <button class="btn btn-outline-primary" id="btns" name="login">LOGIN</button><br><br>
                <a id="btns" class="btn btn-outline-primary" href="index.php">HOME</a>
            </center>
        </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>