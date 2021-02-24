<?php

require_once 'connect.php';


function remove_car()
{
 
    require_once 'connect.php';
    $connection = mysqli_connect('localhost', 'root', '', 'parking');



    if (isset($_POST['remove']))
     {
    
        $vechicle = $_POST['vnum'];

        $query = "DELETE FROM book_details where vehicle_no='$vechicle'";
        mysqli_query($connection, $query);
        echo '<script>alert("Vehicle removed and Money collected")</script>'; 
               
    }
    
}


function add_car()
{
    require_once 'connect.php';
    $connection = mysqli_connect('localhost', 'root', '', 'parking');



    if (isset($_POST['add'])) {
        $uname = $_POST['u_name'];
        $phone_no = $_POST['phno'];
        $v_no = $_POST['v_num'];
        
        //  $date = "SELECT CURRENT_DATE();";
        //  mysqli_query($connection,$date);        

        $query = "INSERT INTO book_details('u_name','phone_no','vehicle_no', 'Parking_date') ";
        $query .= " VALUES ('$uname', '$phone_no', '$v_no', SELECT SYSDATE();)";
        
        $result = mysqli_query($connection, $query);

        if(!isset($result))
            die('query failed' . mysqli_error($result));
        else
           {
               echo '<script>alert("Vechicle inserted")</script>'; 
            //    while ($row =  mysqli_fetch_array($result))
            //       print_r($row);
           }
        
      
    }
}



?>