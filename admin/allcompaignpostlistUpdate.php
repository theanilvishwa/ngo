<?php
// session_start();

include("valid.php");


echo $id;

if(!isset($_POST['submit']))
{
  echo "isset post data..";

  $id = $_POST['id'];


  $heading = $_POST['heading'];
  $content = $_POST['content'];
  $amount = $_POST['amount'];
 
  //$link = $_POST['link'];
 
  
  $startdate = $_POST['startdate'];
  $enddate = $_POST['enddate'];
 
//    echo $_POST['heading'];
//    echo $_POST['content'];
//    echo $_POST['link'];
//    echo $_POST['startdate'];
//    echo $_POST['enddate'];
  

   $img = $_FILES['img']['name'];
   $filedir = "compaign_img/".$img;
   move_uploaded_file($_FILES['img']['tmp_name'], $filedir);
    
   $updateQuery = "UPDATE compaign SET heading='$heading',content='$content',amount='$amount',startdate='$startdate',enddate='$enddate',img='$img' WHERE id='$id'";
   //$insertQuery = "INSERT INTO compaign(heading,content,amount,link,img,startdate,enddate)VALUE('$heading','$content','$amount','$link','$img','$startdate','$enddate')";
   //echo $a;
   
   $con = dbConnection();
   $result = runQuery($con,$updateQuery);
   
   if($result){
   echo "Compaign Post Data update Successfully...";
   header("location: allcompaignpostlist.php");
 
  }else{
     echo "Compaign Post Data Not Update ...";
 }
 
//picture coding
}else{
       echo "Not Set  In Post...";
}
?>