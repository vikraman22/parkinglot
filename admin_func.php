

<?php 
require_once 'connect.php';

// function cost_calc()
// {

//     $connection = mysqli_connect('localhost', 'root', '', 'parking');

//     if (isset($_POST['search'])) {
//         $veh_no =  $_POST['v_name'];
//         $query = "SELECT DATEDIFF(CURRENT_DATE,(SELECT Parking_date from book_details where vehicle_no = '$veh_no') ) as cost";

//         $date_query = "SELECT Parking_date from book_details where vehicle_no = '$veh_no'";




//         $result =  mysqli_query($connection, $query);

//         $date_result = mysqli_query($connection, $date_query);

//         if (!$result) {
//             die('sql query failed');
//         }




//         $cost = mysqli_fetch_array($result);
//         $parking_date = mysqli_fetch_array($date_result);

//         if (is_null($parking_date))
//         echo '<script>alert("No vehicles found")</script>';

//         else {
//             $_SESSION['park_cost'] = ($cost[0] + 1) * 30;
//             $_SESSION['date_park'] = $parking_date[0];
//         }
//     }
// }



// function remove_car()
// {

//     require_once 'connect.php';
//     $connection = mysqli_connect('localhost', 'root', '', 'parking');

//     cost_calc();

//     if (isset($_POST['details'])) {
//         $veh_no =  $_POST['v_num'];

//         $query = "SELECT DATEDIFF(CURRENT_DATE,(SELECT Parking_date from book_details where vehicle_no = '$veh_no') ) as cost";
//         $date_query = "SELECT Parking_date from book_details where vehicle_no = '$veh_no'";

//         $result =  mysqli_query($connection, $query);
//         $date_result = mysqli_query($connection, $date_query);

//         if (!$result) {
//             die('sql query failed');
//         }


//         $cost = mysqli_fetch_array($result);
//         $parking_date = mysqli_fetch_array($date_result);
//         if (is_null($parking_date))
//             echo '<script>alert("No vehicles found")</script>';

//         else {
//             $_SESSION['park_cost'] = ($cost[0] + 1) * 30;
//             $_session['date_park'] = $parking_date[0];
//         }
//     }


//     if (isset($_POST['remove'])) {

//         $vechicle = $_POST['v_num'];

//         $query = "DELETE FROM book_details where vehicle_no='$vechicle'";
//         mysqli_query($connection, $query);

//         echo '<script>alert("Vehicle removed and Money collected")</script>';
//     }
// }


function add_car()
{
    require_once 'connect.php';
    $connection = mysqli_connect('localhost', 'root', '', 'parking');



    if(isset($_POST['add'])) {
        $uname = $_POST['u_name'];
        $phone_no = $_POST['phno'];
        $v_no = $_POST['v_num'];

     
        $count_query = "SELECT COUNT(*) FROM book_details";
        $result = mysqli_query($connection, $count_query);

        $count = mysqli_fetch_array($result);

        if($count[0] < 50)
        {
            $query = "INSERT INTO book_details(u_name, phone_no, vehicle_no, Parking_date) VALUES ('$uname', '$phone_no' , '$v_no' ,CURRENT_DATE)";
            $result = mysqli_query($connection, $query);
    
            if (!isset($result))
                die('query failed' . mysqli_error($result));
    
            else {
                echo '<script>alert("Vechicle inserted")</script>';
    
            }
        }

        else
        {
            echo '<script>alert("Lot full")</script>';   
        }
       
    }
}
