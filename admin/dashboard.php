<?php
// session_start();
// if(isset($_SESSION['username'])){
//   //echo $_SESSION['username'];
  
// }else{
//   //echo 'abcc';  
//   header("Location: /ngo/index.php");
  
// }

include("valid.php");
$con = dbConnection();

$selectQuery = "SELECT * FROM portfolio";
$allPortfolioPost = mysqli_query($con,$selectQuery);
$numberPortfolioPost = mysqli_num_rows($allPortfolioPost);
//echo $numberPortfolioPost; 
$selectCompaignQuery = "SELECT * FROM compaign";
$allCompaignPost = mysqli_query($con,$selectCompaignQuery);
$numberCompaignPost = mysqli_num_rows($allCompaignPost);
//echo $_SESSION['username'];
$paymentdetailcompaignQuery = "SELECT * FROM paymentdetailcompaign";
$allpaymentdetailcompaign = mysqli_query($con,$paymentdetailcompaignQuery);
$numberpaymentdetailcompaign = mysqli_num_rows($allpaymentdetailcompaign);


include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
<div class="content bg-light">
  <div class="container-fluid">
    <div class="panel-body">
    <a>
      <?php  //success message
      if(isset($_POST['success'])) {
      $success = $_POST["success"];
      echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
      }
      

    ?>
    </a>
  </div>
    <div class="col-md-12">
      <div class="card bg-light">
        <div class="card-header card-header-primary">
          <h3 class="card-title"><b><i>YOU CAN MANAGE SOME FROM HERE</i></b></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="">
            <div class="card-body">
              <div class="card-header card-header-primary bg-success">
                <h4 class="card-title text-white"><a href="allportfoliopostlist.php">ALL PORTFOLIO POST <span style="border:5px solid red;">&nbsp;<?php echo $numberPortfolioPost;?></span></a></h4>
              </div>
            </div>
          </a>  
        </div>
        <div class="col-md-4">
          <a href="">  
            <div class="card-body">
              <div class="card-header card-header-primary bg-success">
                <h4 class="card-title text-white"><a href="allcompaignpostlist.php">ALL COMPAIGN POST LIST<span style="border:5px solid red;">&nbsp;<?php echo $numberCompaignPost;?></span></a></h4>
              </div>
            </div>
          </a>  
        </div>
        <div class="col-md-4">
          <a href="">  
            <div class="card-body">
              <div class="card-header card-header-primary bg-success">
                <h4 class="card-title text-white"><a href="allTransacationList.php"> Donner Transcation List<span style="border:5px solid red;">&nbsp;<?php echo $numberpaymentdetailcompaign;?></span></a></h4>
              </div>
            </div>
          </a>   
        </div>
      </div>
    </div>


    <style>
          h4 span{
          background-color: red;
          margin-right: 10px;
          border-radius: 50%;
          padding-right: 34px;
         align-items: center;
          }
         </style>