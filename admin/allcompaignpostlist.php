<?php
// session_start();
include("valid.php");
include "sidenav.php";
include "topheader.php";
$selectQuery = "SELECT * FROM compaign";
$con = dbConnection();
$result = mysqli_query($con,$selectQuery);
$res = array();
while($row = mysqli_fetch_assoc($result)){
  array_push($res,$row);
}
?>
      <!-- End Navbar -->
      <div class="content bg-light">
        <div class="container-fluid">
        
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">All Compaign Post List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter ">
                    <thead class=" text-primary">
                      <tr>
                        <th>Compaign Heading</th>
                        <th>Compaign url</th>
                        <th>Compaign Amount</th>
                        <th>Compaign Start Date</th>
                        <th>Compaign End Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($res as $a) { ?>
                      <tr>
                        <td><?php echo $a['heading'];?></td>
                        <td><?php echo $a['link'];?></td>
                        <td><?php echo $a['amount'];?></td>
                        <td><?php echo $a['startdate'];?></td>
                        <td><?php echo $a['enddate'];?></td>
                        <td>
	                       <a class=" btn btn-primary" href="allcompaignpostlistRemove.php?id=<?php echo $a['id'];?>">Remove</a>
                         <a class=" btn btn-primary" href="allcompaignpostlistEdit.php?id=<?php echo $a['id'];?>">Edit</a>
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