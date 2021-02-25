



<?php


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
               header('Location:login.php');
           }
        
      
    }
}

?>