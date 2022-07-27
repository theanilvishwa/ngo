<?php
// session_start();
include("valid.php");

$id = $_GET['id'];

$deletQuery = "DELETE FROM portfolio WHERE id = '$id'";
$con = dbConnection();
$deleteData = mysqli_query($con,$deletQuery);
if($deleteData){
    echo "portfolio post data successfully delete....";
    header("location: allportfoliopostlist.php");
}else{
    echo "portfolio post data not delete....";
    header("location: allportfoliopostlist.php");
}
?>