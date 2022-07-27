<?php
// session_start();
include("valid.php");

$id = $_GET['id'];

$deletQuery = "DELETE FROM compaign WHERE id = '$id'";
$con = dbConnection();
$deleteData = mysqli_query($con,$deletQuery);
if($deleteData){
    echo "Compaign post data successfully delete....";
    header("location: allportfoliopostlist.php");
}else{
    echo "Compaign post data not delete....";
    header("location: allcompaignpostlist.php");
}
?>