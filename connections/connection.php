<?php 
function connection(){
//variable declarations 
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "DBStudent_system"; /*database name here*/
//assigning of instance to mysqli method 
$con = new mysqli($host,$username,$password,$database);

if($con-> connect_error){
    echo $con ->connect_error;
    }else{
    return $con;
    }

    try {
        $con = new mysqli($host, $username, $password, $database);
        $con->set_charset("utf8mb4");
        return $con;
    } catch (Exception $e) {
        error_log($e->getMessage());
        // Display a generic error message to the user instead of echoing the error message
        die("Oops! Something went wrong. Please try again later.");
    }

}
?>