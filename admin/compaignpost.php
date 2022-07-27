<?php
// session_start();
include("valid.php");

include "sidenav.php";
include "topheader.php";
?>
<!-- End Navbar -->
<div class="content bg-light">
  <div class="container-fluid">
    <form action="addcompaignpost.php" method="post" enctype="multipart/form-data">
    <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h5 class="title">Add Compaign Post</h5>
        </div>
        <div class="card-body">
                       
            <div class="row">
              
              <div class="col-md-12">
                <div class="form-group">
                  <label>Compaign Heading</label>
                  <input type="text" name="heading" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Compaign Amount</label>
                  <input type="number" id="amount" name="amount" class="form-control" required/>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                  <label>Compaign url</label>
                  <input type="text" placeholder="viewcompaignpost_Pay.php" name="link" class="form-control" required/>
                </div>
              </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Compaign Content</label>
                  <textarea id="description" name="content"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Compaign Start Date</label>
                  <input type="date" name="startdate" class="form-control" required/>
                  <label>Compaign End Date</label>
                  <input type="date" name="enddate" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-4">
                <div class="">
                  <label for="">Compaign Image</label>
                  <input type="file" name="img" required class="btn btn-fill btn-success" required/>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" value="upload" class="btn btn-primary">Add New compaing Post</button>
    </form>
  </div>
</div>

<script src="ckeditor/ckeditor.js"></script>
<script>

// CKEDITOR.replace('description');  
CKEDITOR.replace('description');

</script>