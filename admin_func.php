<?php

require_once 'connect.php';



function cost_calc()
{

    $connection = mysqli_connect('localhost', 'root', '', 'parking');

    if(isset($_POST['search']))
   {
    $veh_no =  $_POST['v_name'];  
    $query = "SELECT DATEDIFF(CURRENT_DATE,(SELECT Parking_date from book_details where vehicle_no = '$veh_no') ) as cost";
    
    $date_query = "SELECT Parking_date from book_details where vehicle_no = '$veh_no'";


        

    $result =  mysqli_query($connection, $query);

    $date_result = mysqli_query($connection, $date_query);

    if(!$result)
    {
        die('sql query failed');
    }


    
     
     $cost = mysqli_fetch_array($result);
     $parking_date = mysqli_fetch_array($date_result);
 
     if(is_null($parking_date))
     echo 'no vehicle found';
    else
    {
        print_r(($cost[0]+1)*30);
        print_r($parking_date[0]);
    }
     

           


   } 

}



function remove_car()
{
 
    require_once 'connect.php';
    $connection = mysqli_connect('localhost', 'root', '', 'parking');

    cost_calc();

    if(isset($_POST['details']))
    {
     $veh_no =  $_POST['v_num'];  
    
    $query = "SELECT DATEDIFF(CURRENT_DATE,(SELECT Parking_date from book_details where vehicle_no = '$veh_no') ) as cost";    
    $date_query = "SELECT Parking_date from book_details where vehicle_no = '$veh_no'";

    $result =  mysqli_query($connection, $query);
    $date_result = mysqli_query($connection, $date_query);

    if(!$result)
    {
        die('sql query failed');
    }
    
     
     $cost = mysqli_fetch_array($result);
     $parking_date = mysqli_fetch_array($date_result);
     if(is_null($parking_date))
     echo '<script>alert("No vehicles found")</script>'; 
             
     else{
        print_r(($cost[0]+1)*30);
        print_r($parking_date[0]);
     }
     

    }


    if (isset($_POST['remove']))
     {
    
        $vechicle = $_POST['v_num'];

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
        
        // $date = "SELECT CURRENT_DATE();";       

        $query = "INSERT INTO book_details(u_name, phone_no, vehicle_no, Parking_date) VALUES ('$uname', '$phone_no' , '$v_no' ,CURRENT_DATE)";
    
        $result = mysqli_query($connection, $query);

        if(!isset($result))
            die('query failed' . mysqli_error($result));
        // else
        //    {
        //        echo '<script>alert("Vechicle inserted")</script>'; 
        //     //    while ($row =  mysqli_fetch_array($result))
        //     //       print_r($row);
        //    }
        
      
    }
}
