<?php
// session_start();
include("valid.php");
include "sidenav.php";
include "topheader.php";
$paymentinfoQuery = "SELECT * FROM paymentinfo";
$con = dbConnection();
$paymentinforesult = mysqli_query($con,$paymentinfoQuery);
$res = array();
while($row = mysqli_fetch_assoc($paymentinforesult)){
  array_push($res,$row);
}


$paymentdetailcompaignQuery = "SELECT * FROM paymentdetailcompaign";
//$con = dbConnection();
$paymentdetailcompaignresult = mysqli_query($con,$paymentdetailcompaignQuery);
$result = array();
while($row = mysqli_fetch_assoc($paymentdetailcompaignresult)){
  array_push($result,$row);
}


?>
      <!-- End Navbar -->
      <div class="content bg-light">
        <div class="container-fluid">
        
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h3 class="card-title">ALL DONNER LIST</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                <h4 class="bg-danger text-white">Optional Payment List</h4>
                  <table class="table table-hover tablesorter ">
                    <thead class="text-primary">
                      <tr>
                        <th>Name</th>
                        <th></th>
                        <th>Amount</th>
                        <th></th>
                        <th>Payment Status</th>
                        <th></th>
                        <th>Payment ID</th>
                        <th></th>
                        <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                      <?php  foreach($res as $a) {  ?>
                        <tr>
                          <td><?php echo $a['name'];?></td>
                          <td></td>
                          <td><?php echo $a['amount'];?></td>
                          <td></td>
                          <td><?php echo $a['payment_status'];?></td>
                          <td></td>
                          <td><?php echo $a['payment_id'];?></td>
                          <td></td>
                          <td>
                            <a class=" btn btn-primary" href="#">Remove</a>
                          </td>
                        </tr>
                      <?php } ?>  
                    </tbody>
                  </table>
                  <h4 class="bg-danger text-white">Compaign Payment List</h4>
                  <table class="table table-hover tablesorter ">
                    <thead class=" text-primary">
                      <tr>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Payment Status</th>
                        <th>Payment ID</th>
                        <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                      <?php  foreach($result as $b){ ?>
                        <tr>
                          <td><?php echo $b['name'];?></td>
                          <td><?php echo $b['amount'];?></td>
                          <td><?php echo $b['email'];?></td>
                          <td><?php echo $b['phone'];?></td>
                          <td><?php echo $b['address'];?></td>
                          <td><?php echo $b['payment_status'];?></td>
                          <td><?php echo $b['payment_id'];?></td>
                          <td>
                            <a class=" btn btn-primary" href="#">Remove</a>
                          </td>
                        </tr>
                      <?php } ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>