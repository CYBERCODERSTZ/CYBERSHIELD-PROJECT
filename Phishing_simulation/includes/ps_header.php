 <?php  
 $query= mysqli_query($conn,"SELECT * FROM user WHERE Email='$session_id'")or die(mysqli_error());
 $row = mysqli_fetch_array($query);     
 ?> 

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="ps_admin.php?page=dashboad" class="nav-link">Phishing Simulation</a>
      </li> 
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">   
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?php echo $row['thumbnail']; ?>" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?php echo $row['FullName'];  ?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="<?php echo $row['thumbnail']; ?>" class="img-circle elevation-2" alt="User Image">

            <p>
               <?php echo $row['FullName'];  ?>
              <small>Member Of Cybershield 2024</small>
            </p>
          </li> 
          <li class="user-footer">
            <a href="ps_admin.php?page=profile" class="btn btn-default btn-flat">Profile</a>
            <a href="logout.php" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> 
    </ul>
  </nav>
   