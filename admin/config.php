<?php


function dbConnection()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName  = "oshi";
    
    $connection = mysqli_connect($host, $user, $password, $dbName);
    
    if($connection == false)
    {
        die("Error: Could Not connected..." . mysqli_connect_error());
    } else {
        return $connection;
    }
}

function runQuery($connection,$query)
{
    //echo "Inside runquery...";
    
    $result = mysqli_query($connection,$query);
    return $result;
}

function location($loc)
{
    echo "<script>location.assign('$loc');</script>";   
}

function alert($message){
    echo "<script>alert($message)</script>";
}


?>