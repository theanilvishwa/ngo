<?php
session_start();

include("config.php");

if(!isset($_POST['submit']))
{
  echo "isset post data..";

  $heading = $_POST['heading'];
  $content = $_POST['content'];
  $amount = $_POST['amount'];
 
  $link = $_POST['link'];
 
  
  $startdate = $_POST['startdate'];
  $enddate = $_POST['enddate'];
 
   echo $_POST['heading'];
   echo $_POST['content'];
   echo $_POST['link'];
   echo $_POST['startdate'];
   echo $_POST['enddate'];
  

   $img = $_FILES['img']['name'];
   $filedir = "compaign_img/".$img;
   move_uploaded_file($_FILES['img']['tmp_name'], $filedir);
    
   $insertQuery = "INSERT INTO compaign(heading,content,amount,link,img,startdate,enddate)VALUE('$heading','$content','$amount','$link','$img','$startdate','$enddate')";
   //echo $a;
   
   $con = dbConnection();
   $result = runQuery($con,$insertQuery);
   
   if($result){
   echo "data inserted compaignpost successfully...";
   header("location: compaignpost.php");
 
  }else{
     echo "data not inserted compaign post...";
 }
 
//picture coding
}else{
       echo "Not in post...";
}
?>