<?php 
  session_start();
  include("admin/config.php");
  $con = dbConnection();
  if(isset($_POST['amt']) && isset($_POST['name']))
   {
     $amt = htmlspecialchars($_POST['amt']);
     $name = htmlspecialchars($_POST['name']);
     $payment_status = "pending";
     $query = "insert into paymentInfo(name,amount,payment_status)values('$name','$amt','$payment_status')";
     mysqli_query($con,$query);
     $_SESSION['OID'] = mysqli_insert_id($con);
    }
if(isset($_POST['payment_id']) && isset($_SESSION['OID']))
    {
      $payment_id = $_POST['payment_id'];
      $query = "update paymentInfo set payment_status = 'compelete', payment_id='$payment_id' where id = '".$_SESSION['OID']."'";
      mysqli_query($con,$query);
    }

?>

