 
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?page=dashboad" class="nav-link"><i class="fa fa-user"></i> Welcome | <?php echo $user_row['f_name']." ".$user_row['l_name'];  ?>~<b style="color: red;"><?php echo $user_row['reg_number'] ?></b></a> 
      </li>
       
    </ul>
    <?php 
     include('connection.php');
      $query= mysqli_query($conn,"SELECT region FROM `arrive_tb` WHERE  reg_number='$session_id'")or die(mysqli_error());
    $coll = mysqli_fetch_array($query); 
    $region=$coll['region'];
         $query= mysqli_query($conn,"SELECT COUNT(comment) as number FROM  `comment` WHERE region='$region'")or die(mysqli_error());  
    $count = mysqli_fetch_array($query);  
 ?>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto"> 
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#"> 
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge"><?php echo $count['number'] ?></span>
        </a> 
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <?php  
          $region=$coll['region']; 
          $query1= mysqli_query($conn,"SELECT * FROM `comment` WHERE region='$region'")or die(mysqli_error());    
          ?>
          <?php while($coll1 = mysqli_fetch_array($query1)){ ?>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media"> 
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php echo $coll1['name'];  ?>
                  <div class="dropdown-divider"></div>
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm"><?php echo $coll1['comment'] ?></p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><?php echo $coll1['date'] ?></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div> 
          <?php }?>  
        </div>
      
      </li> 
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">  
      <li><a class="nav-link" href="logout.php" role="button"><i class="fa fa-sign-out-alt"></i> Logout</a></li> 
    </ul>
  </nav>
  <!-- /.navbar -->
