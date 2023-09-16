<?php
$server = "localhost";
$username = "id21264021_root";
$password = "Sharma@123";
$database = "id21264021_counselec_users";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>
