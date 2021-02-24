<?php


global $connection;
$connection = mysqli_connect('localhost', 'root', '', 'parking');

if (!$connection)
    echo "connection failed";

//fucntion for login

