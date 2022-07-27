<?php
session_start();
include("config.php");

if(!isset($_POST['submit']))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    //validateUser($username,$password);

    $con = dbConnection(); //Database connection function....
    $selectQuery = "SELECT * FROM oshi_admin WHERE username='$username' and password = '$password'"; //data check by mysql query..
    //$result = mysqli_query($con, $query);
    $result = runQuery($con, $selectQuery); //mysqli_query function for execute query......
    $data = array();   //define a array for put data.....
        
    while($row = mysqli_fetch_assoc($result))
    {    
        array_push($data, $row);
    }   
        //print_r ($data[0]['username']);
    
    if(count($data) > 0) 
    {
        //$_SESSION["username"] = "";
        $_SESSION["username"] = $data[0]['username'];
        //echo "successfull user login.......";
        location("dashboard.php");  
    }else
    {
        //echo "failed user login.......";
        session_destroy();
        location("index.php");
    }
}

?>