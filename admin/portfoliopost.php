<?php
//echo $_POST['heading'];
// session_start();
include("valid.php");
include "sidenav.php";
include "topheader.php";?>
      <!-- End Navbar -->
<div class="content bg-light">
  <div class="container-fluid">
    <form action="addPortfoliopost.php" method="post" type="form" name="form" enctype="multipart/form-data">
    <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h5 class="title">Add Portfolio Post</h5>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Heading</label>
                  <input type="text" name="heading" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>LINK</label>
                  <input type="text" name="link" placeholder="makePayment.php" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-4">
                <div class="">
                  <label for="">Add Image</label>
                  <input type="file" name="img" class="btn btn-fill btn-success" id="picture" required/>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" value="upload" class=" btn btn-primary">Add New Portfolio Post</button>
    </form>
  </div>
</div>