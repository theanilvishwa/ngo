<?php 
  session_start();
  include("admin/config.php");
  $con = dbConnection();
  if(isset($_POST['amt']) && isset($_POST['name']))
  {
    //  $payment_id = $_POST['payment_id'];
     $amt =  htmlspecialchars($_POST['amt']);
     $name = htmlspecialchars($_POST['name']);
     $email = htmlspecialchars($_POST['email']);
     $address = htmlspecialchars($_POST['address']);
     $phone = htmlspecialchars($_POST['phone']);
     
     
     $payment_status = "pending";
     $query = "insert into paymentdetailcompaign(name,email,phone,address,amount,payment_status,payment_id)values('$name','$email','$phone','$address','$amt','$payment_status','$payment_id')";
     mysqli_query($con,$query);
     $_SESSION['PID'] = mysqli_insert_id($con);
  }
  if(isset($_POST['payment_id']) && isset($_SESSION['PID']))
  {
    $payment_id = $_POST['payment_id'];
    $query = "update paymentdetailcompaign set payment_status = 'compelete', payment_id='$payment_id' where id = '".$_SESSION['PID']."'";
    mysqli_query($con,$query);
  }
  
?>

