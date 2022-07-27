<?php 
//session_start();
//echo $_SESSION['username'];
?>
     <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top bg-info">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Admin Pannel</a>
            
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                 <a class="nav-link" href="logout.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <span class="text-uppercase font-weight-bold font-italic h5">Welcome  ::  </span><?php echo $_SESSION['username']; ?>  
                  <i class="material-icons">person</i>
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      