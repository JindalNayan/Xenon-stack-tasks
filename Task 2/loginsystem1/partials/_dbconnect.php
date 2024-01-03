<?php
$server = "db4free.net";
$username = "nyn_carxenon";
$password = "Nayan@1608";
$database = "xenonstack_cars"

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    //     echo "success";
    // } 
    // else {
    die("Error" . mysqli_connect_error());
}
