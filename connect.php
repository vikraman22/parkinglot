<?php

global $connection;
$connection = mysqli_connect('localhost', 'root', '', 'parking');

if (!$connection)
    echo "connection failed";

//fucntion for login

function login()
{
    $connection = mysqli_connect('localhost', 'root', '', 'parking');

    if (isset($_POST['login'])) {
        $phone_no = $_POST['phno'];
        $validity_check = $_POST['pswd'];


        $query = " SELECT * from users where phone_no='$phone_no' && u_password='$validity_check'";
        $result =  mysqli_query($connection, $query);

        while ($row =  mysqli_fetch_assoc($result))
            print_r($row);
    }
}

function signup()
{
    $connection = mysqli_connect('localhost', 'root', '', 'parking');

    if (isset($_POST['signup'])) {
        $uname = $_POST['u_name'];
        $phone_no = $_POST['phno'];
        $pass = $_POST['u_pswd'];


        $query = "INSERT INTO users values('$uname', '$pass', '$phone_no') ";
        $result = mysqli_query($connection, $query);

        if (!$result)
            die('query failed' . mysqli_error($connection));
        else
           {
               echo '<script>alert("User account created")</script>'; 
               header('login.php');
           }
        
      
    }
}

?>