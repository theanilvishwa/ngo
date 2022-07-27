<?php
// session_start();
include("valid.php");
include "sidenav.php";
include "topheader.php";
$selectQuery = "SELECT * FROM portfolio";
$con = dbConnection();
$result = mysqli_query($con,$selectQuery);
$res = array();
while($row = mysqli_fetch_assoc($result)){
  array_push($res,$row);
}
//print_r($res["content2"]);

// foreach($res as $a){
// print_r ($a['heading']);
// }


?>
      <!-- End Navbar -->
      <div class="content bg-light">
        <div class="container-fluid">
        
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">All Portfolio Post List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter ">
                    <thead class=" text-primary">
                      <tr>
                        <th>Portfolio Heading</th>
                        <th>Portfolio title</th>
                        <th>Portfolio img</th>
                        <th>Portfolio Link</th>
                        <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                    <?php foreach($res as $a) { ?>
                    <tr>
                        <td><?php echo $a['heading'];?></td>
                        <td><?php echo $a['title'];?></td>
                        <td><?php echo $a['img'];?></td>
                        <td><?php echo $a['link'];?></td>
                        <td>
	                       <a class=" btn btn-primary" href="removePortfolioPost.php?id=<?php echo $a['id'];?>">Remove</a>
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