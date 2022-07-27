<?php
// session_start();
include("valid.php");
include "sidenav.php";
include "topheader.php";
$id = $_GET['id'];
$selectQuery = "SELECT * FROM compaign WHERE id='$id'";
$con = dbConnection();
$result = mysqli_query($con,$selectQuery);
$res = array();
while($row = mysqli_fetch_assoc($result)){
  array_push($res,$row);
}
foreach($res as $a){

}
?>

<div class="content bg-light">
  <div class="container-fluid">
    <form action="allcompaignpostlistUpdate.php" method="post" enctype="multipart/form-data">
    <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h5 class="title">Edit Compaign Post</h5>
        </div>
        <div class="card-body">
                       
            <div class="row">
              
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Compaign Heading</label>
                    <input type="text" value="<?php echo $a['heading'];?>" name="heading" class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Compaign Amount</label>
                        <input type="number" id="amount" value="<?php echo $a['amount'];?>" name="amount" class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Compaign Content</label>
                        <textarea id="description" name="content"><?php echo $a['content'];?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                      <label>Compaign Start Date</label>
                      <input type="date" name="startdate" value="<?php echo $a['startdate'];?>" class="form-control" required/>
                      <label>Compaign End Date</label>
                      <input type="date" name="enddate" value="<?php echo $a['enddate'];?>" class="form-control" required/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="">
                       <label for="">Compaign Image</label>
                       <input type="file" name="img" required class="btn btn-fill btn-success" required/>
                      <img src="compaign_img/<?php echo $a['img'];?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="">
                       <input type="hidden" name="id" value="<?php echo $a['id'];?>" class="btn btn-fill btn-success">
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" value="upload" class="btn btn-primary">Update Compaing Post</button>
    </form>
  </div>
</div>

<script src="ckeditor/ckeditor.js"></script>
<script>

// CKEDITOR.replace('description');  
CKEDITOR.replace('description');

</script>

