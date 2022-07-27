<?php
session_start();
include("config.php");

if(!isset($_POST['submit']))
{
 $heading = $_POST['heading'];
 $title = $_POST['title'];
 $link = $_POST['link'];
 
 echo $_POST['heading'];
 echo $_POST['title'];
 echo $_POST['link'];
 
 $img = $_FILES['img']['name'];
 $filedir = "portfolio_img/".$img;
 move_uploaded_file($_FILES['img']['tmp_name'], $filedir);
 
$insertQuery = "INSERT INTO portfolio(heading,title,link,img)VALUE('$heading','$title','$link','$img')";
//echo $a;
$con = dbConnection();
$result = runQuery($con,$insertQuery);
if($result){
  //echo "data inserted successfully...";
  header("location: portfoliopost.php");
}else{
    echo "data not inserted ...";
}
//picture coding
}else{
  echo "not in post...";
}
?>