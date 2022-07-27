<?php
// session_start();
include("valid.php");

///echo $_POST['heading1'];

include "sidenav.php";
include "topheader.php";
$editQuery = "SELECT * FROM about";
$con = dbConnection();
$result = mysqli_query($con,$editQuery);
$res = array();
while($row = mysqli_fetch_assoc($result)){
  array_push($res,$row);
}
//print_r($res["content2"]);
foreach($res as $a){
//print_r ($a['content1']);
}

?>
      <!-- End Navbar -->
<script src="ckeditor/ckeditor.js"></script>
<div class="content bg-light">
  <div class="container-fluid">
    <form action="update-about.php" method="post" type="form" name="form" enctype="multipart/form-data">
    <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h5 class="title">Update About Page</h5>
        </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Heading</label>
                  <input type="text" name="heading1" value="<?php echo $a['heading1'];?>" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea id="description" name="content1"><?php echo $a['content1'];?></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="">
                  <label for="">Add Image</label>
                  <input type="file" name="img1" class="btn btn-fill btn-success" required/><img src="about_img/<?php echo $a['img1'];?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Heading</label>
                  <input type="text" name="heading2"  value="<?php echo $a['heading2'];?>" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea id="description1" name="content2"><?php echo $a['content2'];?></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="">
                  <label for="">Add Image</label>

                  <input type="file" name="img2" class="btn btn-fill btn-success" id="picture" required/>
                  <img src="about_img/<?php echo $a['img2'];?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Heading</label>
                  <input type="text" name="heading3"  value="<?php echo $a['heading3'];?>" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>content</label>
                  <textarea type="text" class="form-control" name="content3"><?php echo $a['content3'];?></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="">
                  <label for="">Add Image</label>
                  <input type="file" name="img3" class="btn btn-fill btn-success" required/>
                  <img src="about_img/<?php echo $a['img3'];?>">
                </div>
              </div>
                       
              <div class="col-md-12">
                <div class="form-group">
                  <label>Heading</label>
                  <input type="text" name="heading4"  value="<?php echo $a['heading4'];?>" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>content</label>
                  <textarea type="text" class="form-control" name="content4"><?php echo $a['content4'];?></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="">
                  <label for="">Add Image</label>
                  <input type="file" name="img4" class="btn btn-fill btn-success" required/>
                  <img src="about_img/<?php echo $a['img4'];?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Heading</label>
                  <input type="text" name="heading5"  value="<?php echo $a['heading5'];?>" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>content</label>
                  <textarea type="text" class="form-control" name="content5" ><?php echo $a['content5'];?></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="">
                  <label for="">Add Image</label>
                  <input type="file" name="img5" class="btn btn-fill btn-success" id="picture" required/>
                  <img src="about_img/<?php echo $a['img5'];?>">
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <button type="submit" value="upload" class=" btn btn-primary">Update About Page</button>
    </form>
  </div>
</div>

<script>
  CKEDITOR.replace('description');  
  CKEDITOR.replace('description1');  
</script>